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
        Schema::create('alkatreszs', function (Blueprint $table) {
            $table->id();
            $table->String('cikkszam',20);
            $table->String('alkatreszNev',50);
            $table->integer('ar');
            $table->integer('raktaron');
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
        Schema::dropIfExists('alkatreszs');
    }
};
