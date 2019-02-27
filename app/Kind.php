<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kind extends Model
{
	public function Menu()
	{
		return $this->belongsTo(Menu::class);
	}

	public function Subkind()
	{
		return $this->hasMany(Subkind::class);
	}
}
