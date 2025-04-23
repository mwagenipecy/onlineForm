<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MinerProfile extends Model
{
    protected $fillable = [
        'interviewer_name',
        'interview_date',
        'region',
        'district',
        'ward',
        'enumeration',
        'profile',
        'mining_activity',
        'finance',
        'technical',
        'environmental',
        'community',
        'policy',
        'reform_feedback',
        'market',       // ← NEW
        'inclusion',    // ← NEW
        'geology',
    ];

    protected $casts = [
        'enumeration' => 'array',
        'profile' => 'array',
        'mining_activity' => 'array',
        'finance' => 'array',
        'technical' => 'array',
        'environmental' => 'array',
        'community' => 'array',
        'policy' => 'array',
        'reform_feedback' => 'array',
        'market' => 'array',       // ← NEW
    'inclusion' => 'array',    // ← NEW
    'geology' => 'array', 
    ];

    
}
