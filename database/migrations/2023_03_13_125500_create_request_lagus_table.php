<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestLagusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_lagus', function (Blueprint $table) {
            $table->id();
            $table->string('guest_name')->nullable();
            $table->string('title')->nullable();
            $table->string('artis')->nullable();
            $table->string('genre')->nullable();
            $table->string('album')->nullable();
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
        Schema::dropIfExists('request_lagus');
    }
}
