<?php

namespace App\Repositories;


use App\Models\District;

class DistrictRepository extends CoreRepository {

    private $model;

    public function __construct() {
        $this->model = new District();
    }

    protected function getModel() {
        return $this->model;
    }

}