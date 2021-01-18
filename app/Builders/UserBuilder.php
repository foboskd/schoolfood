<?php

namespace App\Builders;


use App\Models\User;

class UserBuilder extends CoreBuilder {

    public function createEmpty(): CoreBuilder {
        $this->model = new User();

        return $this;
    }

    public function setPassword(string $password) {
        $this->model->password = bcrypt($password);

        return $this;
    }

}