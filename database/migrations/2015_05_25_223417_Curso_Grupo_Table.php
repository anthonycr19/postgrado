<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CursoGrupoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('CursoGrupo', function(Blueprint $table)
		{
			$table->increments('idCursoGrupo');
                        $table->integer('idCurso')->unsigned();
                        $table->integer('idHorario')->unsigned();
                        $table->foreign('idCurso')
                                ->references('idCurso')->on('curso')
                                ->onDelete("cascade");
                        $table->foreign('idHorario')
                                ->references('id_horario')->on('horario')
                                ->onDelete("cascade");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('CursoGrupo');
	}

}
