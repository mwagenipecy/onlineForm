<div>

<div class="bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-10 text-center">
            <h1 class="text-3xl font-bold text-gray-900 sm:text-4xl">PROFILING TOOL BRIEF (Eco-System Support) </h1>
            <p class="mt-3 text-xl text-gray-500">Special Taskforce on Empowering Local Miners in Tanzania</p>
        </div>

        @if (session()->has('message'))
            <div class="mb-8 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('message') }}</span>
            </div>
        @endif



        <!-- Section A: Identification and Profile -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
        <h3 class="text-lg leading-6 font-medium text-gray-900">SECTION A: IDENTIFICATION AND PROFILE</h3>
    </div>
    <div class="px-4 py-5 sm:p-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
        
        <div class="sm:col-span-3">
            <label for="institutionName" class="block text-sm font-medium text-gray-700">Name of Institution/Organization</label>
            <input type="text" id="institutionName" wire:model="institutionName" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>

        <div class="sm:col-span-3">
            <label for="organizationType" class="block text-sm font-medium text-gray-700">Type of Organization</label>
            <select id="organizationType" wire:model="organizationType" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                <option value="">Select type</option>
                <option value="financial">Financial Institution (Bank/MFI/SACCO)</option>
                <option value="government">Government/Regulatory Body</option>
                <option value="ngo">NGO/CSO</option>
                <option value="cooperative">Cooperative/Association</option>
                <option value="academic">Academic/Training Institution</option>
                <option value="private">Private Sector Actor</option>
                <option value="donor">Development Partner/Donor</option>
                <option value="other">Other</option>
            </select>
        </div>

        <div class="sm:col-span-3">
            <label for="operationRegions" class="block text-sm font-medium text-gray-700">Zone(s)/Region(s) of Operation</label>
            <input type="text" id="operationRegions" wire:model="operationRegions" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>

        <div class="sm:col-span-3">
            <label for="focalPerson" class="block text-sm font-medium text-gray-700">Focal Person Name & Title</label>
            <input type="text" id="focalPerson" wire:model="focalPerson" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>

        <div class="sm:col-span-3">
            <label for="contactInfo" class="block text-sm font-medium text-gray-700">Contact Information (Phone/Email)</label>
            <input type="text" id="contactInfo" wire:model="contactInfo" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>

        <div class="sm:col-span-3">
            <label for="asmYears" class="block text-sm font-medium text-gray-700">Years of Involvement in ASM Sector</label>
            <input type="number" id="asmYears" wire:model="asmYears" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>

    </div>
</div>






<!-- Section B: Institutional Function, Services & Target Groups -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg mt-8">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
        <h3 class="text-lg leading-6 font-medium text-gray-900">SECTION B: INSTITUTIONAL FUNCTION, SERVICES & TARGET GROUPS</h3>
    </div>
    <div class="px-4 py-5 sm:p-6 space-y-6">

        <div>
            <label for="mandate" class="block text-sm font-medium text-gray-700">7. What is your organization’s mandate or function in relation to small-scale mining?</label>
            <textarea id="mandate" wire:model="mandate" rows="4" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">8. What services or support do you offer? (tick all that apply)</label>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach([
                    'businessLoans' => 'Business Loans',
                    'grantSupport' => 'Grant Support',
                    'legalAid' => 'Legal Aid or Compliance Training',
                    'environmentalServices' => 'Environmental Services',
                    'equipmentFinancing' => 'Equipment Financing',
                    'marketAccess' => 'Market Access or Trading',
                    'dataResearch' => 'Data Collection & Research',
                    'financialLiteracy' => 'Financial Literacy',
                    'digitalServices' => 'Digital Services (apps, platforms)',
                    'technicalTraining' => 'Technical or Vocational Training',
                    'genderPrograms' => 'Gender-focused Programs',
                    'otherServices' => 'Other'
                ] as $key => $label)
                <div class="flex items-center">
                    <input type="checkbox" id="{{ $key }}" wire:model="services.{{ $key }}" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="{{ $key }}" class="ml-2 block text-sm text-gray-700">{{ $label }}</label>
                </div>
                @endforeach
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">9. Which groups do you primarily serve or target?</label>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach([
                    'artisanalMiners' => 'Artisanal Miners',
                    'womenInMining' => 'Women in Mining',
                    'youth' => 'Youth',
                    'miningCooperatives' => 'Mining Cooperatives',
                    'informalGroups' => 'Informal Mining Groups',
                    'localGovernment' => 'Local Government',
                    'otherGroups' => 'Other'
                ] as $key => $label)
                <div class="flex items-center">
                    <input type="checkbox" id="{{ $key }}" wire:model="targetGroups.{{ $key }}" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="{{ $key }}" class="ml-2 block text-sm text-gray-700">{{ $label }}</label>
                </div>
                @endforeach
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">10. Do you serve urban, peri-urban, or rural mining areas?</label>
            <div class="flex flex-wrap gap-6">
                @foreach([
                    'urban' => 'Urban only',
                    'rural' => 'Rural only',
                    'both' => 'Both'
                ] as $value => $label)
                <div class="flex items-center">
                    <input type="radio" id="area_{{ $value }}" wire:model="serviceArea" value="{{ $value }}" class="h-4 w-4 text-blue-600 border-gray-300">
                    <label for="area_{{ $value }}" class="ml-2 block text-sm text-gray-700">{{ $label }}</label>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>



