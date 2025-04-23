<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FinancialInstitution;
use Faker\Factory as Faker;

class FinancialInstitutionSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $i) {
            FinancialInstitution::create([
                'name' => $faker->company,
                'type' => $faker->randomElement([
                    'Commercial Bank', 'Community Bank', 'Microfinance', 'SACCO Apex Body', 'Mobile Money/Fintech'
                ]),
                'registration_date' => $faker->date(),
                'head_office' => $faker->city,
                'employee_count' => $faker->numberBetween(10, 1000),
                'loan_portfolio' => $faker->numberBetween(1000000000, 10000000000),
                'extractives_amount' => $faker->numberBetween(0, 2000000000),
                'extractives_percent' => $faker->randomFloat(2, 0, 25),

                'mining_regions' => $faker->randomElements(
                    ['Lake Zone', 'Central Zone', 'Northern Zone', 'Southern Highlands', 'Coastal & South-East', 'National Coverage'], 3
                ),
                'asm_targets' => $faker->randomElements(
                    ['Individual miners', 'Cooperatives', 'Women miners', 'Youth', 'Processors', 'Equipment suppliers', 'Service providers'], 4
                ),
                'intermediaries' => $faker->randomElements(
                    ['NGOs', 'RMOs', 'Service Providers', 'Digital Platforms', 'Cooperatives', 'None'], 2
                ),

                'has_dedicated_staff' => $faker->boolean,
                'dedicated_staff_count' => $faker->numberBetween(1, 10),
                'dedicated_staff_roles' => 'ASM engagement',
                'gender_split_male' => $faker->randomFloat(1, 30, 70),
                'gender_split_female' => $faker->randomFloat(1, 30, 70),

                'services_offered' => $faker->randomElements(['Working capital', 'Leasing', 'Savings', 'Insurance', 'Mobile services'], 3),
                'loan_count' => $faker->numberBetween(10, 200),
                'total_disbursed' => $faker->numberBetween(10000000, 2000000000),
                'average_loan_size' => $faker->numberBetween(1000000, 10000000),
                'repayment_rate' => $faker->randomFloat(2, 50, 100),
                'default_rate' => $faker->randomFloat(2, 0, 25),
                'repayment_term' => $faker->numberBetween(6, 36),
                'female_borrowers_percent' => $faker->randomFloat(2, 10, 60),
                'group_vs_individual' => $faker->randomElement(['70 / 30', '50 / 50', '30 / 70']),

                'collateral' => $faker->randomElements(['Land', 'License', 'Assets', 'Group guarantee', 'Gold', 'Output pledge'], 3),
                'loan_rejection_reasons' => [$faker->sentence(), $faker->sentence(), $faker->sentence()],

                'asm_policies' => $faker->paragraph,
                'credit_scoring_data' => $faker->randomElements(['Mobile', 'Production', 'Community reference'], 2),
                'risk_sharing' => $faker->sentence,
                'linked_value_chain' => $faker->boolean,
                'value_chain_desc' => $faker->sentence,
                'open_to_embedded_finance' => $faker->randomElement(['Yes', 'No', 'Under discussion']),

                'gender_data_tracking' => $faker->randomElement(['Yes', 'No', 'Planning to']),
                'digital_tools' => $faker->randomElements(['Mobile onboarding', 'Credit apps', 'Profiling platforms'], 2),
                'agent_mobile_use' => $faker->randomElement(['Yes', 'No', 'Developing']),
                'digital_gaps' => [$faker->sentence(), $faker->sentence()],

                'support_miners_bank' => $faker->randomElement(['Yes', 'No', 'Neutral']),
                'sovereign_roles' => $faker->randomElements(['Lending', 'Guarantees', 'Coop support', 'Infra', 'Training', 'Refinance'], 3),
                'partner_cofinance' => $faker->randomElement(['Yes', 'No', 'Depends on structure']),
                'fiscal_reforms' => [$faker->sentence(), $faker->sentence()],

                'successful_models' => [$faker->sentence(), $faker->sentence()],
                'final_policy_suggestions' => [$faker->sentence(), $faker->sentence()],
            ]);
        }

        $this->command->info("✅ Seeded 10 financial institutions successfully.");
    }
}

