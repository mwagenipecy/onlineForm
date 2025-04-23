<?php

namespace App\Livewire\Page;

use Livewire\Component;
use App\Models\MinerProfile;
use Illuminate\Support\Facades\Validator;

class Miner extends Component
{

    // SECTION A: Enumeration Details
    public $enumeration = [
        'interviewerName' => '',
        'date' => '',
        'region' => '',
        'district' => '',
        'ward' => '',
        'interviewType' => [],
        'interviewMedium' => '',
    ];

    // SECTION B: Respondent Profile
    public $profile = [
        'name' => '',
        'age' => '',
        'gender' => '',
        'role' => '',
        'roleOther' => '',
        'education' => '',
        'dependents' => '',
        'householdExpenditure' => '',
        'incomeSources' => [],
        'hasDisability' => '',
        'disabilityDetail' => '',
    ];

    public $monthlyOutput;


    // SECTION C: Mining Activity
    public $miningActivity = [
        'nature' => [],
        'licenseType' => '',
        'licenseStatus' => '',
        'yearsInOperation' => '',
        'workers' => ['male' => '', 'female' => ''],
        'ownership' => '',
        'tools' => [],
        'outputKg' => '',
        'outputTons' => '',
    ];

    // SECTION D: Financial Access & Creditworthiness
    public $finance = [
        'capitalSources' => [],
        'appliedForLoan' => '',
        'loanOutcome' => '',
        'loanBarriers' => [],
        'hasBankAccount' => '',
        'manageDocs' => '',
        'loanSuggestions' => '',
        'hasDebt' => '',
        'debtSource' => '',
        'keepRecords' => '',
        'recordFrequency' => '',
        'monthlyIncome' => '',
        'collateral' => [],
        'repaymentHistory' => '',
        'peerLoanGroup' => '',
        'savingsGroupMember' => '',
        'savingsGroupName' => '',
        'savingFrequency' => '',
        'useBudget' => '',
        'useDigitalTools' => '',
        'risks' => [],
        'debtRepaymentPercent' => '',
    ];

    // SECTION E: Technical Capacity
    public $technical = [
        'trainingReceived' => [],
        'trainingNeeds' => [],
        'toolOperation' => '',
        'toolUpgrade' => '',
        'noUpgradeReason' => '',
        'receivedSupport' => '',
        'supportFrom' => [],
    ];

    // SECTION F: Environment
    public $environmental = [
        'awareness' => '',
        'practices' => '',
        'chemicals' => [],
        'inspected' => '',
        'landRestoration' => '',
        'climateImpact' => '',
        'climateType' => '',
    ];

    // SECTION G: Community & Gender
    public $community = [
        'impact' => '',
        'impactExplanation' => '',
        'womenInvolved' => '',
        'womenRoles' => [],
        'hasConflict' => '',
        'conflictNature' => '',
        'inclusivenessSuggestions' => '',
    ];

    // SECTION H: Policy Trust & Reform Readiness
    public $policy = [
        'trustLevels' => [],
        'govSupportAwareness' => '',
        'govSupportExamples' => '',
        'policyBias' => '',
        'payTaxForServices' => '',
        'reformSuggestions' => '',
    ];

    // SECTION I: Feedback on Proposed Reforms
    public $reformFeedback = [
        'heardOfProposals' => '',
        'supportLevel' => '',
        'reasons' => '',
        'policySuggestions' => '',
        'enumeratorNotes' => '',
    ];


    // SECTION J: Market & Operations
public $market = [
    'sellChannels' => [],
    'equipmentSupplier' => '',
    'equipmentOwnership' => '',
    'monthlyOutputKg' => '',
];

// SECTION K: Finance & Inclusion
public $inclusion = [
    'receivesBankPayment' => '',
    'noBankReason' => '',
    'capitalSources' => [],
];

// SECTION L: Geological Knowledge
public $geology = [
    'discoveryMethod' => '',
    'assessmentMethods' => [],
];



    public function save()
    {
        // You can customize validation as needed
        $validated = Validator::make([
            'enumeration' => $this->enumeration,
            'profile' => $this->profile,
            'miningActivity' => $this->miningActivity,
            'finance' => $this->finance,
            'technical' => $this->technical,
            'environmental' => $this->environmental,
            'community' => $this->community,
            'policy' => $this->policy,
            'reformFeedback' => $this->reformFeedback,
        ], [
            // Example validation
            'enumeration.interviewerName' => 'required|string|max:255',
            'enumeration.date' => 'required|date',
            'enumeration.region' => 'required|string|max:255',
            // ...add other validations as necessary
        ])->validate();

      
        MinerProfile::create([
            'interviewer_name' => $this->enumeration['interviewerName'],
            'interview_date' => $this->enumeration['date'],
            'region' => $this->enumeration['region'],
            'district' => $this->enumeration['district'],
            'ward' => $this->enumeration['ward'],
            'enumeration' => $this->enumeration,
            'profile' => $this->profile,
            'mining_activity' => $this->miningActivity,
            'finance' => $this->finance,
            'technical' => $this->technical,
            'environmental' => $this->environmental,
            'community' => $this->community,
            'policy' => $this->policy,
            'reform_feedback' => $this->reformFeedback,

            'market' => $this->market,
            'inclusion' => $this->inclusion,
            'geology' => $this->geology,

            
        ]);

        session()->flash('success', 'Form submitted successfully!');
        $this->reset(); // Clears the form
      



        // Example save - replace with Eloquent Model or DB logic

        session()->flash('success', 'Form submitted successfully!');
   
        return redirect()->route('form.thankyou'); // Redirect to a specific route after submission

    }


    public function render()
    {
        return view('livewire.page.miner');
    }
}
