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
        Schema::create('creneaus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('planning_id');
            $table->time('heureDebut');
            $table->time('heureFin');
            $table->string('status');
            $table->foreign('planning_id')->references('id')->on('plannings')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creneaus');
    }
};
