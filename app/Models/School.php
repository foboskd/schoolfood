<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;

class School extends CoreModel {

    private static $public_fields = ['title', 'address'];

    private static $admin_fields = ['uuid', 'created_at', 'updated_at', 'district_id', 'latitude', 'longitude'];


    public static function getPublicFields() {
        return self::$public_fields;
    }

    public static function getAdminFields() {
        return array_merge(self::$public_fields, self::$admin_fields);
    }

    public function reviews() {
        return $this->hasMany('App\Models\Review', 'school_uuid', 'uuid')->orderBy('created_at', 'DESC');
    }

    public function reviews_trashed() {
        return $this->hasMany('App\Models\Review', 'school_uuid', 'uuid')->orderBy('created_at', 'DESC')->onlyTrashed();
    }

    public function reviewsSum() {
        return $this->hasMany('App\Models\Review', 'school_uuid', 'uuid')->sum('score');
    }

    public function getFileAttribute($value) {
        return Storage::url('public/files/' . $value);
    }


}