<!-- Section C: Influence, Capacity & Delivery Challenges -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg mt-8">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
        <h3 class="text-lg leading-6 font-medium text-gray-900">SECTION C: INFLUENCE, CAPACITY & DELIVERY CHALLENGES</h3>
    </div>
    <div class="px-4 py-5 sm:p-6 space-y-6">

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">11. Rate your ability to influence ASM sector outcomes (policy, access to services, regulation)</label>
            <div class="flex flex-wrap gap-6">
                @foreach(['very_high' => 'Very High', 'high' => 'High', 'medium' => 'Medium', 'low' => 'Low', 'none' => 'None'] as $value => $label)
                <div class="flex items-center">
                    <input type="radio" id="influence_{{ $value }}" wire:model="asmInfluenceLevel" value="{{ $value }}" class="h-4 w-4 text-blue-600 border-gray-300">
                    <label for="influence_{{ $value }}" class="ml-2 block text-sm text-gray-700">{{ $label }}</label>
                </div>
                @endforeach
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">12. What are your key institutional strengths? (tick all that apply)</label>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach([
                    'communityPresence' => 'Strong community presence',
                    'technicalKnowledge' => 'Technical knowledge',
                    'financialResources' => 'Financial resources',
                    'staffExpertise' => 'Staff expertise',
                    'regulatoryAuthority' => 'Regulatory authority',
                    'donorFunding' => 'Donor funding',
                    'accessToNetworks' => 'Access to networks',
                    'legalMandate' => 'Legal mandate',
                    'digitalTools' => 'Digital tools'
                ] as $key => $label)
                <div class="flex items-center">
                    <input type="checkbox" id="strength_{{ $key }}" wire:model="institutionalStrengths.{{ $key }}" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="strength_{{ $key }}" class="ml-2 block text-sm text-gray-700">{{ $label }}</label>
                </div>
                @endforeach
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">13. What challenges do you face working with ASM actors?</label>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach([
                    'limitedData' => 'Limited data or records',
                    'lowFormalization' => 'Low formalization among miners',
                    'languageGaps' => 'Language and literacy gaps',
                    'weakCoordination' => 'Weak institutional coordination',
                    'genderBiases' => 'Gender biases',
                    'securityConcerns' => 'Security concerns in mining zones',
                    'lackOfFunding' => 'Lack of funding or mandate',
                    'regulatoryBottlenecks' => 'Regulatory bottlenecks'
                ] as $key => $label)
                <div class="flex items-center">
                    <input type="checkbox" id="challenge_{{ $key }}" wire:model="asmChallenges.{{ $key }}" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="challenge_{{ $key }}" class="ml-2 block text-sm text-gray-700">{{ $label }}</label>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>







