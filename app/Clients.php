<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
	public function Reservation()
	{
		return $this->hasMany(Reservation::class);
	}

	public function Order()
	{
		return $this->hasMany(Order::class);
	}
}
