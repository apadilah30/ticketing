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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('reservation_code')->unique();
            $table->date('reservation_at');
            $table->date('reservation_date');
            $table->string('class');
            $table->string('seat_code');
            $table->string('depart_at');
            $table->integer('price');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('route_id');
            $table->timestamps();
            
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('route_id')->references('id')->on('routes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
