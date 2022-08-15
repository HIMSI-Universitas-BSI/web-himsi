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
        Schema::create('open_recruitment', function (Blueprint $table) {
            $table->id();
            $table->integer('NIM');
            $table->string('full_name', 64);
            $table->foreignId('campuses_id')->constrained('campuses');
            $table->integer('semester');
            $table->string('ektm');
            $table->string('cv');
            $table->string('whatsapp', 13);
            $table->string('email', 128);
            $table->text('motivasi_bergabung');
            $table->enum('status_interview', ['Sudah', 'Belum'])->default('Belum');
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
        Schema::dropIfExists('open_recruitment');
    }
};
