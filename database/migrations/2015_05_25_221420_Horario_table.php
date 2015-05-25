<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HorarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('horario', function(Blueprint $table)
		{
			$table->increments('id_horario');
			$table->interger('id_profile');
                        $table->interger('id_dias')->unsigned();
                        $table->foreign('id_dias')
                                ->references('idDias')->on('dias')
                                ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('horario');
	}

}
