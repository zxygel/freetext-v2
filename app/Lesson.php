<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
	use SoftDeletes;

   	protected $dates = ['deleted_at'];

	protected $fillable = [
        'title', 'content',
    ];

    public function user()
    {
    	return $this->belongsToMany('App\User');
    }

    public function assignment()
    {
    	return $this->hasMany('App\Assignment'); //1 is to 1
    }
}
