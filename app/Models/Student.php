<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    protected $fillable = ['name', 'email', 'phone', 'course', 'password'];

    protected $hidden = ['password'];

    // We don't have a remember_token column, so disable it
    public function getRememberTokenName(): string
    {
        return '';
    }
}
