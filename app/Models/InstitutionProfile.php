<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstitutionProfile extends Model
{
    protected $table = 'institution_profiles';
    protected $fillable = [
        'institution_name',
        'institution_type',
        'registration_date',
        'head_office_location',
        'total_employees',
        'total_loan_portfolio',
        'extractive_loan_amount',
        'extractive_loan_percentage'
    ];
    
}
