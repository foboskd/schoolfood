<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSchoolRequest;
use Illuminate\Http\Request;

class SchoolController extends Controller {

    public function create() {
        return view('admin.school.create');
    }

    public function store(CreateSchoolRequest $request) {

    }

}
