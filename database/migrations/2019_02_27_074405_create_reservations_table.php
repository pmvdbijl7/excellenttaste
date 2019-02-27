<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
	/**
	 * Run the migrations.
	 * @return void
	 */
	public function up()
	{
		Schema::create('reservations', function (Blueprint $table)
			{
				$table->increments('id');
				$table->integer('client_id');
				$table->date('date');
				$table->dateTime('time');
				$table->integer('table_nr');
				$table->integer('num_of_persons');
				$table->boolean('payed')->default(false);
				$table->boolean('present')->default(false);
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('reservations');
	}
}
