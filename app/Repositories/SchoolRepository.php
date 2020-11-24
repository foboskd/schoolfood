<?php

namespace App\Repositories;


use App\Models\School;

class SchoolRepository extends CoreRepository {

    private $model;

    public function __construct() {
        $this->model = new School();
    }

    protected function getModel() {
        return $this->model;
    }

}