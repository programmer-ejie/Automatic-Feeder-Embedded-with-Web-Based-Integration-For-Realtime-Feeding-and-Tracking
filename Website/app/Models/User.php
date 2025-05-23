<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;

    protected $fillable = [
        'profile_path',
        'first_name',
        'last_name',
        'phone_number',
        'address',
        'gmail',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
