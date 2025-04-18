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
        Schema::create('government_data', function (Blueprint $table) {
            $table->id();

             // Section A
    $table->string('full_name');
    $table->string('position');
    $table->string('institution');
    $table->string('region');
    $table->string('districts')->nullable();
    $table->boolean('ward_level_data_available')->default(false);
    $table->string('contact_info')->nullable();
    $table->date('submission_date');

    // Section B: Stakeholder Enumeration (flattened)
    $stakeholders = [
        'individual_miners', 'mining_cooperatives', 'women_in_mining_groups',
        'youth_mining_associations', 'mineral_dealers', 'equipment_suppliers',
        'financial_institutions', 'ngos_csos', 'training_institutions',
        'environmental_officers', 'local_buyers', 'other'
    ];
    foreach ($stakeholders as $type) {
        $table->integer("{$type}_count")->nullable();
        $table->integer("{$type}_licensed")->nullable();
        $table->integer("{$type}_women_led")->nullable();
        $table->integer("{$type}_youth_led")->nullable();
        $table->integer("{$type}_active")->nullable();
        $table->integer("{$type}_ward_coverage")->nullable();
        $table->string("{$type}_data_source")->nullable();
    }

    // Section C: Mining Operational
    $table->boolean('mineral_gold')->default(false);
    $table->boolean('mineral_tanzanite')->default(false);
    $table->boolean('mineral_gemstones')->default(false);
    $table->boolean('mineral_salt')->default(false);
    $table->boolean('mineral_industrial_minerals')->default(false);
    $table->boolean('mineral_construction_materials')->default(false);
    $table->boolean('mineral_other')->default(false);
    $table->string('other_mineral_type')->nullable();

    $table->integer('operation_individual')->nullable();
    $table->integer('operation_cooperatives')->nullable();
    $table->integer('operation_informal')->nullable();
    $table->integer('operation_joint_ventures')->nullable();
    $table->integer('operation_large_scale')->nullable();

    $table->boolean('tool_manual')->default(false);
    $table->boolean('tool_crushers')->default(false);
    $table->boolean('tool_ball_mills')->default(false);
    $table->boolean('tool_mercury')->default(false);
    $table->boolean('tool_cyanide')->default(false);

    $table->string('safety_equipment_used')->default('rarely');

    $table->boolean('support_vicoba')->default(false);
    $table->boolean('support_mobile_money_agents')->default(false);
    $table->boolean('support_government_extension_officers')->default(false);
    $table->boolean('support_environmental_inspectors')->default(false);
    $table->boolean('support_legal_aid_services')->default(false);
    $table->boolean('support_geological_survey_support')->default(false);
    $table->boolean('support_financial_literacy_programs')->default(false);

    // Section D: Stakeholder Organization
    $table->string('structured_forums_exist')->default('no');
    $table->string('forum_coordinator')->nullable();
    $table->string('femata_active')->default('unknown');
    $table->integer('femata_chapters')->nullable();

    $coordination = ['asm_forum', 'conflict_mediation', 'lga_liaison', 'women_groups'];
    foreach ($coordination as $coord) {
        $table->boolean("{$coord}_exists")->default(false);
        $table->string("{$coord}_frequency")->nullable();
        $table->string("{$coord}_challenges")->nullable();
    }

    // Section E: Policy Priorities
    $table->string('recurring_issue_1')->nullable();
    $table->string('recurring_issue_2')->nullable();
    $table->string('recurring_issue_3')->nullable();

    $table->integer('priority_licensing_efficiency')->nullable();
    $table->integer('priority_access_finance')->nullable();
    $table->integer('priority_environmental_enforcement')->nullable();
    $table->integer('priority_market_access')->nullable();
    $table->integer('priority_equipment_skills')->nullable();

    $reforms = ['miners_bank', 'sovereign_fund', 'local_content'];
    foreach ($reforms as $r) {
        $table->string("reform_{$r}_awareness")->nullable();
        $table->string("reform_{$r}_support")->nullable();
        $table->string("reform_{$r}_comments")->nullable();
    }

    // Section F: Gender & Youth
    $table->string('women_organized')->default('no');
    $table->integer('women_group_count')->nullable();
    $table->text('barriers_list')->nullable(); // store comma-separated or use pivot table
    $table->string('barrier_other')->nullable();
    $table->string('youth_involvement')->default('low');
    $table->string('youth_programs')->default('no');

    // Section G
    $table->string('stakeholder_registry')->default('no');
    $table->string('training_programs')->default('no');
    $table->string('training_provider')->nullable();
    $table->integer('env_site_count')->nullable();
    $table->integer('env_sites_monitored')->nullable();
    $table->string('env_inspection_frequency')->default('none');

    // Section H
    $table->string('recommendation_1')->nullable();
    $table->string('recommendation_2')->nullable();
    $table->string('recommendation_3')->nullable();
    $table->text('additional_notes')->nullable();

    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('government_data');
    }
};
