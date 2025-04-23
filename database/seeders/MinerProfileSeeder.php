<?php

namespace Database\Seeders;

use App\Models\MinerProfile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class MinerProfileSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            MinerProfile::create([
                'interviewer_name' => $faker->name,
                'interview_date' => $faker->date(),
                'region' => $faker->city,
                'district' => $faker->citySuffix,
                'ward' => $faker->word,

                'enumeration' => [
                    'interviewerName' => $faker->name,
                    'date' => $faker->date(),
                    'region' => $faker->state,
                    'district' => $faker->city,
                    'ward' => $faker->streetName,
                    'interviewType' => ['inPerson'],
                    'interviewMedium' => 'individual',
                ],

                'profile' => [
                    'name' => $faker->name,
                    'age' => $faker->numberBetween(18, 65),
                    'gender' => 'male',
                    'role' => 'Miner',
                    'roleOther' => '',
                    'education' => 'Primary',
                    'dependents' => $faker->numberBetween(0, 6),
                    'householdExpenditure' => $faker->numberBetween(10000, 200000),
                    'incomeSources' => ['Agriculture', 'Informal business'],
                    'hasDisability' => 'no',
                    'disabilityDetail' => '',
                ],

                'mining_activity' => [
                    'nature' => ['Gold'],
                    'licenseType' => 'PML',
                    'licenseStatus' => 'Valid',
                    'yearsInOperation' => $faker->numberBetween(1, 10),
                    'workers' => ['male' => 5, 'female' => 2],
                    'ownership' => 'Family',
                    'tools' => ['Manual', 'Ball mill'],
                    'outputKg' => $faker->numberBetween(10, 100),
                    'outputTons' => $faker->randomFloat(2, 1, 10),
                ],

                'finance' => [
                    'capitalSources' => ['Personal Savings', 'Mobile Lending'],
                    'appliedForLoan' => 'yes',
                    'loanOutcome' => 'Approved',
                    'loanBarriers' => ['Collateral', 'Interest Rates'],
                    'hasBankAccount' => 'yes',
                    'manageDocs' => 'yes',
                    'loanSuggestions' => $faker->sentence,
                    'hasDebt' => 'no',
                    'debtSource' => '',
                    'keepRecords' => 'yes',
                    'recordFrequency' => 'monthly',
                    'monthlyIncome' => $faker->numberBetween(100000, 1000000),
                    'collateral' => ['Land', 'Equipment'],
                    'repaymentHistory' => 'Fully repaid',
                    'peerLoanGroup' => 'yes',
                    'savingsGroupMember' => 'yes',
                    'savingsGroupName' => 'Vicoba Tujenge',
                    'savingFrequency' => 'monthly',
                    'useBudget' => 'yes',
                    'useDigitalTools' => 'yes',
                    'risks' => ['Theft', 'Loan repayment difficulty'],
                    'debtRepaymentPercent' => $faker->numberBetween(5, 50),
                ],

                'technical' => [
                    'trainingReceived' => ['Safety', 'Business skills'],
                    'trainingNeeds' => [
                        'safetyHealth' => 4,
                        'equipmentOperation' => 3,
                        'environmentalHandling' => 2,
                        'businessManagement' => 5,
                        'legalLiteracy' => 2,
                        'geologicalKnowledge' => 1,
                    ],
                    'toolOperation' => 'partially',
                    'toolUpgrade' => 'no',
                    'noUpgradeReason' => 'Cost',
                    'receivedSupport' => 'yes',
                    'supportFrom' => ['Government', 'NGO'],
                ],

                'environmental' => [
                    'awareness' => 'yes',
                    'practices' => 'We dig and refill manually',
                    'chemicals' => ['Mercury'],
                    'inspected' => 'yes',
                    'landRestoration' => 'sometimes',
                    'climateImpact' => 'yes',
                    'climateType' => 'Flooding',
                ],

                'community' => [
                    'impact' => 'mixed',
                    'impactExplanation' => 'Some gain jobs, some complain of noise.',
                    'womenInvolved' => 'yes',
                    'womenRoles' => ['Processing', 'Trading'],
                    'hasConflict' => 'no',
                    'conflictNature' => '',
                    'inclusivenessSuggestions' => 'More training for women and youth.',
                ],

                'policy' => [
                    'trustLevels' => [
                        'miningCommission' => 3,
                        'localGovernment' => 4,
                        'banks' => 2,
                        'largeMiners' => 1,
                        'minersAssociations' => 5,
                    ],
                    'govSupportAwareness' => 'yes',
                    'govSupportExamples' => 'Grants and seminars',
                    'policyBias' => 'yes',
                    'payTaxForServices' => 'yes',
                    'reformSuggestions' => 'Ease access to equipment and capital',
                ],

                'reform_feedback' => [
                    'heardOfProposals' => 'yes',
                    'supportLevel' => 'support',
                    'reasons' => 'It will help us grow.',
                    'policySuggestions' => 'Provide subsidy for tools.',
                    'enumeratorNotes' => '',
                ],

                'market' => [
                    'sellChannels' => ['Local mineral market', 'Licensed broker'],
                    'equipmentSupplier' => 'Local supplier',
                    'equipmentOwnership' => 'Lease',
                    'monthlyOutputKg' => $faker->numberBetween(20, 100),
                ],

                'inclusion' => [
                    'receivesBankPayment' => 'yes',
                    'noBankReason' => '',
                    'capitalSources' => ['Personal savings', 'SACCOs'],
                ],

                'geology' => [
                    'discoveryMethod' => 'Observation of soil color',
                    'assessmentMethods' => ['Traditional knowledge', 'Trial digging'],
                ],
            ]);
        }
    }
}

