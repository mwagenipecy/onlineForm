<?php

namespace Database\Seeders;

use App\Models\StakeholderSubmission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StakeholderSubmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        
        foreach (range(1, 50) as $i) {
            StakeholderSubmission::create([
                // Section A
                'institution_name' => $faker->company,
                'organization_type' => $faker->randomElement(['financial', 'government', 'ngo', 'cooperative']),
                'operation_regions' => $faker->city,
                'focal_person' => $faker->name,
                'contact_info' => $faker->email,
                'asm_years' => $faker->numberBetween(1, 20),

                // Section B
                'mandate' => $faker->paragraph,
                'services' => ['businessLoans', 'grantSupport'],
                'target_groups' => ['artisanalMiners', 'womenInMining'],
                'service_area' => 'both',

                // Section C
                'asm_influence_level' => 'medium',
                'institutional_strengths' => ['technicalKnowledge', 'staffExpertise'],
                'asm_challenges' => ['limitedData', 'lowFormalization'],

                // Section D
                'policy_consultation' => 'occasionally',
                'framework_awareness' => ['mineralPolicy', 'environmentGuidelines'],
                'institution_trust' => ['miningCommission' => 4, 'financialInstitutions' => 3],
                'collaboration_effectiveness' => 'average',
                'urgent_policy_changes' => $faker->sentence,

                // Section E
                'uses_digital_platforms' => 'yes',
                'platform_details' => 'Mining Licensing Portal',
                'collects_asm_data' => 'yes',
                'data_use' => ['programDesign', 'performanceTracking'],
                'digital_challenges' => ['internetIssues', 'userLiteracy'],

                // Section F
                'targets_women_youth' => 'explicit',
                'inclusion_support' => ['womenFinance', 'youthSupport'],
                'environmental_compliance' => 'direct',
                'environment_focus' => ['chemicals', 'landRestoration'],

                // Section G
                'aware_of_reforms' => 'yes',
                'reform_support' => 'yes',
                'reform_roles' => ['policyAdvisor', 'coImplementer'],
                'institution_credibility' => $faker->sentence,
                'impact_reforms' => ['Better access to credit', 'Training programs', 'Licensing reform'],

                // Section H
                'final_comments' => $faker->sentence,
                'enumerator_name' => $faker->name,
                'region_zone' => $faker->state,
                'interview_mode' => 'in_person',

                // Section I
                'platforms_used' => 'Tanzania Mining Portal',
                'uses_mobile_tools' => 'yes',
                'miners_bank_opinion' => $faker->sentence,
                'miner_fund_priorities' => ['credit', 'infrastructure'],
                'miner_fund_priorities_other' => null,
                'monthly_output' => $faker->randomNumber(3) . ' tons',
            ]);
        }
    }
}
