<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {

    use Notifiable;

    protected $fillable = [
        'name',
        'password',
        'role_id',
    ];


    protected $hidden = [
        'password',
    ];


    public function role() {
        return $this->hasOne('App\Models\UserRole');
    }
}