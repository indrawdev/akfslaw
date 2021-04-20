<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function posts()
	{
		return $this->hasMany('App\Post');
	}

	public function setSlugAttribute($value)
	{
		$this->attributes['slug'] = Str::slug($value);
	}
}
