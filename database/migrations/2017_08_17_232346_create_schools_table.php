<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('location')->nullable();
            $table->string('email')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('sub_category_id')->nullable();
            $table->string('city')->nullable();
            $table->integer('lga_id')->nullable();
            $table->integer('owner_id')->nullable();
            $table->string('mailing_address')->nullable();
            $table->string('phone')->nullable();
            $table->string('motto')->nullable();
            $table->text('mission_statement')->nullable();
            $table->text('vision')->nullable();
            $table->text('aim')->nullable();
            $table->text('why_choose_school')->nullable();
            $table->text('philosophy')->nullable();
            $table->text('core_values')->nullable();
            $table->text('club_societies')->nullable();
            $table->string('logo')->nullable();
            $table->string('primary_color')->nullable();
            $table->string('secondary_color')->nullable();
            $table->string('other_color_a')->nullable();
            $table->string('other_color_b')->nullable();
            $table->text('review')->nullable();
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
        Schema::dropIfExists('schools');
    }
}
