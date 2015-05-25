<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NotasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nota', function(Blueprint $table)
		{
			$table->increments('id_Notas');
			$table->decimal('parcial',2,2);
                        $table->decimal('final',2,2);
                        $table->decimal('proyecto',2,2);
                        $table->decimal('practica1',2,2);
                        $table->decimal('practica2',2,2);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nota');
	}

}
