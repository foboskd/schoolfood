<?php

namespace App\Models;


use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;

abstract class CoreModel extends Model {

    use UsesUuid;

    protected $guarded = [];

}