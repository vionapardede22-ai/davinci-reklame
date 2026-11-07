<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('nama_klien');
            $table->string('perusahaan')->nullable();
            $table->text('testimoni');
            $table->string('foto')->nullable();
            $table->integer('rating')->default(5);
            $table->boolean('tampilkan')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('testimonials');
    }
};