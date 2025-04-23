<?php

namespace App\Livewire\Page;

use Livewire\Component;
use App\Models\GovernmentData;


class Government extends Component
{


    public $fullName;
    public $position;
    public $institution;
    public $region;
    public $districts;
    public $womenMinersOrganized,$womenGroupCount;

    public $womenBarriersOther = ['exists' => false, 'value' => ''];

    public $youthPrograms = 'no';


    
    public $wardLevelDataAvailable = false;
    public $contactInfo;
    public $submissionDate;

    // Stakeholder Enumeration
    public $stakeholders = [
        'individualMiners' => ['count' => 0, 'licensed' => 0, 'womenLed' => 0, 'youthLed' => 0, 'active' => 0, 'wardCoverage' => 0, 'dataSource' => ''],
        'miningCooperatives' => ['count' => 0, 'licensed' => 0, 'womenLed' => 0, 'youthLed' => 0, 'active' => 0, 'wardCoverage' => 0, 'dataSource' => ''],
        'womenInMiningGroups' => ['count' => 0, 'licensed' => 0, 'womenLed' => 0, 'youthLed' => 0, 'active' => 0, 'wardCoverage' => 0, 'dataSource' => ''],
        'youthMiningAssociations' => ['count' => 0, 'licensed' => 0, 'womenLed' => 0, 'youthLed' => 0, 'active' => 0, 'wardCoverage' => 0, 'dataSource' => ''],
        'mineralDealers' => ['count' => 0, 'licensed' => 0, 'womenLed' => 0, 'youthLed' => 0, 'active' => 0, 'wardCoverage' => 0, 'dataSource' => ''],
        'equipmentSuppliers' => ['count' => 0, 'licensed' => 0, 'womenLed' => 0, 'youthLed' => 0, 'active' => 0, 'wardCoverage' => 0, 'dataSource' => ''],
        'financialInstitutions' => ['count' => 0, 'licensed' => 0, 'womenLed' => 0, 'youthLed' => 0, 'active' => 0, 'wardCoverage' => 0, 'dataSource' => ''],
        'ngosCsos' => ['count' => 0, 'licensed' => 0, 'womenLed' => 0, 'youthLed' => 0, 'active' => 0, 'wardCoverage' => 0, 'dataSource' => ''],
        'trainingInstitutions' => ['count' => 0, 'licensed' => 0, 'womenLed' => 0, 'youthLed' => 0, 'active' => 0, 'wardCoverage' => 0, 'dataSource' => ''],
        'environmentalOfficers' => ['count' => 0, 'licensed' => 0, 'womenLed' => 0, 'youthLed' => 0, 'active' => 0, 'wardCoverage' => 0, 'dataSource' => ''],
        'localBuyers' => ['count' => 0, 'licensed' => 0, 'womenLed' => 0, 'youthLed' => 0, 'active' => 0, 'wardCoverage' => 0, 'dataSource' => ''],
        'other' => ['count' => 0, 'licensed' => 0, 'womenLed' => 0, 'youthLed' => 0, 'active' => 0, 'wardCoverage' => 0, 'dataSource' => ''],
    ];
    public $otherStakeholderType = '';

    // Mining Operational Characteristics
    public $mineralsExtracted = [
        'gold' => false,
        'tanzanite' => false,
        'gemstones' => false,
        'salt' => false,
        'industrialMinerals' => false,
        'constructionMaterials' => false,
        'other' => false
    ];
    public $otherMineralType = '';
    
    public $operationTypes = [
        'individual_miners' => 0,
        'cooperatives' => 0,
        'informal_groups' => 0,
        'joint_ventures' => 0,
        'large_scale_partnerships' => 0
    ];
    
    
    public $toolsUsed = [
        'manual_tools' => false,
        'powered_crushers' => false,
        'ball_mills' => false,
        'mercury' => false,
        'cyanide' => false
    ];
    
    
    public $safetyEquipmentUsed = 'rarely'; // yes, no, rarely
    
    public $supportServices = [
        'vicoba' => false,
        'mobileMoneyAgents' => false,
        'governmentExtensionOfficers' => false,
        'environmentalInspectors' => false,
        'legalAidServices' => false,
        'geologicalSurveySupport' => false,
        'financialLiteracyPrograms' => false
    ];

