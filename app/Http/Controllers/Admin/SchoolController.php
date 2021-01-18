<?php

namespace App\Http\Controllers\Admin;

use App\Builders\SchoolBuilder;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSchoolRequest;
use App\Repositories\ReviewRepository;
use App\Repositories\SchoolRepository;

class SchoolController extends Controller {

    protected $builder;

    protected $repository;

    protected $reviews_repository;


    public function __construct() {
        $this->builder = new SchoolBuilder();
        $this->repository = new SchoolRepository();
        $this->reviews_repository = new ReviewRepository();
    }


    public function index() {
        $schools = $this->repository->getAllForAdmin();

        return view('admin.school.index', compact('schools'));
    }


    public function create() {
        return view('admin.school.create');
    }


    public function store(CreateSchoolRequest $request) {
        $this->builder
            ->createEmpty()
            ->setTitle($request->title)
            ->setAddress($request->address)
            ->save();

        return redirect('/admin/schools');
    }


    public function reviews(string $uuid) {
        $school = $this->repository->getByUuidForAdmin($uuid);

        return view('admin.school.reviews', compact('school'));
    }
}
