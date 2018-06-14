<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Api_key extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'key'
    ];
}
