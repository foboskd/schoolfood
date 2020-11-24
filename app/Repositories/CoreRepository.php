<?php

namespace App\Repositories;


abstract class CoreRepository {

    abstract protected function getModel();

    public function getByUuidForPublic(string $uuid) {
        $model = $this->getModel()->forPublic()->findByUuid($uuid)->firstOrFail();

        return $model;
    }

    public function getByUuidForAdmin(string $uuid) {
        $model = $this->getModel()->forAdmin()->findByUuid($uuid)->firstOrFail();

        return $model;
    }

    public function getAllForPublic() {
        $query_builder = $this->getModel()->forPublic()->get();

        return $query_builder;
    }

    public function getAllForAdmin() {
        $query_builder = $this->getModel()->forAdmin()->get();

        return $query_builder;
    }

}