<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Systemusers extends Authenticatable
{
    use HasFactory;

    protected $fillable=[
        'username',
        'password',
    ];
    
}
