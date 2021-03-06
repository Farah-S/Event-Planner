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
        Schema::create('custom_events', function (Blueprint $table) {
            $table->id();
            $table->text("details");
            $table->float("budget");
            $table->boolean("indoors")->default(0);
            // $table->foreignId('customer_id');
            // $table->foreign('customer_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custom_events');
        //$table->dropSoftDeletes();
    }
};
