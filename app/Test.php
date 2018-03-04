<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{

	public function patient()
    {
    	return $this->belongsTo('App\Patient');
    }
    //
    // public function patient()
    // {
    // 	return $this->belongsTo('App\Patient');
    // }

     protected $fillable = [
        'posC', 'negC', 'd1', 'd2'
    ];
};


