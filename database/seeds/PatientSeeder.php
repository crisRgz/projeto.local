<?php
use SocioSanitario\Patient;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Faker::create();

		for ($i=0; $i<8; $i++)
		{
			Patient::create(
				[
					'NIF'=>$faker->regexify('[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]{1}'),
					'name'=>$faker->firstName($gender = 'male'|'female'),
					'lastName1'=>$faker->lastName,
					'lastName2'=>$faker->lastName,
					'address'=>$faker->address,
					'phone'=>$faker->regexify('[7-9]{3}[0-1]{6}'),
					'contactName'=>$faker->name($gender = 'male'|'female'),
					'contactPhone'=>$faker->regexify('[7-9]{3}[0-1]{6}'),
					'lat'=>$faker->latitude($min = 41.7, $max = 43.8),
	            	'long'=>$faker->longitude($min = -6,7, $max = -9,3),
	            	'idUser'=>$faker->numberBetween(1,5)
				]
			);
		}
    }
}
