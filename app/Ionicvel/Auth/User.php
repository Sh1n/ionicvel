<?php

namespace App\Ionicvel\Auth;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use EntrustUserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'login_counter', 'last_signed_in_at'
    ];

    /**
     * Dates attributes
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'last_signed_in_at', 'deleted_at'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
