<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;
class UserProfileTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();
			for($i = 0;$i < 30;$i ++)
			{
				$codigo = $faker->unique()->numberBetween(100000000,999999999);

				$id = \DB::table('users')->insertGetID(array(
				'name' => $codigo,
				'password' => \Hash::make('1234')
							));

				\DB::table('Profile')->insert(array(
				'nombre' => $faker->name,
				'apellidop' => $faker->firstName,
				'apellidom' => $faker->lastName,
				'codigo' => $codigo,
				'DNI' => $faker->unique()->numberBetween(10000000,99999999),
				'correo' => $faker->unique()->email,
				'fechadeNacimiento' => $faker->date,
				'celular' => $faker->unique()->numberBetween(100000000,999999999),
				'direccion' => $faker->address,
				'activo' => 'si',
				'id_user' => $id,
				'id_detalle' => $faker->numberBetween(1,10)

			));

	}
}

}
