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
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name');
            $table->foreignId('image_id');
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
            $table->string('user_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('last_name');
            //$table->dropColumn('image_id');
            $table->dropForeign(['image_id']);
            $table->dropColumn('user_type');
        });
    }
};
