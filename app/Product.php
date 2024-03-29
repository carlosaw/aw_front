<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    // protected $table = 'addresses';
    // protected $primaryKey = 'id';
    // public $incrementing = true;
    // protected $keyType = 'string';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'value_unit',
        'quantity',
        'discount',
        'total'
    ];
}
