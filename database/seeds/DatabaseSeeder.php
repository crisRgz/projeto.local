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
		$this->call('EmpregadoSeeder');
		$this->call('FamiliarSeeder');
		$this->call('EmpresaSeeder');
		$this->call('UsuarioSeeder');
		$this->call('TipoSeeder');
	   	$this->call('ServizoSeeder');
	   	$this->call('TratamentoSeeder');
	   	
	}
}
