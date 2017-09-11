<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('location')->nullable();
            $table->integer('state_id')->nullable();
            $table->string('city')->nullable();
            $table->integer('school_id')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('mailing_address')->nullable();
            $table->string('admission_email')->nullable();
            $table->string('admission_phone')->nullable();
            $table->string('contact_phone')->nullable();
            $table->boolean('status')->nullable()->default(0);
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
        Schema::dropIfExists('campuses');
    }
}
