<?php

namespace App\Http\Controllers\Admin;

use App\Builders\SchoolBuilder;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;
use App\Repositories\DistrictRepository;
use App\Repositories\ReviewRepository;
use App\Repositories\SchoolRepository;

class SchoolController extends Controller {

    protected $builder;

    protected $repository;

    protected $district_repository;


    public function __construct() {
        $this->builder = new SchoolBuilder();
        $this->repository = new SchoolRepository();
        $this->district_repository = new DistrictRepository();
    }


    public function index() {
        $schools = $this->repository->getAllForAdmin();

        return view('admin.school.index', compact('schools'));
    }


    public function create() {
        $districts = $this->district_repository->getAllForAdmin();

        return view('admin.school.create', compact('districts'));
    }


    public function store(CreateSchoolRequest $request) {
        $this->builder
            ->createEmpty()
            ->setTitle($request->title)
            ->setAddress($request->address)
            ->setDistrictId($request->district_id)
            ->setLatitude($request->latitude)
            ->setLongitude($request->longitude)
            ->save();

        return redirect('/admin/schools');
    }


    public function edit(string $uuid) {
        $school = $this->repository->getByUuidForAdmin($uuid);
        $districts = $this->district_repository->getAllForAdmin();

        return view('admin.school.edit', compact('school', 'districts'));
    }


    public function update(UpdateSchoolRequest $request, string $uuid) {
        if ($school = $this->repository->getByUuidForAdmin($uuid)) {
            $this->builder
                ->loadModel($school)
                ->setTitle($request->title)
                ->setAddress($request->address)
                ->setDistrictId($request->district_id)
                ->setLatitude($request->latitude)
                ->setLongitude($request->longitude)
                ->save();
        }

        return redirect('/admin/schools');
    }


    public function destroy(string $uuid) {
        $school = $this->repository->getByUuidForAdmin($uuid);

        $school->delete();

        return redirect('/admin/schools');
    }


    public function reviews(string $uuid) {
        $school = $this->repository->getByUuidForAdmin($uuid);

        return view('admin.school.reviews', compact('school'));
    }
}
