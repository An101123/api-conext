<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpertisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('adress');
            $table->integer('gender');
            $table->integer('localConext_id')->unsigned();
            $table->foreign('localConext_id')->references('id')->on('local_conexts')->onDelete('cascade');
            $table->integer('businessType_id')->unsigned();
            $table->foreign('businessType_id')->references('id')->on('business_types')->onDelete('cascade');
            $table->integer('expertise_id')->unsigned();
            $table->foreign('expertise_id')->references('id')->on('expertises')->onDelete('cascade');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('expertises');
    }
}