<!-- Section D: Policy Alignment, Governance & Trust -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg mt-8">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
        <h3 class="text-lg leading-6 font-medium text-gray-900">SECTION D: POLICY ALIGNMENT, GOVERNANCE & TRUST</h3>
    </div>
    <div class="px-4 py-5 sm:p-6 space-y-6">

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">14. Do you participate in or contribute to policy consultations in the mining sector?</label>
            <div class="flex flex-wrap gap-6">
                @foreach(['regularly' => 'Regularly', 'occasionally' => 'Occasionally', 'rarely' => 'Rarely', 'never' => 'Never'] as $value => $label)
                <div class="flex items-center">
                    <input type="radio" id="policyConsult_{{ $value }}" wire:model="policyConsultation" value="{{ $value }}" class="h-4 w-4 text-blue-600 border-gray-300">
                    <label for="policyConsult_{{ $value }}" class="ml-2 block text-sm text-gray-700">{{ $label }}</label>
                </div>
                @endforeach
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">15. Are you aware of the following national frameworks or policies? (tick all that apply)</label>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach([
                    'mineralPolicy' => 'Mineral Policy 2009',
                    'environmentGuidelines' => 'Environmental Management Guidelines',
                    'localContentRegulations' => 'Mining Local Content Regulations',
                    'genderPolicy' => 'Tanzania Gender and Development Policy',
                    'financialInclusion' => 'Financial Inclusion Framework',
                    'ccmManifesto' => 'CCM Party Manifesto Commitments on Mining'
                ] as $key => $label)
                <div class="flex items-center">
                    <input type="checkbox" id="policy_{{ $key }}" wire:model="frameworkAwareness.{{ $key }}" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="policy_{{ $key }}" class="ml-2 block text-sm text-gray-700">{{ $label }}</label>
                </div>
                @endforeach
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">16. How would you rate trust in the following institutions? (1 = no trust, 5 = full trust)</label>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                @foreach([
                    'miningCommission' => 'Mining Commission',
                    'localGovernment' => 'Local Government Authorities',
                    'financialInstitutions' => 'Financial Institutions',
                    'environmentalRegulators' => 'Environmental Regulators',
                    'minersAssociations' => 'Miners’ Associations (e.g. FEMATA)'
                ] as $key => $label)
                <div>
                    <label for="trust_{{ $key }}" class="block text-sm text-gray-700 mb-1">{{ $label }}</label>
                    <input type="number" min="1" max="5" wire:model="institutionTrust.{{ $key }}" id="trust_{{ $key }}" class="block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                @endforeach
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">17. How effective is your collaboration with these institutions?</label>
            <div class="flex flex-wrap gap-6">
                @foreach(['excellent' => 'Excellent', 'good' => 'Good', 'average' => 'Average', 'poor' => 'Poor', 'na' => 'Not applicable'] as $value => $label)
                <div class="flex items-center">
                    <input type="radio" id="collaboration_{{ $value }}" wire:model="collaborationEffectiveness" value="{{ $value }}" class="h-4 w-4 text-blue-600 border-gray-300">
                    <label for="collaboration_{{ $value }}" class="ml-2 block text-sm text-gray-700">{{ $label }}</label>
                </div>
                @endforeach
            </div>
        </div>

        <div>
            <label for="urgentPolicies" class="block text-sm font-medium text-gray-700">18. What policy changes are most urgently needed to improve the ASM sector?</label>
            <textarea id="urgentPolicies" wire:model="urgentPolicyChanges" rows="4" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
        </div>

    </div>
</div>






<!-- Section E: Digital Tools, Data Systems & Reporting -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg mt-8">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
        <h3 class="text-lg leading-6 font-medium text-gray-900">SECTION E: DIGITAL TOOLS, DATA SYSTEMS & REPORTING</h3>
    </div>
    <div class="px-4 py-5 sm:p-6 space-y-6">

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">19. Do you use digital platforms in delivering services to ASM actors?</label>
            <div class="flex items-center space-x-6">
                <label class="flex items-center">
                    <input type="radio" wire:model="usesDigitalPlatforms" value="yes" class="h-4 w-4 text-blue-600 border-gray-300">
                    <span class="ml-2 text-sm text-gray-700">Yes</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" wire:model="usesDigitalPlatforms" value="no" class="h-4 w-4 text-blue-600 border-gray-300">
                    <span class="ml-2 text-sm text-gray-700">No</span>
                </label>
            </div>
            @if ($usesDigitalPlatforms === 'yes')
                <div class="mt-3">
                    <label for="platformDetails" class="block text-sm font-medium text-gray-700">If yes, specify:</label>
                    <input type="text" id="platformDetails" wire:model="platformDetails" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
            @endif
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">20. Do you collect data or maintain records related to ASM operations?</label>
            <div class="flex items-center space-x-6">
                <label class="flex items-center">
                    <input type="radio" wire:model="collectsASMData" value="yes" class="h-4 w-4 text-blue-600 border-gray-300">
                    <span class="ml-2 text-sm text-gray-700">Yes</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" wire:model="collectsASMData" value="no" class="h-4 w-4 text-blue-600 border-gray-300">
                    <span class="ml-2 text-sm text-gray-700">No</span>
                </label>
            </div>

            @if ($collectsASMData === 'yes')
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">How is the data used? (tick all that apply)</label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        @foreach([
                            'programDesign' => 'Program design',
                            'regulatoryReporting' => 'Reporting to regulators',
                            'performanceTracking' => 'Performance tracking',
                            'publicAccess' => 'Public access',
                            'donorReporting' => 'Donor reporting',
                            'otherUse' => 'Other'
                        ] as $key => $label)
                        <div class="flex items-center">
                            <input type="checkbox" id="dataUse_{{ $key }}" wire:model="dataUse.{{ $key }}" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                            <label for="dataUse_{{ $key }}" class="ml-2 block text-sm text-gray-700">{{ $label }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">21. What challenges do you face in digital service delivery or data management?</label>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach([
                    'internetIssues' => 'Internet/coverage issues',
                    'userLiteracy' => 'Literacy of end users',
                    'lackOfITStaff' => 'Lack of IT staff',
                    'noMandateBudget' => 'No mandate or budget',
                    'dataSecurity' => 'Lack of data security systems'
                ] as $key => $label)
                <div class="flex items-center">
                    <input type="checkbox" id="digitalChallenge_{{ $key }}" wire:model="digitalChallenges.{{ $key }}" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="digitalChallenge_{{ $key }}" class="ml-2 block text-sm text-gray-700">{{ $label }}</label>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>




