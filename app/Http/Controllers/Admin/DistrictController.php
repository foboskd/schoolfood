<?php

namespace App\Http\Controllers\Admin;

use App\Builders\DistrictBuilder;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateDistrictRequest;
use App\Repositories\DistrictRepository;

class DistrictController extends Controller {

    protected $builder;

    protected $repository;


    public function __construct() {
        $this->builder = new DistrictBuilder();
        $this->repository = new DistrictRepository();
    }


    public function index() {
        $districts = $this->repository->getAllForAdmin();

        return view('admin.district.index', compact('districts'));
    }


    public function create() {
        return view('admin.district.create');
    }


    public function store(CreateDistrictRequest $request) {
        $this->builder
            ->createEmpty()
            ->setTitle($request->title)
            ->save();

        return redirect('/admin/districts');
    }


    public function edit(int $id) {
        $district = $this->repository->getByIdForAdmin($id);

        return view('admin.district.edit', compact('district'));
    }


    public function update(CreateDistrictRequest $request, int $id) {
        if ($district = $this->repository->getByIdForAdmin($id)) {
            $this->builder
                ->loadModel($district)
                ->setTitle($request->title)
                ->save();
        }

        return redirect('/admin/districts');
    }


    public function destroy(int $id) {
        $district = $this->repository->getByIdForAdmin($id);

        $district->delete();

        return redirect('/admin/districts');
    }
}
