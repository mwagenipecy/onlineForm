<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class GovernmentDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        // Define the number of records to create
        $recordCount = 50;
        
        // Define entity types for reuse
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
        
        // Define minerals for reuse
        $minerals = [
            'gold', 'tanzanite', 'gemstones', 'salt',
            'industrial_minerals', 'construction_materials', 'other',
        ];
        
        // Define tools for reuse
        $tools = [
            'manual_tools', 'powered_crushers', 'ball_mills',
            'mercury', 'cyanide', 'manualTools', 'poweredCrushers', 'ballMills'
        ];
        
        // Define support fields for reuse
        $supportFields = [
            'vicoba', 'mobile_money_agents', 'government_extension_officers',
            'environmental_inspectors', 'legal_aid_services',
            'geological_survey_support', 'financial_literacy_programs'
        ];
        
        // Define priorities for reuse
        $priorities = [
            'licensingEfficiency', 'accessToFinance', 'environmentalEnforcement',
            'marketAccess', 'equipmentTechnicalSkills'
        ];
        
        // Define reforms for reuse
        $reforms = [
            'minersBank', 'sovereignMineralFund', 'localContentRegulations'
        ];
        
        // Generate fake records
        for ($i = 0; $i < $recordCount; $i++) {
            $record = [
                // Basic info
                'full_name' => $faker->name,
                'position' => $faker->jobTitle,
                'institution' => $faker->company,
                'region' => $faker->state,
                'districts' => $faker->city,
                'ward_level_data_available' => $faker->boolean,
                'contact_info' => $faker->phoneNumber,
                'submission_date' => $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
                
                // Recommendations and notes
                'recommendation_1' => $faker->sentence(10),
                'recommendation_2' => $faker->sentence(8),
                'recommendation_3' => $faker->sentence(12),
                'additional_notes' => $faker->paragraph(3),
                
                // Entity stats
                'created_at' => now(),
                'updated_at' => now(),
            ];
            
            // Add entity data
            foreach ($entities as $entity) {
                $record["{$entity}_count"] = $faker->numberBetween(10, 500);
                $record["{$entity}_licensed"] = $faker->numberBetween(5, $record["{$entity}_count"]);
                $record["{$entity}_women_led"] = $faker->numberBetween(0, $record["{$entity}_count"] / 2);
                $record["{$entity}_youth_led"] = $faker->numberBetween(0, $record["{$entity}_count"] / 2);
                $record["{$entity}_active"] = $faker->numberBetween(5, $record["{$entity}_count"]);
                $record["{$entity}_ward_coverage"] = $faker->numberBetween(1, 20);
                $record["{$entity}_data_source"] = $faker->randomElement(['Survey', 'Government records', 'NGO report', 'Field visit', 'Estimates']);
            }
            
            // Mineral booleans
            foreach ($minerals as $mineral) {
                $record["mineral_{$mineral}"] = $faker->boolean(30); // 30% chance of true
            }
            $record['other_mineral_type'] = $record['mineral_other'] ? $faker->word : null;
            
            // Operation types
            $record['operation_individual_miners'] = $faker->numberBetween(10, 100);
            $record['operation_cooperatives'] = $faker->numberBetween(5, 30);
            $record['operation_informal_groups'] = $faker->numberBetween(10, 50);
            $record['operation_joint_ventures'] = $faker->numberBetween(0, 10);
            $record['operation_large_scale_partnerships'] = $faker->numberBetween(0, 5);
            
            // Other operation aliases (for backward compatibility)
            $record['operation_individualMiners'] = $record['operation_individual_miners'];
            $record['operation_informalGroups'] = $record['operation_informal_groups'];
            $record['operation_jointVentures'] = $record['operation_joint_ventures'];
            $record['operation_largeScalePartnerships'] = $record['operation_large_scale_partnerships'];
            
            // Tools
            foreach ($tools as $tool) {
                $record["tool_{$tool}"] = $faker->boolean(50); // 50% chance of true
            }
            
            // Support
            foreach ($supportFields as $field) {
                $record["support_{$field}"] = $faker->boolean(40); // 40% chance of true
            }
            
            // Forum and association questions
            $record['safety_equipment_used'] = $faker->randomElement(['Yes, consistently', 'Sometimes', 'Rarely', 'No']);
            $record['structured_forums_exist'] = $faker->randomElement(['Yes', 'No', 'In development']);
            $record['forum_coordinator'] = $faker->boolean(60) ? $faker->name : null;
            $record['femata_active'] = $faker->randomElement(['Very active', 'Moderately active', 'Inactive', 'Not present']);
            $record['femata_chapters'] = $faker->numberBetween(0, 10);
            $record['asmForum_exists'] = $faker->boolean(70);
            $record['asmForum_frequency'] = $record['asmForum_exists'] ? $faker->randomElement(['Monthly', 'Quarterly', 'Biannually', 'Annually', 'As needed']) : null;
            $record['asmForum_challenges'] = $record['asmForum_exists'] ? $faker->paragraph(2) : null;
            $record['conflictMediation_exists'] = $faker->boolean(60);
            $record['conflictMediation_frequency'] = $record['conflictMediation_exists'] ? $faker->randomElement(['As needed', 'Monthly', 'When conflicts arise']) : null;
            $record['conflictMediation_challenges'] = $record['conflictMediation_exists'] ? $faker->paragraph(2) : null;
            $record['lgaLiaison_exists'] = $faker->boolean(50);
            $record['lgaLiaison_frequency'] = $record['lgaLiaison_exists'] ? $faker->randomElement(['Monthly', 'Quarterly', 'Biannually', 'As needed']) : null;
            $record['lgaLiaison_challenges'] = $record['lgaLiaison_exists'] ? $faker->paragraph(2) : null;
            $record['womenGroups_exists'] = $faker->boolean(40);
            $record['womenGroups_frequency'] = $record['womenGroups_exists'] ? $faker->randomElement(['Monthly', 'Quarterly', 'Biannually', 'Annually']) : null;
            $record['womenGroups_challenges'] = $record['womenGroups_exists'] ? $faker->paragraph(2) : null;
            
            // Recurring issues
            $record['recurring_issue_1'] = $faker->sentence(10);
            $record['recurring_issue_2'] = $faker->sentence(8);
            $record['recurring_issue_3'] = $faker->sentence(12);
            
            // Priority scores
            foreach ($priorities as $p) {
                $record["priority_{$p}"] = $faker->numberBetween(1, 5);
            }
            
            // Reform awareness and support
            foreach ($reforms as $reform) {
                $record["reform_{$reform}_awareness"] = $faker->randomElement(['High', 'Medium', 'Low', 'None']);
                $record["reform_{$reform}_support"] = $faker->randomElement(['Strong support', 'Moderate support', 'Neutral', 'Against', 'Strongly against']);
                $record["reform_{$reform}_comments"] = $faker->paragraph(1);
            }
            
            // Women & youth
            $record['women_organized'] = $faker->randomElement(['Well organized', 'Somewhat organized', 'Poorly organized', 'Not organized']);
            $record['women_group_count'] = $faker->numberBetween(0, 15);
            $record['barriers_list'] = $faker->paragraph(2);
            $record['barrier_other'] = $faker->boolean(30) ? $faker->sentence(5) : null;
            $record['youth_involvement'] = $faker->randomElement(['High', 'Medium', 'Low', 'Very low']);
            $record['youth_programs'] = $faker->randomElement(['Many programs', 'Some programs', 'Few programs', 'No programs']);
            
            // Training
            $record['stakeholder_registry'] = $faker->randomElement(['Complete', 'Partial', 'In development', 'None']);
            $record['training_programs'] = $faker->randomElement(['Regular', 'Occasional', 'Rare', 'None']);
            $record['training_provider'] = $faker->randomElement(['Government', 'NGOs', 'Private sector', 'International organizations', 'Mixed']);
            
            // Environment
            $record['env_site_count'] = $faker->numberBetween(5, 100);
            $record['env_sites_monitored'] = $faker->numberBetween(0, $record['env_site_count']);
            $record['env_inspection_frequency'] = $faker->randomElement(['Monthly', 'Quarterly', 'Biannually', 'Annually', 'Rarely', 'Never']);
            
            // Policy
            $record['policy_legal_support'] = $faker->paragraph(2);
            $record['policy_support_credit'] = $faker->boolean();
            $record['policy_support_training'] = $faker->boolean();
            $record['policy_support_legal'] = $faker->boolean();
            $record['policy_support_market'] = $faker->boolean();
            $record['policy_support_other'] = $faker->boolean(30) ? $faker->sentence(5) : null;
            $record['policy_reinvestment_ideas'] = $faker->paragraph(2);
            $record['policy_law_favorable'] = $faker->randomElement(['Very favorable', 'Somewhat favorable', 'Neutral', 'Unfavorable', 'Very unfavorable']);
            $record['policy_law_changes'] = $faker->paragraph(2);
            
            // Insert the record
            DB::table('government_data')->insert($record);
        }
    }
}