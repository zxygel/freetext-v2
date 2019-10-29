<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'contact', 'gender', 'birthdate', 'address',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User'); //1 is to 1
    }
}
