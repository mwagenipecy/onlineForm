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
        Schema::create('miner_profiles', function (Blueprint $table) {
            $table->id();

            $table->string('interviewer_name');
            $table->date('interview_date');
            $table->string('region');
            $table->string('district');
            $table->string('ward');

            $table->json('enumeration');
            $table->json('profile');
            $table->json('mining_activity');
            $table->json('finance');
            $table->json('technical');
            $table->json('environmental');
            $table->json('community');
            $table->json('policy');
            $table->json('reform_feedback');


            $table->json('market')->nullable();        // ← NEW
            $table->json('inclusion')->nullable();     // ← NEW
            $table->json('geology')->nullable();   
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('miner_profiles');
    }
};
