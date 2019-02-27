<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	public function Reservation()
	{
		return $this->belongsTo(Reservation::class);
	}

	public function Dish()
	{
		return $this->hasMany(Dish::class);
	}
}
