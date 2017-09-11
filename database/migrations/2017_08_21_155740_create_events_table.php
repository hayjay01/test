<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event_name')->nullable();
            $table->string('venue')->nullable();
            $table->string('phone')->nullable();
            $table->string('location')->nullable();
            $table->string('city')->nullable();
            $table->string('state_id')->nullable();
            $table->dateTime('event_date')->nullable();
            $table->dateTime('event_lastEntry')->nullable();
            $table->time('event_duration')->nullable();
            $table->integer('event_ageLimit')->nullable();
            $table->double('event_price')->nullable();
            $table->text('event_description')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('owner_id')->nullable();
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
        Schema::dropIfExists('events');
    }
}
