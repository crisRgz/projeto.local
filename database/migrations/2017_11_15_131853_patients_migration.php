<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatientsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id'); // id da táboa usuarios
            $table->string('NIF');
            $table->string('name');
            $table->string('lastName1');
            $table->string('lastName2');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('contactName')->nullable();
            $table->string('contactPhone')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            // Foreign Keys
            $table->integer('idUser')->unsigned();

            // Indicamos cal e a chave foránea desta taboa:
            $table->foreign('idUser')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('patients');
    }
}
