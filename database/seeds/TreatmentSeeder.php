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
					'dateTimeStart'=>$faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
			        'dateTimeEnd'=>$faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
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

