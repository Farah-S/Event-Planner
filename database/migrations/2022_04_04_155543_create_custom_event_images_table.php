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
        Schema::create('custom_event_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('image_id');
            $table->foreign('image_id')->references('id')->on('images');
            $table->foreignId('custom_event_id');
            $table->foreign('custom_event_id')->references('id')->on('custom_events');
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
        Schema::dropIfExists('custom_event_images');
    }
};