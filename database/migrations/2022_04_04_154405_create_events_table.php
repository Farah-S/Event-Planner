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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->boolean("indoors")->default(0);
            $table->boolean("soundSetup")->default(0);
            $table->float("stageLength")->default(0);
            $table->float("stageWidth")->default(0);
            $table->string("lightsColor")->default("None");
            $table->boolean("photo")->default(0);
            $table->boolean("video")->default(0);
            $table->float("budget")->default(0);
            $table->boolean("plixie")->default(0);
            $table->string("type")->default("None");
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
        Schema::dropIfExists('events');
        //$table->dropSoftDeletes();
    }
};
