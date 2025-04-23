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
        Schema::create('stakeholder_submissions', function (Blueprint $table) {
            $table->id();

            // Section A
            $table->string('institution_name')->nullable();
            $table->string('organization_type')->nullable();
            $table->string('operation_regions')->nullable();
            $table->string('focal_person')->nullable();
            $table->string('contact_info')->nullable();
            $table->string('asm_years')->nullable();

            // Section B
            $table->text('mandate')->nullable();
            $table->json('services')->nullable();
            $table->json('target_groups')->nullable();
            $table->string('service_area')->nullable();

            // Section C
            $table->string('asm_influence_level')->nullable();
            $table->json('institutional_strengths')->nullable();
            $table->json('asm_challenges')->nullable();

            // Section D
            $table->string('policy_consultation')->nullable();
            $table->json('framework_awareness')->nullable();
            $table->json('institution_trust')->nullable();
            $table->string('collaboration_effectiveness')->nullable();
            $table->text('urgent_policy_changes')->nullable();

            // Section E
            $table->string('uses_digital_platforms')->nullable();
            $table->string('platform_details')->nullable();
            $table->string('collects_asm_data')->nullable();
            $table->json('data_use')->nullable();
            $table->json('digital_challenges')->nullable();

            // Section F
            $table->string('targets_women_youth')->nullable();
            $table->json('inclusion_support')->nullable();
            $table->string('environmental_compliance')->nullable();
            $table->json('environment_focus')->nullable();

            // Section G
            $table->string('aware_of_reforms')->nullable();
            $table->string('reform_support')->nullable();
            $table->json('reform_roles')->nullable();
            $table->text('institution_credibility')->nullable();
            $table->json('impact_reforms')->nullable();

            // Section H
            $table->text('final_comments')->nullable();
            $table->string('enumerator_name')->nullable();
            $table->string('region_zone')->nullable();
            $table->string('interview_mode')->nullable();


            // section I 
            $table->text('platforms_used')->nullable();
            $table->string('uses_mobile_tools')->nullable();
            $table->text('miners_bank_opinion')->nullable();
            $table->json('miner_fund_priorities')->nullable();
            $table->string('miner_fund_priorities_other')->nullable();
            $table->string('monthly_output')->nullable();


            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stakeholder_submissions');
    }
};
