<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinancialInstitution extends Model
{
    protected $fillable = [
        'name', 'type', 'registration_date', 'head_office', 'employee_count',
        'loan_portfolio', 'extractives_amount', 'extractives_percent',
        'mining_regions', 'asm_targets', 'intermediaries', 'has_dedicated_staff',
        'dedicated_staff_count', 'dedicated_staff_roles', 'gender_split_male', 'gender_split_female',
        'services_offered', 'loan_count', 'total_disbursed', 'average_loan_size', 'repayment_rate',
        'default_rate', 'repayment_term', 'female_borrowers_percent', 'group_vs_individual',
        'collateral', 'loan_rejection_reasons', 'asm_policies', 'credit_scoring_data',
        'risk_sharing', 'linked_value_chain', 'value_chain_desc', 'open_to_embedded_finance',
        'gender_data_tracking', 'digital_tools', 'agent_mobile_use', 'digital_gaps',
        'support_miners_bank', 'sovereign_roles', 'partner_cofinance', 'fiscal_reforms',
        'successful_models', 'final_policy_suggestions'
    ];

    protected $casts = [
        'registration_date' => 'date',
        'has_dedicated_staff' => 'boolean',
        'linked_value_chain' => 'boolean',
        'mining_regions' => 'array',
        'asm_targets' => 'array',
        'intermediaries' => 'array',
        'services_offered' => 'array',
        'collateral' => 'array',
        'loan_rejection_reasons' => 'array',
        'credit_scoring_data' => 'array',
        'digital_tools' => 'array',
        'digital_gaps' => 'array',
        'sovereign_roles' => 'array',
        'fiscal_reforms' => 'array',
        'successful_models' => 'array',
        'final_policy_suggestions' => 'array',
    ];

    
}
