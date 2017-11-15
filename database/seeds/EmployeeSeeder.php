<?php

use SocioSanitario\Employee;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class EmployeeSeeder extends Seeder
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
			Employee::create(
				[
					'NIF'=>$faker->regexify('[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]{1}'),
					'name'=>$faker->firstName($gender = 'male'|'female'),
					'lastName1'=>$faker->lastName,
					'lastName2'=>$faker->lastName,
					'address'=>$faker->address,
					'phone'=>$faker->regexify('[7-9]{3}[0-1]{6}'),
					'idUser'=>$faker->numberBetween(1,5)
				]
			);
		}
    }
}
