<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespondensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respondens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('acara_id')->nullable();
            $table->dateTime('jadwal')->nullable();
            $table->string('pendengar')->nullable();
            $table->string('usia')->nullable();
            $table->string('kelamin')->nullable();
            $table->string('telepon')->nullable();
            $table->text('respon_pendengar')->nullable();
            $table->string('rating')->nullable();
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
        Schema::dropIfExists('respondens');
    }
}
