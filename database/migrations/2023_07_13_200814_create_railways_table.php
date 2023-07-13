<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('railways', function (Blueprint $table) {
            $table->id();

            $table -> string('agency', 64);
            $table -> string('start_station', 128);
            $table -> string('arrival_station', 128);
            $table -> dateTime('departure_time');
            $table -> dateTime('arrival_time');
            $table -> string('train_code');
            $table -> integer('carriages');
            $table -> boolean('in_time') -> default(true);
            $table -> boolean('deleted') -> default(false);

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
        Schema::dropIfExists('railways');
    }
};
