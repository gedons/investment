<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//imported
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $guard = 'admin';

    protected $fillable = [
        'name',
        'type',
        'email',
        'password',
        'created_at',
        'updated_at',
        
    ];

   protected $hidden = [
        'password',
        'remember_token',
    ];
}