    // Stakeholder Organization & Coordination
    public $structuredForumsExist = 'no'; // yes, occasionally, no
    public $forumCoordinator = '';
    public $femataActive = 'unknown'; // yes, no, unknown
    public $femataChapters = 0;
    
    public $coordinationMechanisms = [
        'asmForum' => ['exists' => false, 'frequency' => '', 'challenges' => ''],
        'conflictMediation' => ['exists' => false, 'frequency' => '', 'challenges' => ''],
        'lgaLiaison' => ['exists' => false, 'frequency' => '', 'challenges' => ''],
        'womenGroups' => ['exists' => false, 'frequency' => '', 'challenges' => '']
    ];

    // Policy Priorities
    public $recurringIssues = ['', '', ''];
    
    public $policyPriorities = [
        'licensingEfficiency' => 0,
        'accessToFinance' => 0,
        'environmentalEnforcement' => 0,
        'marketAccess' => 0,
        'equipmentTechnicalSkills' => 0
    ];
    
    public $reformAwareness = [
        'minersBank' => ['awareness' => 'low', 'support' => 'low', 'comments' => ''],
        'sovereignMineralFund' => ['awareness' => 'low', 'support' => 'low', 'comments' => ''],
        'localContentRegulations' => ['awareness' => 'low', 'support' => 'low', 'comments' => '']
    ];

    // Gender & Youth Participation
    public $womenGroups = 0;
    

    public $policyFeedback = [
        'legalSupport' => '',
        'supportServices' => [
            'accessCredit' => false,
            'technicalTraining' => false,
            'legalSupport' => false,
            'marketLinkage' => false,
            'other' => '',
        ],
        'reinvestmentIdeas' => '',
        'lawFavorable' => '',
        'lawChanges' => '',
    ];


    public $womenBarriers = [
        'landAccess' => false,
        'licensingRestrictions' => false,
        'toolAccess' => false,
        'creditAccess' => false,
        'socialNorms' => false,
        'childcareResponsibilities' => false,
        'other' => false
    ];
    public $otherWomenBarrier = '';
    
    public $youthInvolvement = 'low'; // high, moderate, low
    public $youthSupportPrograms = false;

    // Regulatory & Support Infrastructure
    public $stakeholderRegistry = 'no'; // yes-digital, yes-paper, no, unknown
    public $trainingOffered = false;
    public $trainingProvider = '';

    public $trainingPrograms = 'no'; 
    
    public $environmentalMonitoring = [
        'estimatedSites' => 0,
        'sitesMonitored' => 0,
        'inspectionFrequency' => 'none' // frequent, occasional, rare, none
    ];

    // Recommendations & Insights
    public $recommendations = ['', '', ''];
    public $additionalNotes = '';

    protected $rules = [
        'fullName' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'institution' => 'required|string|max:255',
        'region' => 'required|string|max:255',
        // Add more validation rules as needed
    ];

    public function mount()
    {
        $this->submissionDate = now()->format('Y-m-d');
    }


