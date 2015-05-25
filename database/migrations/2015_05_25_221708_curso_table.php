<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CursoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('curso', function(Blueprint $table)
		{
			$table->increments('idCurso');
                        $table->string('nombre',20)->unique();
                        $table->integer('idcategoria')->unsigned();
                        $table->integer('idmodulo')->unsigned();
                        $table->foreign('idcategoria')
                                ->references('id_detalle')->on('detalle')
                                ->onDelete('cascade');
                        $table->foreign('idmodulo')
                                ->references('id_detalle')->on('detalle')
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
		Schema::drop('curso');
	}

}
