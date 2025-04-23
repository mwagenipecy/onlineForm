<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\InstitutionProfile;

class FinanceForm extends Component
{

    public function render()
    {
        return view('livewire.finance-form');
    }

    public $institution_name, $institution_type, $registration_date,
    $head_office_location, $total_employees,
    $total_loan_portfolio, $extractive_loan_amount,
    $extractive_loan_percentage;

public function submit()
{
 $this->validate([
     'institution_name' => 'required|string',
     'institution_type' => 'required|string',
     'registration_date' => 'nullable|date',
     'head_office_location' => 'nullable|string',
     'total_employees' => 'nullable|integer',
     'total_loan_portfolio' => 'nullable|numeric',
     'extractive_loan_amount' => 'nullable|numeric',
     'extractive_loan_percentage' => 'nullable|numeric',
 ]);

 InstitutionProfile::create($this->only([
     'institution_name', 'institution_type', 'registration_date',
     'head_office_location', 'total_employees',
     'total_loan_portfolio', 'extractive_loan_amount',
     'extractive_loan_percentage'
 ]));

 session()->flash('message', 'Profile submitted successfully!');
 $this->reset(); // Reset fields after submit
}

}
