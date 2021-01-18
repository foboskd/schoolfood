<?php

namespace App\Repositories;


use App\Models\School;
use Illuminate\Support\Facades\Auth;

class SchoolRepository extends CoreRepository {

    private $model;

    public function __construct() {
        $this->model = new School();
    }

    protected function getModel() {
        return $this->model;
    }

    public function getAllForModerator() {
        $query_builder = $this->getModel()
            ->forAdmin()
            ->whereNotNull('district_id')
            ->whereDistrictId(Auth::user()->district_id)
            ->orderBy('created_at', 'DESC')
            ->get();

        return $query_builder;
    }

}