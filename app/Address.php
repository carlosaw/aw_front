<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'street_num',
        'cep',
        'district',
        'city',
        'state'
    ];
}
