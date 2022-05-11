<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomEventOrderPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_event_order', function (Blueprint $table) {
            $table->unsignedBigInteger('custom_event_id')->index();
            $table->foreign('custom_event_id')->references('id')->on('custom_events')->onDelete('cascade');
            $table->unsignedBigInteger('order_id')->index();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->primary(['custom_event_id', 'order_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custom_event_order');
    }
}
