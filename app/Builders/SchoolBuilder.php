<?php

namespace App\Builders;


use App\Models\School;

class SchoolBuilder extends CoreBuilder {

    public function createEmpty(): CoreBuilder {
        $this->model = new School();

        return $this;
    }

}