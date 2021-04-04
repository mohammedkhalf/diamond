<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('patient_id')->unsigned()->nullbale();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->longText('patient_complain')->nullable();
            $table->longText('history_of_patient_disorder')->nullable();
            $table->longText('past_medical_history')->nullable();
            $table->longText('family_history')->nullable();
            $table->longText('diagnoses_case')->nullable();
            $table->string('use_drug')->nullable();
            //Social History
            $table->string('sport')->nullable();
            $table->string('cohols')->nullable();
            $table->string('smoke')->nullable();
            $table->string('caffeine')->nullable();
            $table->string('other_life_style')->nullable();
            //Immunization
            $table->longText('immunization')->nullable();
            //Allergies
            $table->longText('allergies_drugs')->nullable();
            $table->longText('environment')->nullable();
            //Medical List
            $table->longText('past_history_drugs')->nullable(); //drugs
            $table->longText('past_history_drugs_response')->nullable(); //response
            $table->longText('current_prescribed_drugs')->nullable(); //drugs
            $table->longText('current_prescribed_drugs_response')->nullable(); //response
            $table->foreign('patient_id')->references('id')->on('users');
            $table->softDeletes();
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
        Schema::dropIfExists('profiles');
    }
}