<!-- Section F: Gender, Inclusion & Environmental Accountability -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg mt-8">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
        <h3 class="text-lg leading-6 font-medium text-gray-900">SECTION F: GENDER, INCLUSION & ENVIRONMENTAL ACCOUNTABILITY</h3>
    </div>
    <div class="px-4 py-5 sm:p-6 space-y-6">

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">22. Does your organization target or track women and youth in mining?</label>
            <div class="flex flex-wrap gap-6">
                @foreach([
                    'explicit' => 'Yes – Explicitly',
                    'indirect' => 'Indirectly, as part of wider programming',
                    'no' => 'No – Not targeted'
                ] as $value => $label)
                <div class="flex items-center">
                    <input type="radio" id="genderTrack_{{ $value }}" wire:model="targetsWomenYouth" value="{{ $value }}" class="h-4 w-4 text-blue-600 border-gray-300">
                    <label for="genderTrack_{{ $value }}" class="ml-2 text-sm text-gray-700">{{ $label }}</label>
                </div>
                @endforeach
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">23. What support do you offer to promote inclusion in ASM?</label>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach([
                    'womenFinance' => 'Women-focused training or finance',
                    'genderAudits' => 'Gender audits',
                    'youthSupport' => 'Youth entrepreneurship support',
                    'accessibilityServices' => 'Accessibility services (e.g., for persons with disabilities)',
                    'none' => 'None currently',
                    'otherInclusion' => 'Other'
                ] as $key => $label)
                <div class="flex items-center">
                    <input type="checkbox" id="inclusion_{{ $key }}" wire:model="inclusionSupport.{{ $key }}" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="inclusion_{{ $key }}" class="ml-2 block text-sm text-gray-700">{{ $label }}</label>
                </div>
                @endforeach
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">24. Do you support or monitor environmental compliance in mining?</label>
            <div class="flex flex-wrap gap-6">
                @foreach([
                    'direct' => 'Yes – Directly',
                    'indirect' => 'Indirectly through partnerships',
                    'no' => 'No'
                ] as $value => $label)
                <div class="flex items-center">
                    <input type="radio" id="envCompliance_{{ $value }}" wire:model="environmentalCompliance" value="{{ $value }}" class="h-4 w-4 text-blue-600 border-gray-300">
                    <label for="envCompliance_{{ $value }}" class="ml-2 block text-sm text-gray-700">{{ $label }}</label>
                </div>
                @endforeach
            </div>
        </div>

        @if($environmentalCompliance === 'direct' || $environmentalCompliance === 'indirect')
        <div class="mt-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">If yes, what do you focus on?</label>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach([
                    'chemicals' => 'Use of chemicals (e.g. mercury, cyanide)',
                    'landRestoration' => 'Land restoration',
                    'inspectionCompliance' => 'Compliance with inspection guidelines',
                    'climateRisks' => 'Climate-related risks (e.g. floods, erosion)',
                    'otherFocus' => 'Other'
                ] as $key => $label)
                <div class="flex items-center">
                    <input type="checkbox" id="envFocus_{{ $key }}" wire:model="environmentFocus.{{ $key }}" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="envFocus_{{ $key }}" class="ml-2 block text-sm text-gray-700">{{ $label }}</label>
                </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</div>



