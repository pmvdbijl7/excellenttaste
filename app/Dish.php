<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
	public function Subkind()
	{
		return $this->belongsTo(Subkind::class);
	}
}