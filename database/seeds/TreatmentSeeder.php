<?php
use SocioSanitario\Treatment;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TreatmentSeeder extends Seeder
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
			Treatment::create(
				[
					'dateStart'=>$faker->date($format = 'Y-m-d', $max = 'now'),
			        'dateEnd'=>$faker->date($format = 'Y-m-d', $max = 'now'),
			        'monthlyHours' => $faker->numberBetween(1,30),
			        'timeStart' => $faker->time($format = 'H:i', $max = 'now'),
			        'timeEnd' => $faker->time($format = 'H:i', $max = 'now'),
			        'done'=>$faker->boolean($chanceOfGettingTrue = 50),
			        'reason'=>$faker->realText($maxNbChars = 150, $indexSize = 2),
        			'idPat'=>$faker->numberBetween(1,8),
					'idServ'=>$faker->numberBetween(1,5),
					'idEmp'=>$faker->numberBetween(1,5)
				]
			);
		}
    }
}

