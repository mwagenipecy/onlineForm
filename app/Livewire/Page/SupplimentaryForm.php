<?php

namespace App\Livewire\Page;

use Livewire\Component;
use App\Models\StakeholderSubmission;
class SupplimentaryForm extends Component
{


    // SECTION A
    public $institutionName, $organizationType, $operationRegions, $focalPerson, $contactInfo, $asmYears;

    // SECTION B
    public $mandate;
    public $services = [];
    public $targetGroups = [];
    public $serviceArea;

    // SECTION C
    public $asmInfluenceLevel;
    public $institutionalStrengths = [];
    public $asmChallenges = [];

    // SECTION D
    public $policyConsultation;
    public $frameworkAwareness = [];
    public $institutionTrust = [];
    public $collaborationEffectiveness;
    public $urgentPolicyChanges;

    // SECTION E
    public $usesDigitalPlatforms, $platformDetails;
    public $collectsASMData, $dataUse = [];
    public $digitalChallenges = [];

    // SECTION F
    public $targetsWomenYouth;
    public $inclusionSupport = [];
    public $environmentalCompliance;
    public $environmentFocus = [];

    // SECTION G
    public $awareOfReforms, $reformSupport;
    public $reformRoles = [];
    public $institutionCredibility;
    public $impactReforms = [];

    // SECTION H
    public $finalComments, $enumeratorName, $regionZone, $interviewMode;

    public function submit()
    {

   
        $validated = $this->validate([
            // Section A
            'institutionName' => 'required|string|max:255',
            'organizationType' => 'required|string|max:255',
            'operationRegions' => 'nullable|string|max:255',
            'focalPerson' => 'nullable|string|max:255',
            'contactInfo' => 'nullable|string|max:255',
            'asmYears' => 'nullable|numeric',

            // Section B
            'mandate' => 'nullable|string',
            'services' => 'array',
            'targetGroups' => 'array',
            'serviceArea' => 'nullable|string',

            // Section C
            'asmInfluenceLevel' => 'nullable|string',
            'institutionalStrengths' => 'array',
            'asmChallenges' => 'array',

            // Section D
            'policyConsultation' => 'nullable|string',
            'frameworkAwareness' => 'array',
            'institutionTrust' => 'array',
            'collaborationEffectiveness' => 'nullable|string',
            'urgentPolicyChanges' => 'nullable|string',

            // Section E
            'usesDigitalPlatforms' => 'nullable|string',
            'platformDetails' => 'nullable|string',
            'collectsASMData' => 'nullable|string',
            'dataUse' => 'array',
            'digitalChallenges' => 'array',

            // Section F
            'targetsWomenYouth' => 'nullable|string',
            'inclusionSupport' => 'array',
            'environmentalCompliance' => 'nullable|string',
            'environmentFocus' => 'array',

            // Section G
            'awareOfReforms' => 'nullable|string',
            'reformSupport' => 'nullable|string',
            'reformRoles' => 'array',
            'institutionCredibility' => 'nullable|string',
            'impactReforms' => 'array',

            // Section H
            'finalComments' => 'nullable|string',
            'enumeratorName' => 'nullable|string|max:255',
            'regionZone' => 'nullable|string|max:255',
            'interviewMode' => 'nullable|string',
        ]);

        StakeholderSubmission::create([
            // Section A
            'institution_name' => $this->institutionName,
            'organization_type' => $this->organizationType,
            'operation_regions' => $this->operationRegions,
            'focal_person' => $this->focalPerson,
            'contact_info' => $this->contactInfo,
            'asm_years' => $this->asmYears,
    
            // Section B
            'mandate' => $this->mandate,
            'services' => $this->services,
            'target_groups' => $this->targetGroups,
            'service_area' => $this->serviceArea,
    
            // Section C
            'asm_influence_level' => $this->asmInfluenceLevel,
            'institutional_strengths' => $this->institutionalStrengths,
            'asm_challenges' => $this->asmChallenges,
    
            // Section D
            'policy_consultation' => $this->policyConsultation,
            'framework_awareness' => $this->frameworkAwareness,
            'institution_trust' => $this->institutionTrust,
            'collaboration_effectiveness' => $this->collaborationEffectiveness,
            'urgent_policy_changes' => $this->urgentPolicyChanges,
    
            // Section E
            'uses_digital_platforms' => $this->usesDigitalPlatforms,
            'platform_details' => $this->platformDetails,
            'collects_asm_data' => $this->collectsASMData,
            'data_use' => $this->dataUse,
            'digital_challenges' => $this->digitalChallenges,
    
            // Section F
            'targets_women_youth' => $this->targetsWomenYouth,
            'inclusion_support' => $this->inclusionSupport,
            'environmental_compliance' => $this->environmentalCompliance,
            'environment_focus' => $this->environmentFocus,
    
            // Section G
            'aware_of_reforms' => $this->awareOfReforms,
            'reform_support' => $this->reformSupport,
            'reform_roles' => $this->reformRoles,
            'institution_credibility' => $this->institutionCredibility,
            'impact_reforms' => $this->impactReforms,
    
            // Section H
            'final_comments' => $this->finalComments,
            'enumerator_name' => $this->enumeratorName,
            'region_zone' => $this->regionZone,
            'interview_mode' => $this->interviewMode,
        ]);

        session()->flash('message', 'Form submitted successfully!');
        $this->reset();

        return redirect()->route('form.thankyou'); // Redirect to a specific route after submission
    }



    public function render()
    {
        return view('livewire.page.supplimentary-form');
    }
}
