<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TreatmentsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('treatments', function (Blueprint $table) {
            $table->increments('id');// id treatments(relation ternaria patients-services-emprployees)

            $table->dateTime('dateTimeStart');     // DATETIME beginning
            $table->dateTime('dateTimeEnd')->nullable();// DATETIME End
            $table->boolean('done');// done?
            $table->string('reason')->nullable(); // reasons if not done

            // field FK
            $table->integer('idPat')->unsigned();
            // references FK:
            $table->foreign('idPat')->references('id')->on('patients');

            // FK field
            $table->integer('idServ')->unsigned();
            // references FK:
            $table->foreign('idServ')->references('id')->on('services');

            // FK field
            $table->integer('idEmp')->unsigned();
            // references FK:
            $table->foreign('idEmp')->references('id')->on('employees');

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
        Schema::dropIfExists('treatments');
    }
}
