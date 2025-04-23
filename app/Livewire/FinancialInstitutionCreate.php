<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\FinancialInstitution;

class FinancialInstitutionCreate extends Component
{
    public $name, $type, $registration_date, $head_office, $employee_count;
    public $loan_portfolio, $extractives_amount, $extractives_percent;

    public $mining_regions = [], $asm_targets = [], $intermediaries = [];

    public $has_dedicated_staff = false;
    public $dedicated_staff_count, $dedicated_staff_roles;
    public $gender_split_male, $gender_split_female;

    public $services_offered = [], $loan_count, $total_disbursed, $average_loan_size;
    public $repayment_rate, $default_rate, $repayment_term, $female_borrowers_percent;
    public $group_vs_individual;

    public $collateral = [], $loan_rejection_reasons = [];

    public $asm_policies, $credit_scoring_data = [], $risk_sharing;
    public $linked_value_chain = false, $value_chain_desc, $open_to_embedded_finance;

    public $gender_data_tracking, $digital_tools = [], $agent_mobile_use, $digital_gaps = [];

    public $support_miners_bank, $sovereign_roles = [], $partner_cofinance, $fiscal_reforms = [];

    public $successful_models = [], $final_policy_suggestions = [];

    public function submitForm()
    {

        $this->validate([
            // SECTION A: Institutional Information
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:100',
            'head_office' => 'required|string|max:255',
            'registration_date' => 'nullable|date',
            'employee_count' => 'nullable|integer|min:1',
            'loan_portfolio' => 'nullable|numeric|min:0',
        
            // SECTION B: Operational Footprint
            'mining_regions' => 'required|array|min:1',
            'asm_targets' => 'required|array|min:1',
            'intermediaries' => 'nullable|array',
        
            // SECTION C: Products & Loans
            'services_offered' => 'required|array|min:1',
            'loan_count' => 'nullable|integer|min:0',
            'total_disbursed' => 'nullable|numeric|min:0',
            'repayment_rate' => 'nullable|numeric|min:0|max:100',
            'default_rate' => 'nullable|numeric|min:0|max:100',
            'group_vs_individual' => 'nullable|string|max:20',
        
            // SECTION D: Risk & Innovation
            'asm_policies' => 'nullable|string|max:1000',
            'credit_scoring_data' => 'nullable|array',
            'open_to_embedded_finance' => 'nullable|string|in:Yes,No,Under discussion',
        
            // SECTION E: Digital & Gender
            'gender_data_tracking' => 'nullable|string|in:Yes,No,Planning to',
            'digital_tools' => 'nullable|array',
            'agent_mobile_use' => 'nullable|string|in:Yes,No,Developing',
        
            // SECTION F: Sovereign Fund
            'support_miners_bank' => 'nullable|string|in:Yes,No,Neutral',
            'sovereign_roles' => 'nullable|array',
            'partner_cofinance' => 'nullable|string|in:Yes,No,Depends on structure',
        
            // SECTION G: Optional feedback
            'successful_models' => 'nullable|array',
            'final_policy_suggestions' => 'nullable|array',
        ]);
        
        FinancialInstitution::create([
            'name' => $this->name,
            'type' => $this->type,
            'registration_date' => $this->registration_date,
            'head_office' => $this->head_office,
            'employee_count' => $this->employee_count,
            'loan_portfolio' => $this->loan_portfolio,
            'extractives_amount' => $this->extractives_amount,
            'extractives_percent' => $this->extractives_percent,

            'mining_regions' => $this->mining_regions,
            'asm_targets' => $this->asm_targets,
            'intermediaries' => $this->intermediaries,

            'has_dedicated_staff' => $this->has_dedicated_staff,
            'dedicated_staff_count' => $this->dedicated_staff_count,
            'dedicated_staff_roles' => $this->dedicated_staff_roles,
            'gender_split_male' => $this->gender_split_male,
            'gender_split_female' => $this->gender_split_female,

            'services_offered' => $this->services_offered,
            'loan_count' => $this->loan_count,
            'total_disbursed' => $this->total_disbursed,
            'average_loan_size' => $this->average_loan_size,
            'repayment_rate' => $this->repayment_rate,
            'default_rate' => $this->default_rate,
            'repayment_term' => $this->repayment_term,
            'female_borrowers_percent' => $this->female_borrowers_percent,
            'group_vs_individual' => $this->group_vs_individual,

            'collateral' => $this->collateral,
            'loan_rejection_reasons' => $this->loan_rejection_reasons,

            'asm_policies' => $this->asm_policies,
            'credit_scoring_data' => $this->credit_scoring_data,
            'risk_sharing' => $this->risk_sharing,
            'linked_value_chain' => $this->linked_value_chain,
            'value_chain_desc' => $this->value_chain_desc,
            'open_to_embedded_finance' => $this->open_to_embedded_finance,

            'gender_data_tracking' => $this->gender_data_tracking,
            'digital_tools' => $this->digital_tools,
            'agent_mobile_use' => $this->agent_mobile_use,
            'digital_gaps' => $this->digital_gaps,

            'support_miners_bank' => $this->support_miners_bank,
            'sovereign_roles' => $this->sovereign_roles,
            'partner_cofinance' => $this->partner_cofinance,
            'fiscal_reforms' => $this->fiscal_reforms,

            'successful_models' => $this->successful_models,
            'final_policy_suggestions' => $this->final_policy_suggestions,
        ]);

        session()->flash('message', 'Financial institution saved successfully!');
        $this->reset();

        return redirect()->route('form.thankyou'); // Redirect to a specific route after submission

    }

    public function render()
    {
        return view('livewire.financial-institution-create');
    }
}
