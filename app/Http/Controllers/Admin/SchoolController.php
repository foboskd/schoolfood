<?php

namespace App\Http\Controllers\Admin;

use App\Builders\SchoolBuilder;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSchoolRequest;

class SchoolController extends Controller {

    protected $builder;

    public function __construct() {
        $this->builder = new SchoolBuilder();
    }

    public function create() {
        return view('admin.school.create');
//        return view('admin.review.create');
    }

    public function store(CreateSchoolRequest $request) {
        $this->builder
            ->createEmpty()
            ->setTitle($request->title)
            ->setAddress($request->address)
            ->save();

        return 200;
    }

}
