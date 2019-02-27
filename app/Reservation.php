<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
	public function Client()
	{
		return $this->belongsTo(Client::class);
	}

	public function Order()
	{
		return $this->belongsTo(Order::class);
	}
}
