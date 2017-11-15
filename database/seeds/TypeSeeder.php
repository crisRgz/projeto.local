<?php
use SocioSanitario\Type;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Faker::create();

		for ($i=0; $i<3; $i++)
		{
			Type::create(
				[
					'type'=>$faker->randomElement(array('External','Day-care Centre','Home'))
				]
			);
		}
    }
}
