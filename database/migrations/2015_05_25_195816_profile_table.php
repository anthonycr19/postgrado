<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile', function(Blueprint $table)
		{
			$table->increments('id_profile');
			$table->string('nombre',40);
                        $table->string('apellidop',40);
                        $table->string('apellidom',40);
                        $table->string('codigo',10)->unique();
                        $table->string('DNI',8)->unique();
                        $table->string('correo',40)->unique();
                        $table->date('fechadeNacimiento');
                        $table->string('celular',9)->nullable();
                        $table->string('direccion',50)->nullable();
                        $table->enum('activo',['si','no']);
                        $table->integer('id_detalle')->unsigned();
                        $table->integer('id_user')->unsigned()->unique();
                        $table->foreign("id_user")
                                ->references("id_user")->on("users")
                                ->onDelete("cascade");
                        $table->foreign("id_detalle")
                                ->references("id_detalle")->on("detalle")
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
		Schema::drop('profile');
	}

}
