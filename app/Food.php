<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'foodname', 'quantity', 'price', 'email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
