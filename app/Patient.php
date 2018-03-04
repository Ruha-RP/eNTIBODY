<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

    public function tests()
    {
        return $this->hasMany('App\Test');
    };
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    //These are mass assignables
    protected $fillable = [
        'name', 'hospital_number', 'dob',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function test() {

    //     return $this-> hasMany('App\Test');
    // }
}


