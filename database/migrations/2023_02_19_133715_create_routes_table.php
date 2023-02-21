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
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->string('depart_at');
            $table->string('route_from');
            $table->string('route_to');
            $table->integer('price');
            $table->unsignedBigInteger('transportation_id');
            $table->timestamps();
            
            $table->foreign('transportation_id')->references('id')->on('transportations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes');
    }
};
