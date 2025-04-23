<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StakeholderSubmission extends Model
{
    protected $fillable = [
        // Section A
        'institution_name', 'organization_type', 'operation_regions', 'focal_person', 'contact_info', 'asm_years',

        // Section B
        'mandate', 'services', 'target_groups', 'service_area',

        // Section C
        'asm_influence_level', 'institutional_strengths', 'asm_challenges',

        // Section D
        'policy_consultation', 'framework_awareness', 'institution_trust', 'collaboration_effectiveness', 'urgent_policy_changes',

        // Section E
        'uses_digital_platforms', 'platform_details', 'collects_asm_data', 'data_use', 'digital_challenges',

        // Section F
        'targets_women_youth', 'inclusion_support', 'environmental_compliance', 'environment_focus',

        // Section G
        'aware_of_reforms', 'reform_support', 'reform_roles', 'institution_credibility', 'impact_reforms',

        // Section H
        'final_comments', 'enumerator_name', 'region_zone', 'interview_mode',

        // section I
        'platforms_used',
        'uses_mobile_tools',
        'miners_bank_opinion',
        'miner_fund_priorities',
        'miner_fund_priorities_other',
        'monthly_output',
    ];

    protected $casts = [
        'services' => 'array',
        'target_groups' => 'array',
        'institutional_strengths' => 'array',
        'asm_challenges' => 'array',
        'framework_awareness' => 'array',
        'institution_trust' => 'array',
        'data_use' => 'array',
        'digital_challenges' => 'array',
        'inclusion_support' => 'array',
        'environment_focus' => 'array',
        'reform_roles' => 'array',
        'impact_reforms' => 'array',
        'miner_fund_priorities' => 'array',
    ];

    
}
