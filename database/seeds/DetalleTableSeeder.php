
<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;
class DetalleTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();
			for($i = 0;$i < 10;$i ++)
			{
				\DB::table('detalle')->insert(array(
					'id_tipo' => $faker->numberBetween(1,3),
					'nombre' => $faker->company(),
					'descripcion' =>$faker->sentence(5)	
			));
				
	}
}

}