<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->integer('school_id')->nullable();
            $table->integer('grade_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('faculty_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->boolean('pay_status')->nullable()->default(0);
            $table->boolean('accepted')->nullable()->default(0);
            $table->string('reference_code')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('guardian_address')->nullable();
            $table->string('guardian_relationship', 200)->nullable();
            $table->string('guardian_phone')->nullable();
            $table->string('disability')->nullable();
            $table->string('guardian_email')->nullable();
            $table->string('gender')->nullable();
            $table->string('disability_type')->nullable();
            $table->text('others')->nullable();
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
        Schema::dropIfExists('school_registrations');
    }
}
