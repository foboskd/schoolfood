<?php

namespace App\Http\Controllers\Admin;

use App\Builders\DistrictBuilder;
use App\Http\Controllers\Controller;
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
}
