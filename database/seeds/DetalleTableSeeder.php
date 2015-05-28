
<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DetalleTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

			#Tipos de Usuario
			\DB::table('detalle')->insert(array(
					'id_tipo' => 1,
					'nombre' => 'Admi',
					'descripcion' =>'Usuario que Posee Todos los provilegios y acceso a los datos.'	
			));
			\DB::table('detalle')->insert(array(
					'id_tipo' => 1,
					'nombre' => 'Secretaria',
					'descripcion' =>'Usuario que Posee Acceso a cursos,alumnos , puede hacer operaciones basicas.'	
			));
			\DB::table('detalle')->insert(array(
					'id_tipo' => 1,
					'nombre' => 'Profesor',
					'descripcion' =>'acceso a notas de los alumnos,solo lectura para curso.'	
			));
			\DB::table('detalle')->insert(array(
					'id_tipo' => 1,
					'nombre' => 'Alumno',
					'descripcion' =>'Tienen acceso a sus datos,cursos,profesor,pero no hace operaciones.'	
			));
			#Tipos de Categoria de Cursos
			\DB::table('detalle')->insert(array(
					'id_tipo' => 2,
					'nombre' => 'Diplomado',
					'descripcion' =>'Curso de categoria diplomado.'	
			));
			\DB::table('detalle')->insert(array(
					'id_tipo' => 2,
					'nombre' => 'Titulacion',
					'descripcion' =>'Curso de categoria Titulado.'	
			));
			\DB::table('detalle')->insert(array(
					'id_tipo' => 2,
					'nombre' => 'Maestria',
					'descripcion' =>'Curso de categoria Maestria.'	
			));
			#Tipos de Nivel de Cursos
			\DB::table('detalle')->insert(array(
					'id_tipo' => 3,
					'nombre' => 'Basica',
					'descripcion' =>'Curso de nivel basico.'	
			));
			\DB::table('detalle')->insert(array(
					'id_tipo' => 3,
					'nombre' => 'Intermedio',
					'descripcion' =>'Curso de nivel intermedio.'	
			));
			\DB::table('detalle')->insert(array(
					'id_tipo' => 3,
					'nombre' => 'avanzado',
					'descripcion' =>'Curso de nivel avanzado.'	
			));

			
	}
}
