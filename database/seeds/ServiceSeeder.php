<?php
use SocioSanitario\Service;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Faker::create();

		for ($i=0; $i<5; $i++)
		{
			Service::create(
				[
					'name'=>$faker->word,
					'description'=>$faker->word,
					'idType'=>$faker->numberBetween(1,3)
				]
			);
		}
    }
}
