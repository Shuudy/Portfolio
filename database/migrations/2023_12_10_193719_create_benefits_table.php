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
        Schema::create('benefits', function (Blueprint $table) {           

            $table->unsignedBigInteger('realisation_id')->index();
            $table->unsignedBigInteger('sub_skill_id')->index();

            $table->foreign('realisation_id')->references('id')->on('realisations');
            $table->foreign('sub_skill_id')->references('id')->on('sub_skills');

            $table->primary(['realisation_id', 'sub_skill_id']);           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('benefits');
    }
};