    public function submit()
{

    $this->validate();

    $data = [
        // Section A
        'full_name' => $this->fullName,
        'position' => $this->position,
        'institution' => $this->institution,
        'region' => $this->region,
        'districts' => $this->districts,
        'ward_level_data_available' => $this->wardLevelDataAvailable,
        'contact_info' => $this->contactInfo,
        'submission_date' => $this->submissionDate,

        // Section H
        'recommendation_1' => $this->recommendations[0] ?? null,
        'recommendation_2' => $this->recommendations[1] ?? null,
        'recommendation_3' => $this->recommendations[2] ?? null,
        'additional_notes' => $this->additionalNotes,
    ];

    foreach ($this->stakeholders as $type => $values) {
        foreach ($values as $key => $val) {
            $compositeKey = $type . '_' . $key;
    
            // Convert camelCase or PascalCase to snake_case (with single underscores)
            $snakeKey = preg_replace('/([a-z])([A-Z])/', '$1_$2', $compositeKey);
            $snakeKey = strtolower($snakeKey);
    
            // Replace multiple underscores with a single one
            $snakeKey = preg_replace('/_+/', '_', $snakeKey);
    
            $data[$snakeKey] = $val;
        }
    }


    // Mining Operational (Section C)
    foreach ($this->mineralsExtracted as $mineral => $value) {
        // Convert camelCase or PascalCase to snake_case
        $snakeKey = preg_replace('/([a-z])([A-Z])/', '$1_$2', "mineral_$mineral");
    
        // Convert to lowercase
        $snakeKey = strtolower($snakeKey);
    
        // Replace multiple underscores with a single underscore
        $snakeKey = preg_replace('/_+/', '_', $snakeKey);
    
        $data[$snakeKey] = $value;
    }
    


    $data['other_mineral_type'] = $this->otherMineralType;

// Operation Types
foreach ($this->operationTypes as $type => $val) {
    // Ensure keys are like 'individual_miners', 'informal_groups', etc.
    $data["operation_{$type}"] = $val;
}


// Tools Used
foreach ($this->toolsUsed as $tool => $val) {
    $data["tool_{$tool}"] = $val;
}


// Support Services
foreach ($this->supportServices as $service => $val) {
    $snakeKey = preg_replace('/([a-z])([A-Z])/', '$1_$2', "support_$service");
    $snakeKey = strtolower($snakeKey);
    $snakeKey = preg_replace('/_+/', '_', $snakeKey);
    $data[$snakeKey] = $val;
}




    $data['safety_equipment_used'] = $this->safetyEquipmentUsed;


    // Section D: Coordination
    $data['structured_forums_exist'] = $this->structuredForumsExist;
    $data['forum_coordinator'] = $this->forumCoordinator;
    $data['femata_active'] = $this->femataActive;
    $data['femata_chapters'] = $this->femataChapters;

    foreach ($this->coordinationMechanisms as $key => $item) {
        foreach ($item as $subkey => $val) {
            $data["{$key}_{$subkey}"] = $val;
        }
    }

    // Section E: Policy & Reforms
    $data['recurring_issue_1'] = $this->recurringIssues[0] ?? null;
    $data['recurring_issue_2'] = $this->recurringIssues[1] ?? null;
    $data['recurring_issue_3'] = $this->recurringIssues[2] ?? null;

    foreach ($this->policyPriorities as $k => $v) {
        $data["priority_{$k}"] = $v;
    }

    foreach ($this->reformAwareness as $reform => $val) {
        $data["reform_{$reform}_awareness"] = $val['awareness'];
        $data["reform_{$reform}_support"] = $val['support'];
        $data["reform_{$reform}_comments"] = $val['comments'];
    }

    // Section F: Gender & Youth
    $data['women_organized'] = $this->womenMinersOrganized;
    $data['women_group_count'] = $this->womenGroupCount;
    $data['barriers_list'] = is_array($this->womenBarriers) ? implode(',', $this->womenBarriers) : null;
    $data['barrier_other'] = $this->womenBarriersOther['value'] ?? null;
    $data['youth_involvement'] = $this->youthInvolvement;
    $data['youth_programs'] = $this->youthPrograms;

    // Section G: Registry & Environment
    $data['stakeholder_registry'] = $this->stakeholderRegistry;
    $data['training_programs'] = $this->trainingPrograms;
    $data['training_provider'] = $this->trainingProvider;
    $data['env_site_count'] = $this->environmentalMonitoring['estimatedSites'] ?? 0;
    $data['env_sites_monitored'] = $this->environmentalMonitoring['monitored'] ?? 0;
    $data['env_inspection_frequency'] = $this->environmentalMonitoring['frequency'] ?? 'none';

// Section I: Policy Feedback

    $data['policy_legal_support'] = $this->policyFeedback['legalSupport'];
$data['policy_support_credit'] = $this->policyFeedback['supportServices']['accessCredit'];
$data['policy_support_training'] = $this->policyFeedback['supportServices']['technicalTraining'];
$data['policy_support_legal'] = $this->policyFeedback['supportServices']['legalSupport'];
$data['policy_support_market'] = $this->policyFeedback['supportServices']['marketLinkage'];
$data['policy_support_other'] = $this->policyFeedback['supportServices']['other'];
$data['policy_reinvestment_ideas'] = $this->policyFeedback['reinvestmentIdeas'];
$data['policy_law_favorable'] = $this->policyFeedback['lawFavorable'];
$data['policy_law_changes'] = $this->policyFeedback['lawChanges'];



    // Save to DB
    GovernmentData::create($data);

    session()->flash('message', 'Form submitted successfully!');
    $this->reset();
    $this->submissionDate = now()->format('Y-m-d');

    return redirect()->route('form.thankyou'); // Redirect to a specific route after submission

}





    
    public function render()
    {
        return view('livewire.page.government');
    }
}
