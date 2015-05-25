<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle', function(Blueprint $table)
		{
			$table->increments('id_detalle');
			$table->integer('id_tipo');
                        $table->string('nombre',20);
                        $table->string('descripcion',50);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detalle');
	}

}
