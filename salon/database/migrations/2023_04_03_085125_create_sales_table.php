<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->integer('price');
            $table->string('title', 50);
            $table->integer('year');
            $table->unsignedBigInteger('petugas_id');
            $table->unsignedBigInteger('categori_id');
            $table->timestamps();

            $table->foreign('petugas_id')->references('id')->on('petugas');
            $table->foreign('categori_id')->references('id')->on('categoris');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
