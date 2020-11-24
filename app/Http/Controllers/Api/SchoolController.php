<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\SchoolRepository;
use Illuminate\Http\Request;

class SchoolController extends Controller {

    private $repository;

    public function __construct() {
        $this->repository = new SchoolRepository();
    }

    public function show(string $uuid) {
        return $this->repository->getByUuidForPublic($uuid);
    }

}
