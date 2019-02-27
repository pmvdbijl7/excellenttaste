<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subkind extends Model
{
	public function Kind()
	{
		return $this->belongsTo(Kind::class);
	}

	public function Dish()
	{
		return $this->hasMany(Dish::class);
	}
}
