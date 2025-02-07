<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDishesTable extends Migration
{
	/**
	 * Run the migrations.
	 * @return void
	 */
	public function up()
	{
		Schema::create('dishes', function (Blueprint $table)
			{
				$table->increments('id');
				$table->integer('subkind_id');
				$table->string('name');
				$table->decimal('price', 5, 2);
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('dishes');
	}
}
