<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	public function Kind()
	{
		return $this->hasMany(Kind::class);
	}
}
