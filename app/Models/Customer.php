<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Customer extends Model
{
    use HasFactory;

    protected $fillable=[
        'account_number',
        'firstname',
        'middlename',
        'lastname',
        'civil_status',
        'purok',
        'brgy',
        'contact_number',
        'connection_type',
        'connection_status'
    ];

    public $incrementing=false;
    protected $keyType = 'string';

    
    
    
}
