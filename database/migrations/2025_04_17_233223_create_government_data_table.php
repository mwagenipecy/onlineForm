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
    
            // Basic info
            $table->string('full_name');
            $table->string('position')->nullable();
            $table->string('institution')->nullable();
            $table->string('region')->nullable();
            $table->string('districts')->nullable();
            $table->boolean('ward_level_data_available')->default(false);
            $table->string('contact_info')->nullable();
            $table->date('submission_date')->nullable();
    
            // Recommendations and notes
            $table->string('recommendation_1')->nullable();
            $table->string('recommendation_2')->nullable();
            $table->string('recommendation_3')->nullable();
            $table->text('additional_notes')->nullable();
    
            // Example of grouped entity stats (use the same structure for other entity types)
            $entities = [
                'individual_miners',
                'mining_cooperatives',
                'women_in_mining_groups',
                'youth_mining_associations',
                'mineral_dealers',
                'equipment_suppliers',
                'financial_institutions',
                'ngos_csos',
                'training_institutions',
                'environmental_officers',
                'local_buyers',
                'other',
            ];
    
            foreach ($entities as $entity) {
                $table->integer("{$entity}_count")->nullable();
                $table->integer("{$entity}_licensed")->nullable();
                $table->integer("{$entity}_women_led")->nullable();
                $table->integer("{$entity}_youth_led")->nullable();
                $table->integer("{$entity}_active")->nullable();
                $table->integer("{$entity}_ward_coverage")->nullable();
                $table->string("{$entity}_data_source")->nullable();
            }
    
            // Mineral booleans
            $minerals = [
                'gold', 'tanzanite', 'gemstones', 'salt',
                'industrial_minerals', 'construction_materials', 'other',
            ];
            foreach ($minerals as $mineral) {
                $table->boolean("mineral_{$mineral}")->default(false);
            }
            $table->string('other_mineral_type')->nullable();
    
            // Operation types (could also be integers)
            $table->integer('operation_individual_miners')->nullable();
            $table->integer('operation_cooperatives')->nullable();
            $table->integer('operation_informal_groups')->nullable();
            $table->integer('operation_joint_ventures')->nullable();
            $table->integer('operation_large_scale_partnerships')->nullable();
    
            // Other operation aliases (possible redundancy)
            $table->integer('operation_individualMiners')->nullable();
            $table->integer('operation_informalGroups')->nullable();
            $table->integer('operation_jointVentures')->nullable();
            $table->integer('operation_largeScalePartnerships')->nullable();
    
            // Tools
            $tools = [
                'manual_tools', 'powered_crushers', 'ball_mills',
                'mercury', 'cyanide', 'manualTools', 'poweredCrushers', 'ballMills'
            ];
            foreach ($tools as $tool) {
                $table->boolean("tool_{$tool}")->default(false);
            }
    
            // Support
            $supportFields = [
                'vicoba', 'mobile_money_agents', 'government_extension_officers',
                'environmental_inspectors', 'legal_aid_services',
                'geological_survey_support', 'financial_literacy_programs'
            ];
            foreach ($supportFields as $field) {
                $table->boolean("support_{$field}")->default(false);
            }
    
            // Forum and association questions
            $table->string('safety_equipment_used')->nullable();
            $table->string('structured_forums_exist')->nullable();
            $table->string('forum_coordinator')->nullable();
            $table->string('femata_active')->nullable();
            $table->integer('femata_chapters')->nullable();
            $table->boolean('asmForum_exists')->default(false);
            $table->string('asmForum_frequency')->nullable();
            $table->text('asmForum_challenges')->nullable();
            $table->boolean('conflictMediation_exists')->default(false);
            $table->string('conflictMediation_frequency')->nullable();
            $table->text('conflictMediation_challenges')->nullable();
            $table->boolean('lgaLiaison_exists')->default(false);
            $table->string('lgaLiaison_frequency')->nullable();
            $table->text('lgaLiaison_challenges')->nullable();
            $table->boolean('womenGroups_exists')->default(false);
            $table->string('womenGroups_frequency')->nullable();
            $table->text('womenGroups_challenges')->nullable();
    
            // Recurring issues
            $table->text('recurring_issue_1')->nullable();
            $table->text('recurring_issue_2')->nullable();
            $table->text('recurring_issue_3')->nullable();
    
            // Priority scores
            $priorities = [
                'licensingEfficiency', 'accessToFinance', 'environmentalEnforcement',
                'marketAccess', 'equipmentTechnicalSkills'
            ];
            foreach ($priorities as $p) {
                $table->integer("priority_{$p}")->nullable();
            }
    
            // Reform awareness and support
            $reforms = [
                'minersBank', 'sovereignMineralFund', 'localContentRegulations'
            ];
            foreach ($reforms as $reform) {
                $table->string("reform_{$reform}_awareness")->nullable();
                $table->string("reform_{$reform}_support")->nullable();
                $table->text("reform_{$reform}_comments")->nullable();
            }
    
            // Women & youth
            $table->string('women_organized')->nullable();
            $table->integer('women_group_count')->nullable();
            $table->text('barriers_list')->nullable();
            $table->string('barrier_other')->nullable();
            $table->string('youth_involvement')->nullable();
            $table->string('youth_programs')->nullable();
    
            // Training
            $table->string('stakeholder_registry')->nullable();
            $table->string('training_programs')->nullable();
            $table->string('training_provider')->nullable();
    
            // Environment
            $table->integer('env_site_count')->nullable();
            $table->integer('env_sites_monitored')->nullable();
            $table->string('env_inspection_frequency')->nullable();
    
            // Policy
            $table->text('policy_legal_support')->nullable();
            $table->boolean('policy_support_credit')->default(false);
            $table->boolean('policy_support_training')->default(false);
            $table->boolean('policy_support_legal')->default(false);
            $table->boolean('policy_support_market')->default(false);
            $table->text('policy_support_other')->nullable();
            $table->text('policy_reinvestment_ideas')->nullable();
            $table->string('policy_law_favorable')->nullable();
            $table->text('policy_law_changes')->nullable();
    
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
