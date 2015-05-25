<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DiasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dias', function(Blueprint $table)
		{
			$table->increments('idDias');
                        $table->time("horainicio");
                        $table->time("horafinal");
                        $table->enum("Dias",["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"]);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dias');
	}

}
