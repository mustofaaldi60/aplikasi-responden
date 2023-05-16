<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLagusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lagus', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('artis')->nullable();
            $table->string('genre')->nullable();
            $table->string('album')->nullable();
            $table->string('audio')->nullable();
            $table->string('cover')->nullable();
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
        Schema::dropIfExists('lagus');
    }
}
