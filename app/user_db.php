<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_db extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password', 'isDeleted','date_of_registration'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
