<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MatriculaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('matricula', function(Blueprint $table)
		{
			$table->integer('idprofile')->unsigned();
                        $table->integer('idCursoGrupo')->unsigned();
                        $table->integer('idNotas')->unsigned();
                        $table->integer('idperiodo')->unsigned();
                        
                        $table->primary(['idprofile','idCursoGrupo','idperiodo']);
                        $table->foreign('idprofile')
                                ->references('id_profile')->on('profile')
                                ->onDelete('cascade');
                        $table->foreign('idCursoGrupo')
                                ->references('idCursoGrupo')->on('CursoGrupo')
                                ->onDelete('cascade');
                        $table->foreign('idNotas')
                                ->references('id_Notas')->on('nota')
                                ->onDelete('cascade');
                        $table->foreign('idperiodo')
                                ->references('idperiodo')->on('periodo')
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
		Schema::drop('matricula');
	}

}