<!-- Section G: Future Contributions and Reform Readiness -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg mt-8">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
        <h3 class="text-lg leading-6 font-medium text-gray-900">SECTION G: FUTURE CONTRIBUTIONS AND REFORM READINESS</h3>
    </div>
    <div class="px-4 py-5 sm:p-6 space-y-6">

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">25. Are you aware of the proposed Miners’ Bank or Sovereign Mineral Fund?</label>
            <div class="flex items-center space-x-6">
                <label class="flex items-center">
                    <input type="radio" wire:model="awareOfReforms" value="yes" class="h-4 w-4 text-blue-600 border-gray-300">
                    <span class="ml-2 text-sm text-gray-700">Yes</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" wire:model="awareOfReforms" value="no" class="h-4 w-4 text-blue-600 border-gray-300">
                    <span class="ml-2 text-sm text-gray-700">No</span>
                </label>
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">26. Would your organization support or engage in these reforms?</label>
            <div class="flex items-center space-x-6">
                <label class="flex items-center">
                    <input type="radio" wire:model="reformSupport" value="yes" class="h-4 w-4 text-blue-600 border-gray-300">
                    <span class="ml-2 text-sm text-gray-700">Yes – Ready to participate</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" wire:model="reformSupport" value="maybe" class="h-4 w-4 text-blue-600 border-gray-300">
                    <span class="ml-2 text-sm text-gray-700">Maybe – Conditional</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" wire:model="reformSupport" value="no" class="h-4 w-4 text-blue-600 border-gray-300">
                    <span class="ml-2 text-sm text-gray-700">No – Not relevant</span>
                </label>
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">27. In what role would you be willing to participate? (tick all that apply)</label>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach([
                    'policyAdvisor' => 'Policy advisor',
                    'coImplementer' => 'Co-implementer',
                    'outreachPartner' => 'Outreach partner',
                    'capacityBuilding' => 'Training/capacity building',
                    'financialService' => 'Financial service provider',
                    'monitoring' => 'Monitoring/evaluation',
                    'dataManagement' => 'Data management or tech design'
                ] as $key => $label)
                <div class="flex items-center">
                    <input type="checkbox" id="reformRole_{{ $key }}" wire:model="reformRoles.{{ $key }}" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="reformRole_{{ $key }}" class="ml-2 block text-sm text-gray-700">{{ $label }}</label>
                </div>
                @endforeach
            </div>
        </div>

        <div>
            <label for="institutionCredibility" class="block text-sm font-medium text-gray-700">28. What would make new institutions credible, accessible, and sustainable for your engagement?</label>
            <textarea id="institutionCredibility" wire:model="institutionCredibility" rows="4" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">29. What 3 key reforms or innovations would have the most impact on the sector?</label>
            <div class="space-y-3 mt-2">
                <input type="text" wire:model="impactReforms.1" placeholder="1." class="block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                <input type="text" wire:model="impactReforms.2" placeholder="2." class="block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                <input type="text" wire:model="impactReforms.3" placeholder="3." class="block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
        </div>

    </div>
</div>






<!-- Section H: Final Comments and Strategic Insight -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg mt-8">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
        <h3 class="text-lg leading-6 font-medium text-gray-900">SECTION H: FINAL COMMENTS AND STRATEGIC INSIGHT</h3>
    </div>
    <div class="px-4 py-5 sm:p-6 space-y-6">

        <div>
            <label for="finalComments" class="block text-sm font-medium text-gray-700">30. Please share any additional recommendations, concerns, or priorities your institution would like the Taskforce to consider:</label>
            <textarea id="finalComments" wire:model="finalComments" rows="5" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="enumeratorName" class="block text-sm font-medium text-gray-700">Enumerator Name & Date</label>
                <input type="text" id="enumeratorName" wire:model="enumeratorName" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div>
                <label for="regionZone" class="block text-sm font-medium text-gray-700">Region/Zone</label>
                <input type="text" id="regionZone" wire:model="regionZone" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Interview Mode</label>
            <div class="flex flex-wrap gap-6">
                @foreach([
                    'in_person' => 'In-person',
                    'phone' => 'Phone',
                    'email' => 'Email',
                    'group_discussion' => 'Group Discussion',
                    'other' => 'Other'
                ] as $value => $label)
                <div class="flex items-center">
                    <input type="radio" id="interviewMode_{{ $value }}" wire:model="interviewMode" value="{{ $value }}" class="h-4 w-4 text-blue-600 border-gray-300">
                    <label for="interviewMode_{{ $value }}" class="ml-2 block text-sm text-gray-700">{{ $label }}</label>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>




<!-- Submit Button -->
<div class="bg-gray-50 px-4 py-3 text-right sm:px-6 mt-6">
    <button type="submit" wire:click="submit"
        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
        wire:loading.attr="disabled">
        <svg wire:loading class="animate-spin -ml-1 mr-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor"
                d="M4 12a8 8 0 018-8v8H4z">
            </path>
        </svg>
        Submit
    </button>
</div>















        </div>
    </div>
</div>
