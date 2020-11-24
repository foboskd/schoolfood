<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends CoreModel {

    private static $public_fields = ['title', 'address'];

    private static $admin_fields = ['uuid', 'created_at', 'updated_at'];


    public static function getPublicFields() {
        return self::$public_fields;
    }

    public static function getAdminFields() {
        return array_merge(self::$public_fields, self::$admin_fields);
    }

}
