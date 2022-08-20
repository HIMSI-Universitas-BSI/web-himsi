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
            $table->uuid('id')->primary();
            $table->integer('NIM')->unique();
            $table->string('no_anggota')->nullable();
            $table->string('full_name', 64);
            $table->foreignId('campuses_id')->constrained('campuses');
            $table->integer('semester');
            $table->string('ektm')->nullable();
            $table->string('cv')->nullable();
            $table->string('whatsapp', 13);
            $table->string('email', 128)->unique();
            $table->text('motivasi_bergabung');
            $table->enum('status_interview', ['sudah', 'belum'])->default('belum');
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
