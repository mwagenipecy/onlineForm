<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\GovernmentData;

class GovernmentDataFactory extends Factory
{
    public function definition(): array
    {
        $faker = $this->faker;

        $stakeholders = [
            'individual_miners', 'mining_cooperatives', 'women_in_mining_groups',
            'youth_mining_associations', 'mineral_dealers', 'equipment_suppliers',
            'financial_institutions', 'ngos_csos', 'training_institutions',
            'environmental_officers', 'local_buyers', 'other'
        ];

        $data = [
            'full_name' => $faker->name(),
            'position' => 'Mining Officer',
            'institution' => $faker->company(),
            'region' => $faker->state(),
            'districts' => $faker->city(),
            'ward_level_data_available' => $faker->boolean(),
            'contact_info' => $faker->phoneNumber(),
            'submission_date' => $faker->date(),

            'safety_equipment_used' => $faker->randomElement(['yes', 'no', 'rarely']),
            'structured_forums_exist' => $faker->randomElement(['yes', 'no', 'occasionally']),
            'forum_coordinator' => $faker->name(),
            'femata_active' => $faker->randomElement(['yes', 'no', 'unknown']),
            'femata_chapters' => $faker->numberBetween(0, 10),
            'women_organized' => $faker->randomElement(['yes', 'informal', 'no']),
            'women_group_count' => $faker->numberBetween(0, 10),
            'barriers_list' => 'landAccess,toolAccess',
            'barrier_other' => 'Cultural barriers',
            'youth_involvement' => $faker->randomElement(['low', 'moderate', 'high']),
            'youth_programs' => $faker->randomElement(['yes', 'no']),
            'stakeholder_registry' => $faker->randomElement(['digital', 'paper', 'no', 'unknown']),
            'training_programs' => $faker->randomElement(['yes', 'no', 'planned']),
            'training_provider' => $faker->company(),
            'env_site_count' => $faker->numberBetween(0, 100),
            'env_sites_monitored' => $faker->numberBetween(0, 100),
            'env_inspection_frequency' => $faker->randomElement(['frequent', 'occasional', 'rare', 'none']),
            'other_mineral_type' => 'Lithium',
            'recommendation_1' => $faker->sentence(),
            'recommendation_2' => $faker->sentence(),
            'recommendation_3' => $faker->sentence(),
            'additional_notes' => $faker->paragraph(),

            // Section I (Policy Feedback)
            'policy_legal_support' => 'More flexible licensing',
            'policy_support_credit' => true,
            'policy_support_training' => true,
            'policy_support_legal' => false,
            'policy_support_market' => true,
            'policy_support_other' => 'Insurance schemes',
            'policy_reinvestment_ideas' => 'Invest in rural centers',
            'policy_law_favorable' => $faker->randomElement(['yes', 'no', 'not sure']),
            'policy_law_changes' => 'Reduce red tape',
        ];

        foreach ($stakeholders as $s) {
            $data["{$s}_count"] = $faker->numberBetween(5, 100);
            $data["{$s}_licensed"] = $faker->numberBetween(0, 100);
            $data["{$s}_women_led"] = $faker->numberBetween(0, 100);
            $data["{$s}_youth_led"] = $faker->numberBetween(0, 100);
            $data["{$s}_active"] = $faker->numberBetween(0, 100);
            $data["{$s}_ward_coverage"] = $faker->numberBetween(1, 10);
            $data["{$s}_data_source"] = $faker->randomElement(['registry', 'estimate', 'survey']);
        }

        foreach (['gold', 'tanzanite', 'gemstones', 'salt', 'industrial_minerals', 'construction_materials', 'other'] as $mineral) {
            $data["mineral_$mineral"] = $faker->boolean();
        }

        foreach (['individual_miners', 'cooperatives', 'informal_groups', 'joint_ventures', 'large_scale_partnerships'] as $op) {
            $data["operation_$op"] = $faker->numberBetween(0, 100);
        }

        foreach (['manual_tools', 'powered_crushers', 'ball_mills', 'mercury', 'cyanide'] as $tool) {
            $data["tool_$tool"] = $faker->boolean();
        }

        foreach (['vicoba', 'mobile_money_agents', 'government_extension_officers', 'environmental_inspectors', 'legal_aid_services', 'geological_survey_support', 'financial_literacy_programs'] as $support) {
            $data["support_$support"] = $faker->boolean();
        }

        foreach (['asm_forum', 'conflict_mediation', 'lga_liaison', 'women_groups'] as $c) {
            $data["{$c}_exists"] = $faker->boolean();
            $data["{$c}_frequency"] = $faker->randomElement(['monthly', 'quarterly', 'yearly']);
            $data["{$c}_challenges"] = $faker->sentence();
        }

        foreach (['licensing_efficiency', 'access_to_finance', 'environmental_enforcement', 'market_access', 'equipment_technical_skills'] as $p) {
            $data["priority_$p"] = $faker->numberBetween(1, 5);
        }

        foreach (['miners_bank', 'sovereign_mineral_fund', 'local_content_regulations'] as $r) {
            $data["reform_{$r}_awareness"] = $faker->randomElement(['low', 'moderate', 'high']);
            $data["reform_{$r}_support"] = $faker->randomElement(['low', 'mixed', 'strong']);
            $data["reform_{$r}_comments"] = $faker->sentence();
        }

        return $data;
    }
}
