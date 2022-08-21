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
            $table->string('full_name', 64)->nullable();
            $table->string('NIM', 8)->unique();
            $table->string('image')->default('user.png');
            $table->foreignId('positions_id')->constrained('positions');
            $table->foreignId('campuses_id')->constrained('campuses')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
