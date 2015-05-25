<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DispHorariaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DispHorario', function(Blueprint $table)
		{
			$table->increments('id_disp_horaria');
			$table->integer('id_profile');
                        $table->integer('id_dias')->unsigned();
                        $table->foreign('id_dias')
                                ->references('idDiasD')->on('DiasDisponibles')
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
		Schema::drop('DispHorario');
	}

}
