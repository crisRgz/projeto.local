<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{
		Model::unguard();
		$this->call('UserSeeder');
		$this->call('EmployeeSeeder');
		$this->call('PatientSeeder');
		$this->call('ServiceSeeder');
		$this->call('TreatmentSeeder');
	   	$this->call('TypeSeeder');
	   	
	}
}
