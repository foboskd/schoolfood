<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends CoreModel {

    private static $public_fields = [];

    private static $admin_fields = ['uuid', 'school_uuid', 'text', 'file', 'fingerprint', 'score', 'created_at', 'updated_at'];


    public static function getPublicFields() {
        return self::$public_fields;
    }

    public static function getAdminFields() {
        return array_merge(self::$public_fields, self::$admin_fields);
    }

}