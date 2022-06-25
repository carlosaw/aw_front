<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //
    // protected $table = 'addresses';
    // protected $primaryKey = 'id';
    // public $incrementing = true;
    // protected $keyType = 'string';

    public $timestamps = false;

    protected $fillable = [
        'plate',
        'brand',
        'model',
        'color',
        'year',
        'km'
    ];
}
