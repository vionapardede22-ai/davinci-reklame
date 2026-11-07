<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('company_info', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan')->default('DaVinci Reklame');
            $table->text('tentang');
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->string('alamat');
            $table->string('telepon');
            $table->string('whatsapp')->nullable();
            $table->string('email');
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('logo')->nullable();
            $table->text('jam_operasional')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('company_info');
    }
};