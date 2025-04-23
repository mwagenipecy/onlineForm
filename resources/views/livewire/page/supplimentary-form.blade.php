<div>

<div class="bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mb-10 text-center">
    <h1 class="text-3xl font-bold text-gray-900 sm:text-4xl">
        {{ session('locale') == 'sw' ? 'MUHTASARI WA ZANA YA UTAFITI (Msaada wa Mfumo wa Ikolojia)' : 'PROFILING TOOL BRIEF (Eco-System Support)' }}
    </h1>
    <p class="mt-3 text-xl text-gray-500">
        {{ session('locale') == 'sw' ? 'Kikosi Kazi Maalum cha Kuwawezesha Wachimbaji wa Ndani Tanzania' : 'Special Taskforce on Empowering Local Miners in Tanzania' }}
    </p>
            </div>



        @if (session()->has('message'))
            <div class="mb-8 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('message') }}</span>
            </div>
        @endif



        <!-- Section A: Identification and Profile -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{ session('locale') == 'sw' ? 'SEHEMU A: UTAMBULISHO NA TAARIFA ZA TAASISI' : 'SECTION A: IDENTIFICATION AND PROFILE' }}
        </h3>
    </div>
    <div class="px-4 py-5 sm:p-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">

        <div class="sm:col-span-3">
            <label for="institutionName" class="block text-sm font-medium text-gray-700">
                {{ session('locale') == 'sw' ? 'Jina la Taasisi/Asasi' : 'Name of Institution/Organization' }}
            </label>
            <input type="text" id="institutionName" wire:model="institutionName" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>

        <div class="sm:col-span-3">
            <label for="organizationType" class="block text-sm font-medium text-gray-700">
                {{ session('locale') == 'sw' ? 'Aina ya Taasisi' : 'Type of Organization' }}
            </label>
            <select id="organizationType" wire:model="organizationType" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                <option value="">{{ session('locale') == 'sw' ? 'Chagua aina' : 'Select type' }}</option>
                <option value="financial">{{ session('locale') == 'sw' ? 'Taasisi ya Kifedha (Benki/MFI/SACCO)' : 'Financial Institution (Bank/MFI/SACCO)' }}</option>
                <option value="government">{{ session('locale') == 'sw' ? 'Serikali/Mamlaka ya Udhibiti' : 'Government/Regulatory Body' }}</option>
                <option value="ngo">{{ session('locale') == 'sw' ? 'Asasi isiyo ya Kiserikali (NGO/CSO)' : 'NGO/CSO' }}</option>
                <option value="cooperative">{{ session('locale') == 'sw' ? 'Ushirika/Chama' : 'Cooperative/Association' }}</option>
                <option value="academic">{{ session('locale') == 'sw' ? 'Taasisi ya Elimu/Mafunzo' : 'Academic/Training Institution' }}</option>
                <option value="private">{{ session('locale') == 'sw' ? 'Mwakilishi wa Sekta Binafsi' : 'Private Sector Actor' }}</option>
                <option value="donor">{{ session('locale') == 'sw' ? 'Wadau wa Maendeleo/Wafadhili' : 'Development Partner/Donor' }}</option>
                <option value="other">{{ session('locale') == 'sw' ? 'Nyingine' : 'Other' }}</option>
            </select>
        </div>

        <div class="sm:col-span-3">
            <label for="operationRegions" class="block text-sm font-medium text-gray-700">
                {{ session('locale') == 'sw' ? 'Kanda/Mikoa ya Uendeshaji' : 'Zone(s)/Region(s) of Operation' }}
            </label>
            <input type="text" id="operationRegions" wire:model="operationRegions" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>

        <div class="sm:col-span-3">
            <label for="focalPerson" class="block text-sm font-medium text-gray-700">
                {{ session('locale') == 'sw' ? 'Jina na Wadhifa wa Mhusika Mkuu' : 'Focal Person Name & Title' }}
            </label>
            <input type="text" id="focalPerson" wire:model="focalPerson" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>

        <div class="sm:col-span-3">
            <label for="contactInfo" class="block text-sm font-medium text-gray-700">
                {{ session('locale') == 'sw' ? 'Maelezo ya Mawasiliano (Simu/Barua Pepe)' : 'Contact Information (Phone/Email)' }}
            </label>
            <input type="text" id="contactInfo" wire:model="contactInfo" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>

        <div class="sm:col-span-3">
            <label for="asmYears" class="block text-sm font-medium text-gray-700">
                {{ session('locale') == 'sw' ? 'Miaka ya Ushiriki katika Sekta ya Madini ya Wachimbaji Wadogo (ASM)' : 'Years of Involvement in ASM Sector' }}
            </label>
            <input type="number" id="asmYears" wire:model="asmYears" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>

    </div>
</div>






<!-- Section B: Institutional Function, Services & Target Groups -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg mt-8">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
    {{ session('locale') == 'sw' ? 'SEHEMU B: MAJUKUMU YA TAASISI, HUDUMA NA MAKUNDI YANAYOLENGWA' : 'SECTION B: INSTITUTIONAL FUNCTION, SERVICES & TARGET GROUPS' }}
</h3>
    </div>
    <div class="px-4 py-5 sm:p-6 space-y-6">

    <div>
    <label for="mandate" class="block text-sm font-medium text-gray-700">
        {{ session('locale') == 'sw' ? '7. Dhamira au kazi ya taasisi yako kwa wachimbaji wadogo ni ipi?' : '7. What is your organization’s mandate or function in relation to small-scale mining?' }}
    </label>
    <textarea id="mandate" wire:model="mandate" rows="4" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
</div>


<div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' ? '8. Unatoa huduma au msaada gani? (chagua vyote vinavyohusika)' : '8. What services or support do you offer? (tick all that apply)' }}
    </label>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach([
            'businessLoans' => ['en' => 'Business Loans', 'sw' => 'Mikopo ya Biashara'],
            'grantSupport' => ['en' => 'Grant Support', 'sw' => 'Msaada wa Ruzuku'],
            'legalAid' => ['en' => 'Legal Support or Compliance Training', 'sw' => 'Msaada wa Kisheria au Mafunzo ya Uzingatiaji'],
            'environmentalServices' => ['en' => 'Environmental Services', 'sw' => 'Huduma za Mazingira'],
            'equipmentFinancing' => ['en' => 'Equipment Financing', 'sw' => 'Ufadhili wa Vifaa'],
            'marketAccess' => ['en' => 'Market Access or Trading', 'sw' => 'Upatikanaji wa Masoko au Biashara'],
            'dataResearch' => ['en' => 'Data Collection & Research', 'sw' => 'Uchambuzi na Utafiti wa Takwimu'],
            'financialLiteracy' => ['en' => 'Financial Literacy', 'sw' => 'Elimu ya Fedha'],
            'digitalServices' => ['en' => 'Digital Services (apps, platforms)', 'sw' => 'Huduma za Kidijitali (programu, mifumo)'],
            'technicalTraining' => ['en' => 'Technical or Vocational Training', 'sw' => 'Mafunzo ya Ufundi au Kitaaluma'],
            'genderPrograms' => ['en' => 'Gender-focused Programs', 'sw' => 'Mipango Inayolenga Jinsia'],
            'otherServices' => ['en' => 'Other', 'sw' => 'Nyingine']
        ] as $key => $label)
        <div class="flex items-center">
            <input type="checkbox" id="{{ $key }}" wire:model="services.{{ $key }}" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
            <label for="{{ $key }}" class="ml-2 block text-sm text-gray-700">{{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}</label>
        </div>
        @endforeach
    </div>
</div>




<div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' ? '9. Ni makundi gani hasa mnayoyahudumia au kulenga?' : '9. Which groups do you primarily serve or target?' }}
    </label>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach([
            'artisanalMiners' => ['en' => 'Artisanal Miners', 'sw' => 'Wachimbaji wa Kiasili'],
            'womenInMining' => ['en' => 'Women in Mining', 'sw' => 'Wanawake katika Sekta ya Madini'],
            'youth' => ['en' => 'Youth', 'sw' => 'Vijana'],
            'miningCooperatives' => ['en' => 'Mining Cooperatives', 'sw' => 'Vyama vya Ushirika wa Madini'],
            'informalGroups' => ['en' => 'Informal Mining Groups', 'sw' => 'Makundi Yasiyo Rasmi ya Uchimbaji'],
            'localGovernment' => ['en' => 'Local Government', 'sw' => 'Serikali za Mitaa'],
            'otherGroups' => ['en' => 'Other', 'sw' => 'Nyingine']
        ] as $key => $label)
        <div class="flex items-center">
            <input type="checkbox" id="{{ $key }}" wire:model="targetGroups.{{ $key }}" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
            <label for="{{ $key }}" class="ml-2 block text-sm text-gray-700">
                {{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}
            </label>
        </div>
        @endforeach
    </div>
</div>


      

        <div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' ? '10. Mnahudumia maeneo gani ya uchimbaji? (mijini, vijijini au yote mawili)' : '10. Do you serve urban, peri-urban, or rural mining areas?' }}
    </label>
    <div class="flex flex-wrap gap-6">
        @foreach([
            'urban' => ['en' => 'Urban only', 'sw' => 'Mijini pekee'],
            'rural' => ['en' => 'Rural only', 'sw' => 'Vijijini pekee'],
            'both' => ['en' => 'Both', 'sw' => 'Yote mawili']
        ] as $value => $label)
        <div class="flex items-center">
            <input type="radio" id="area_{{ $value }}" wire:model="serviceArea" value="{{ $value }}" class="h-4 w-4 text-blue-600 border-gray-300">
            <label for="area_{{ $value }}" class="ml-2 block text-sm text-gray-700">
                {{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}
            </label>
        </div>
        @endforeach
    </div>
</div>
</div>



</div>



<!-- Section C: Influence, Capacity & Delivery Challenges -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg mt-8">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{ session('locale') == 'sw' ? 'SEHEMU C: USHAWISHI, UWEZO NA CHANGAMOTO ZA UTEKELEZAJI' : 'SECTION C: INFLUENCE, CAPACITY & DELIVERY CHALLENGES' }}
        </h3>
    </div>
    <div class="px-4 py-5 sm:p-6 space-y-6">

        <!-- Question 11 -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? '11. Kadiria uwezo wenu wa kuathiri matokeo ya sekta ya wachimbaji wadogo (sera, huduma, udhibiti)' : '11. Rate your ability to influence ASM sector outcomes (policy, access to services, regulation)' }}
            </label>
            <div class="flex flex-wrap gap-6">
                @foreach([
                    'very_high' => ['en' => 'Very High', 'sw' => 'Juu Sana'],
                    'high' => ['en' => 'High', 'sw' => 'Juu'],
                    'medium' => ['en' => 'Medium', 'sw' => 'Wastani'],
                    'low' => ['en' => 'Low', 'sw' => 'Chini'],
                    'none' => ['en' => 'None', 'sw' => 'Hakuna']
                ] as $value => $label)
                <div class="flex items-center">
                    <input type="radio" id="influence_{{ $value }}" wire:model="asmInfluenceLevel" value="{{ $value }}" class="h-4 w-4 text-blue-600 border-gray-300">
                    <label for="influence_{{ $value }}" class="ml-2 block text-sm text-gray-700">{{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}</label>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Question 12 -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? '12. Ni nguvu zipi kuu taasisi yenu inazo? (chagua zote zinazohusika)' : '12. What are your key institutional strengths? (tick all that apply)' }}
            </label>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach([
                    'communityPresence' => ['en' => 'Strong community presence', 'sw' => 'Uwepo mkubwa katika jamii'],
                    'technicalKnowledge' => ['en' => 'Technical knowledge', 'sw' => 'Maarifa ya kitaalamu'],
                    'financialResources' => ['en' => 'Financial resources', 'sw' => 'Rasilimali za kifedha'],
                    'staffExpertise' => ['en' => 'Staff expertise', 'sw' => 'Uzoefu wa wafanyakazi'],
                    'regulatoryAuthority' => ['en' => 'Regulatory authority', 'sw' => 'Mamlaka ya udhibiti'],
                    'donorFunding' => ['en' => 'Donor funding', 'sw' => 'Ufadhili wa wafadhili'],
                    'accessToNetworks' => ['en' => 'Access to networks', 'sw' => 'Upatikanaji wa mitandao'],
                    'legalMandate' => ['en' => 'Legal mandate', 'sw' => 'Mamlaka ya kisheria'],
                    'digitalTools' => ['en' => 'Digital tools', 'sw' => 'Zana za kidijitali']
                ] as $key => $label)
                <div class="flex items-center">
                    <input type="checkbox" id="strength_{{ $key }}" wire:model="institutionalStrengths.{{ $key }}" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="strength_{{ $key }}" class="ml-2 block text-sm text-gray-700">
                        {{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}
                    </label>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Question 13 -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? '13. Ni changamoto gani mnakutana nazo mnapofanya kazi na wachimbaji wadogo?' : '13. What challenges do you face working with ASM actors?' }}
            </label>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach([
                    'limitedData' => ['en' => 'Limited data or records', 'sw' => 'Takwimu au kumbukumbu chache'],
                    'lowFormalization' => ['en' => 'Low formalization among miners', 'sw' => 'Urasimishaji mdogo kwa wachimbaji'],
                    'languageGaps' => ['en' => 'Language and literacy gaps', 'sw' => 'Tofauti za lugha na uelewa'],
                    'weakCoordination' => ['en' => 'Weak institutional coordination', 'sw' => 'Uratibu hafifu wa taasisi'],
                    'genderBiases' => ['en' => 'Gender biases', 'sw' => 'Upendeleo wa kijinsia'],
                    'securityConcerns' => ['en' => 'Security concerns in mining zones', 'sw' => 'Changamoto za kiusalama kwenye maeneo ya uchimbaji'],
                    'lackOfFunding' => ['en' => 'Lack of funding or mandate', 'sw' => 'Ukosefu wa ufadhili au mamlaka'],
                    'regulatoryBottlenecks' => ['en' => 'Regulatory bottlenecks', 'sw' => 'Vikwazo vya kisheria']
                ] as $key => $label)
                <div class="flex items-center">
                    <input type="checkbox" id="challenge_{{ $key }}" wire:model="asmChallenges.{{ $key }}" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="challenge_{{ $key }}" class="ml-2 block text-sm text-gray-700">
                        {{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}
                    </label>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>








<!-- Section D: Policy Alignment, Governance & Trust -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg mt-8">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
    {{ session('locale') == 'sw' ? 'SEHEMU D: MUELEKEO WA SERA, UTAWALA NA IMANI' : 'SECTION D: POLICY ALIGNMENT, GOVERNANCE & TRUST' }}
</h3>

</div>
<div class="px-4 py-5 sm:p-6 space-y-6">

<div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' ? '14. Je, unashiriki au kuchangia katika mashauriano ya sera kwenye sekta ya madini?' : '14. Do you participate in or contribute to policy consultations in the mining sector?' }}
    </label>
    <div class="flex flex-wrap gap-6">
        @foreach([
            'regularly' => session('locale') == 'sw' ? 'Mara kwa mara' : 'Regularly',
            'occasionally' => session('locale') == 'sw' ? 'Mara chache' : 'Occasionally',
            'rarely' => session('locale') == 'sw' ? 'Mara nadra' : 'Rarely',
            'never' => session('locale') == 'sw' ? 'Hapana kabisa' : 'Never'
        ] as $value => $label)
            <div class="flex items-center">
                <input type="radio" id="policyConsult_{{ $value }}" wire:model="policyConsultation" value="{{ $value }}" class="h-4 w-4 text-blue-600 border-gray-300">
                <label for="policyConsult_{{ $value }}" class="ml-2 block text-sm text-gray-700">{{ $label }}</label>
            </div>
        @endforeach
    </div>
</div>




<div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' 
            ? '15. Je, unafahamu mifumo au sera zifuatazo za kitaifa? (chagua zote zinazohusika)' 
            : '15. Are you aware of the following national frameworks or policies? (tick all that apply)' }}
    </label>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach([
            'mineralPolicy' => session('locale') == 'sw' ? 'Sera ya Madini 2009' : 'Mineral Policy 2009',
            'environmentGuidelines' => session('locale') == 'sw' ? 'Miongozo ya Usimamizi wa Mazingira' : 'Environmental Management Guidelines',
            'localContentRegulations' => session('locale') == 'sw' ? 'Kanuni za Uboreshaji wa Maudhui ya Ndani' : 'Mining Local Content Regulations',
            'genderPolicy' => session('locale') == 'sw' ? 'Sera ya Jinsia na Maendeleo Tanzania' : 'Tanzania Gender and Development Policy',
            'financialInclusion' => session('locale') == 'sw' ? 'Mfumo wa Ujumuishaji wa Kifedha' : 'Financial Inclusion Framework',
            'ccmManifesto' => session('locale') == 'sw' ? 'Ahadi za Ilani ya CCM kuhusu Madini' : 'CCM Party Manifesto Commitments on Mining'
        ] as $key => $label)
            <div class="flex items-center">
                <input type="checkbox" id="policy_{{ $key }}" wire:model="frameworkAwareness.{{ $key }}" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="policy_{{ $key }}" class="ml-2 block text-sm text-gray-700">{{ $label }}</label>
            </div>
        @endforeach
    </div>
</div>



<div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' 
            ? '16. Ungezipa taasisi zifuatazo kiwango gani cha kuaminika? (1 = haina uaminifu, 5 = uaminifu kamili)' 
            : '16. How would you rate trust in the following institutions? (1 = no trust, 5 = full trust)' }}
    </label>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        @foreach([
            'miningCommission' => session('locale') == 'sw' ? 'Tume ya Madini' : 'Mining Commission',
            'localGovernment' => session('locale') == 'sw' ? 'Mamlaka za Serikali za Mitaa' : 'Local Government Authorities',
            'financialInstitutions' => session('locale') == 'sw' ? 'Taasisi za Kifedha' : 'Financial Institutions',
            'environmentalRegulators' => session('locale') == 'sw' ? 'Wadhibiti wa Mazingira' : 'Environmental Regulators',
            'minersAssociations' => session('locale') == 'sw' ? 'Vyama vya Wachimbaji (km FEMATA)' : 'Miners’ Associations (e.g. FEMATA)'
        ] as $key => $label)
            <div>
                <label for="trust_{{ $key }}" class="block text-sm text-gray-700 mb-1">{{ $label }}</label>
                <input type="number" min="1" max="5" wire:model="institutionTrust.{{ $key }}" id="trust_{{ $key }}" class="block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
        @endforeach
    </div>
</div>


<div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' 
            ? '17. Ushirikiano wako na taasisi hizi una ufanisi kiasi gani?' 
            : '17. How effective is your collaboration with these institutions?' }}
    </label>
    <div class="flex flex-wrap gap-6">
        @foreach([
            'excellent' => session('locale') == 'sw' ? 'Bora sana' : 'Excellent',
            'good' => session('locale') == 'sw' ? 'Nzuri' : 'Good',
            'average' => session('locale') == 'sw' ? 'Wastani' : 'Average',
            'poor' => session('locale') == 'sw' ? 'Duni' : 'Poor',
            'na' => session('locale') == 'sw' ? 'Haitumiki' : 'Not applicable'
        ] as $value => $label)
            <div class="flex items-center">
                <input type="radio" id="collaboration_{{ $value }}" wire:model="collaborationEffectiveness" value="{{ $value }}" class="h-4 w-4 text-blue-600 border-gray-300">
                <label for="collaboration_{{ $value }}" class="ml-2 block text-sm text-gray-700">{{ $label }}</label>
            </div>
        @endforeach
    </div>
</div>

<div>
    <label for="urgentPolicies" class="block text-sm font-medium text-gray-700">
        {{ session('locale') == 'sw' 
            ? '18. Mabadiliko gani ya sera yanahitajika haraka ili kuboresha sekta ya wachimbaji wadogo?' 
            : '18. What policy changes are most urgently needed to improve the ASM sector?' }}
    </label>
    <textarea id="urgentPolicies" wire:model="urgentPolicyChanges" rows="4" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
</div>




    </div>
</div>






<!-- Section E: Digital Tools, Data Systems & Reporting -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg mt-8">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
    {{ session('locale') == 'sw' 
        ? 'SEHEMU E: VIFAA VYA KIDIJITALI, MIFUMO YA TAKWIMU NA URIPOTI' 
        : 'SECTION E: DIGITAL TOOLS, DATA SYSTEMS & REPORTING' }}
</h3>
    </div>
    <div class="px-4 py-5 sm:p-6 space-y-6">

    <div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' 
            ? '19. Je, unatumia majukwaa ya kidijitali katika kutoa huduma kwa wadau wa sekta ya wachimbaji wadogo?' 
            : '19. Do you use digital platforms in delivering services to ASM actors?' }}
    </label>
    <div class="flex items-center space-x-6">
        <label class="flex items-center">
            <input type="radio" wire:model="usesDigitalPlatforms" value="yes" class="h-4 w-4 text-blue-600 border-gray-300">
            <span class="ml-2 text-sm text-gray-700">{{ session('locale') == 'sw' ? 'Ndiyo' : 'Yes' }}</span>
        </label>
        <label class="flex items-center">
            <input type="radio" wire:model="usesDigitalPlatforms" value="no" class="h-4 w-4 text-blue-600 border-gray-300">
            <span class="ml-2 text-sm text-gray-700">{{ session('locale') == 'sw' ? 'Hapana' : 'No' }}</span>
        </label>
    </div>

    @if ($usesDigitalPlatforms === 'yes')
        <div class="mt-3">
            <label for="platformDetails" class="block text-sm font-medium text-gray-700">
                {{ session('locale') == 'sw' ? 'Kama ndiyo, tafadhali taja:' : 'If yes, specify:' }}
            </label>
            <input type="text" id="platformDetails" wire:model="platformDetails" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
    @endif
</div>

<div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' 
            ? '20. Je, unakusanya data au kuweka kumbukumbu kuhusu shughuli za wachimbaji wadogo?' 
            : '20. Do you collect data or maintain records related to ASM operations?' }}
    </label>
    <div class="flex items-center space-x-6">
        <label class="flex items-center">
            <input type="radio" wire:model="collectsASMData" value="yes" class="h-4 w-4 text-blue-600 border-gray-300">
            <span class="ml-2 text-sm text-gray-700">{{ session('locale') == 'sw' ? 'Ndiyo' : 'Yes' }}</span>
        </label>
        <label class="flex items-center">
            <input type="radio" wire:model="collectsASMData" value="no" class="h-4 w-4 text-blue-600 border-gray-300">
            <span class="ml-2 text-sm text-gray-700">{{ session('locale') == 'sw' ? 'Hapana' : 'No' }}</span>
        </label>
    </div>

    @if ($collectsASMData === 'yes')
        <div class="mt-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' 
                    ? 'Data hiyo inatumika kwa njia gani? (chagua zote zinazohusika)' 
                    : 'How is the data used? (tick all that apply)' }}
            </label>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach([
                    'programDesign' => session('locale') == 'sw' ? 'Kubuni programu' : 'Program design',
                    'regulatoryReporting' => session('locale') == 'sw' ? 'Kuripoti kwa wadhibiti' : 'Reporting to regulators',
                    'performanceTracking' => session('locale') == 'sw' ? 'Kufuatilia utendaji kazi' : 'Performance tracking',
                    'publicAccess' => session('locale') == 'sw' ? 'Upatikanaji wa umma' : 'Public access',
                    'donorReporting' => session('locale') == 'sw' ? 'Kuripoti kwa wafadhili' : 'Donor reporting',
                    'otherUse' => session('locale') == 'sw' ? 'Nyingine' : 'Other'
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
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' 
            ? '21. Ni changamoto zipi mnazokutana nazo katika utoaji wa huduma za kidijitali au usimamizi wa takwimu?' 
            : '21. What challenges do you face in digital service delivery or data management?' }}
    </label>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach([
            'internetIssues' => session('locale') == 'sw' ? 'Changamoto za intaneti/maeneo yasiyofikiwa' : 'Internet/coverage issues',
            'userLiteracy' => session('locale') == 'sw' ? 'Uelewa mdogo wa watumiaji' : 'Literacy of end users',
            'lackOfITStaff' => session('locale') == 'sw' ? 'Upungufu wa wafanyakazi wa TEHAMA' : 'Lack of IT staff',
            'noMandateBudget' => session('locale') == 'sw' ? 'Hakuna bajeti au mamlaka ya kutekeleza' : 'No mandate or budget',
            'dataSecurity' => session('locale') == 'sw' ? 'Ukosefu wa mifumo ya usalama wa takwimu' : 'Lack of data security systems'
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
    <h3 class="text-lg leading-6 font-medium text-gray-900">
    {{ session('locale') == 'sw' 
        ? 'SEHEMU F: JINSIA, USHIRIKISHWAJI NA UWAZI WA MAZINGIRA' 
        : 'SECTION F: GENDER, INCLUSION & ENVIRONMENTAL ACCOUNTABILITY' }}
</h3>
</div>

<div class="px-4 py-5 sm:p-6 space-y-6">

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
            {{ session('locale') == 'sw' 
                ? '22. Je, shirika lako linawalenga au kufuatilia wanawake na vijana katika sekta ya madini?' 
                : '22. Does your organization target or track women and youth in mining?' }}
        </label>
        <div class="flex flex-wrap gap-6">
            @foreach([
                'explicit' => session('locale') == 'sw' ? 'Ndiyo – Moja kwa moja' : 'Yes – Explicitly',
                'indirect' => session('locale') == 'sw' ? 'Hapana moja kwa moja, ni sehemu ya mpango mpana' : 'Indirectly, as part of wider programming',
                'no' => session('locale') == 'sw' ? 'Hapana – Hawalengwi' : 'No – Not targeted'
            ] as $value => $label)
            <div class="flex items-center">
                <input type="radio" id="genderTrack_{{ $value }}" wire:model="targetsWomenYouth" value="{{ $value }}" class="h-4 w-4 text-blue-600 border-gray-300">
                <label for="genderTrack_{{ $value }}" class="ml-2 text-sm text-gray-700">{{ $label }}</label>
            </div>
            @endforeach
        </div>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
            {{ session('locale') == 'sw' 
                ? '23. Ni msaada gani mnaotoa ili kuendeleza ushirikishwaji katika sekta ya wachimbaji wadogo?' 
                : '23. What support do you offer to promote inclusion in ASM?' }}
        </label>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach([
                'womenFinance' => session('locale') == 'sw' ? 'Mafunzo au fedha kwa wanawake' : 'Women-focused training or finance',
                'genderAudits' => session('locale') == 'sw' ? 'Ukaguzi wa kijinsia' : 'Gender audits',
                'youthSupport' => session('locale') == 'sw' ? 'Msaada wa ujasiriamali kwa vijana' : 'Youth entrepreneurship support',
                'accessibilityServices' => session('locale') == 'sw' ? 'Huduma kwa watu wenye ulemavu' : 'Accessibility services (e.g., for persons with disabilities)',
                'none' => session('locale') == 'sw' ? 'Hakuna kwa sasa' : 'None currently',
                'otherInclusion' => session('locale') == 'sw' ? 'Nyinginezo' : 'Other'
            ] as $key => $label)
            <div class="flex items-center">
                <input type="checkbox" id="inclusion_{{ $key }}" wire:model="inclusionSupport.{{ $key }}" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="inclusion_{{ $key }}" class="ml-2 block text-sm text-gray-700">{{ $label }}</label>
            </div>
            @endforeach
        </div>
</div>


<div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' 
            ? '24. Je, unaunga mkono au kufuatilia ufuatiliaji wa mazingira katika uchimbaji?' 
            : '24. Do you support or monitor environmental compliance in mining?' }}
    </label>
    <div class="flex flex-wrap gap-6">
        @foreach([
            'direct' => session('locale') == 'sw' ? 'Ndiyo – Moja kwa moja' : 'Yes – Directly',
            'indirect' => session('locale') == 'sw' ? 'Hapana moja kwa moja, kupitia ushirikiano' : 'Indirectly through partnerships',
            'no' => session('locale') == 'sw' ? 'Hapana' : 'No'
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
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' 
            ? 'Kama ndiyo, mnalenga mambo gani hasa?' 
            : 'If yes, what do you focus on?' }}
    </label>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach([
            'chemicals' => session('locale') == 'sw' ? 'Matumizi ya kemikali (mf. zebaki, sianidi)' : 'Use of chemicals (e.g. mercury, cyanide)',
            'landRestoration' => session('locale') == 'sw' ? 'Urejeshaji wa ardhi' : 'Land restoration',
            'inspectionCompliance' => session('locale') == 'sw' ? 'Uzingatiaji wa miongozo ya ukaguzi' : 'Compliance with inspection guidelines',
            'climateRisks' => session('locale') == 'sw' ? 'Hatari za mabadiliko ya tabianchi (mf. mafuriko, mmomonyoko)' : 'Climate-related risks (e.g. floods, erosion)',
            'otherFocus' => session('locale') == 'sw' ? 'Nyinginezo' : 'Other'
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
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{ session('locale') == 'sw' 
                ? 'SEHEMU G: MCHANGO WA BAADAYE NA UTAAYARI WA MABADILIKO' 
                : 'SECTION G: FUTURE CONTRIBUTIONS AND REFORM READINESS' }}
        </h3>
    </div>
    <div class="px-4 py-5 sm:p-6 space-y-6">

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' 
                    ? '25. Je, unafahamu kuhusu Benki ya Wachimbaji au Mfuko wa Madini wa Taifa unaopendekezwa?' 
                    : '25. Are you aware of the proposed Miners’ Bank or Sovereign Mineral Fund?' }}
            </label>
            <div class="flex items-center space-x-6">
                <label class="flex items-center">
                    <input type="radio" wire:model="awareOfReforms" value="yes" class="h-4 w-4 text-blue-600 border-gray-300">
                    <span class="ml-2 text-sm text-gray-700">{{ session('locale') == 'sw' ? 'Ndiyo' : 'Yes' }}</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" wire:model="awareOfReforms" value="no" class="h-4 w-4 text-blue-600 border-gray-300">
                    <span class="ml-2 text-sm text-gray-700">{{ session('locale') == 'sw' ? 'Hapana' : 'No' }}</span>
                </label>
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' 
                    ? '26. Je, taasisi yako inaweza kuunga mkono au kushiriki katika maboresho haya?' 
                    : '26. Would your organization support or engage in these reforms?' }}
            </label>
            <div class="flex items-center space-x-6">
                <label class="flex items-center">
                    <input type="radio" wire:model="reformSupport" value="yes" class="h-4 w-4 text-blue-600 border-gray-300">
                    <span class="ml-2 text-sm text-gray-700">{{ session('locale') == 'sw' ? 'Ndiyo – Tuko tayari kushiriki' : 'Yes – Ready to participate' }}</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" wire:model="reformSupport" value="maybe" class="h-4 w-4 text-blue-600 border-gray-300">
                    <span class="ml-2 text-sm text-gray-700">{{ session('locale') == 'sw' ? 'Labda – Inategemea' : 'Maybe – Conditional' }}</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" wire:model="reformSupport" value="no" class="h-4 w-4 text-blue-600 border-gray-300">
                    <span class="ml-2 text-sm text-gray-700">{{ session('locale') == 'sw' ? 'Hapana – Haihusiani' : 'No – Not relevant' }}</span>
                </label>
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' 
                    ? '27. Ni katika nafasi gani uko tayari kushiriki? (chagua zote zinazofaa)' 
                    : '27. In what role would you be willing to participate? (tick all that apply)' }}
            </label>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach([
                    'policyAdvisor' => session('locale') == 'sw' ? 'Mshauri wa sera' : 'Policy advisor',
                    'coImplementer' => session('locale') == 'sw' ? 'Mshirika katika utekelezaji' : 'Co-implementer',
                    'outreachPartner' => session('locale') == 'sw' ? 'Mshirika wa uhamasishaji' : 'Outreach partner',
                    'capacityBuilding' => session('locale') == 'sw' ? 'Mafunzo/ujenzi wa uwezo' : 'Training/capacity building',
                    'financialService' => session('locale') == 'sw' ? 'Mtoa huduma za kifedha' : 'Financial service provider',
                    'monitoring' => session('locale') == 'sw' ? 'Ufuatiliaji/Tathmini' : 'Monitoring/evaluation',
                    'dataManagement' => session('locale') == 'sw' ? 'Usimamizi wa data/Maendeleo ya teknolojia' : 'Data management or tech design'
                ] as $key => $label)
                <div class="flex items-center">
                    <input type="checkbox" id="reformRole_{{ $key }}" wire:model="reformRoles.{{ $key }}" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="reformRole_{{ $key }}" class="ml-2 block text-sm text-gray-700">{{ $label }}</label>
                </div>
                @endforeach
            </div>
        </div>

        <div>
            <label for="institutionCredibility" class="block text-sm font-medium text-gray-700">
                {{ session('locale') == 'sw' 
                    ? '28. Ni mambo gani yangefanya taasisi mpya ziwe na uaminifu, zipatikane kwa urahisi, na ziwe endelevu kwa ushirikiano wenu?' 
                    : '28. What would make new institutions credible, accessible, and sustainable for your engagement?' }}
            </label>
            <textarea id="institutionCredibility" wire:model="institutionCredibility" rows="4" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">
                {{ session('locale') == 'sw' 
                    ? '29. Ni maboresho au ubunifu gani matatu yangekuwa na athari kubwa zaidi kwenye sekta?' 
                    : '29. What 3 key reforms or innovations would have the most impact on the sector?' }}
            </label>
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
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{ session('locale') == 'sw' 
                ? 'SEHEMU H: MAONI YA MWISHO NA MITAZAMO YA KIMKAKATI' 
                : 'SECTION H: FINAL COMMENTS AND STRATEGIC INSIGHT' }}
        </h3>
    </div>
    <div class="px-4 py-5 sm:p-6 space-y-6">

        <div>
            <label for="finalComments" class="block text-sm font-medium text-gray-700">
                {{ session('locale') == 'sw' 
                    ? '30. Tafadhali shiriki mapendekezo, changamoto au vipaumbele ambavyo taasisi yako ingependa Kikosi Kazi kizizingatie:' 
                    : '30. Please share any additional recommendations, concerns, or priorities your institution would like the Taskforce to consider:' }}
            </label>
            <textarea id="finalComments" wire:model="finalComments" rows="5" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="enumeratorName" class="block text-sm font-medium text-gray-700">
                    {{ session('locale') == 'sw' 
                        ? 'Jina la Mhoji & Tarehe' 
                        : 'Enumerator Name & Date' }}
                </label>
                <input type="text" id="enumeratorName" wire:model="enumeratorName" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div>
                <label for="regionZone" class="block text-sm font-medium text-gray-700">
                    {{ session('locale') == 'sw' 
                        ? 'Mkoa/Kanda' 
                        : 'Region/Zone' }}
                </label>
                <input type="text" id="regionZone" wire:model="regionZone" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' 
                    ? 'Njia ya mahojiano' 
                    : 'Interview Mode' }}
            </label>
            <div class="flex flex-wrap gap-6">
                @foreach([
                    'in_person' => session('locale') == 'sw' ? 'Ana kwa ana' : 'In-person',
                    'phone' => session('locale') == 'sw' ? 'Simu' : 'Phone',
                    'email' => session('locale') == 'sw' ? 'Barua pepe' : 'Email',
                    'group_discussion' => session('locale') == 'sw' ? 'Majadiliano ya Kikundi' : 'Group Discussion',
                    'other' => session('locale') == 'sw' ? 'Nyingine' : 'Other'
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






    <!-- Section I: Digital Tools and Strategic Proposals -->
    <div class="bg-white shadow overflow-hidden sm:rounded-lg mt-8">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{ session('locale') == 'sw' 
                ? 'SEHEMU I: ZANA ZA KIDIJITALI NA MAPENDEKEZO YA KIMKAKATI' 
                : 'SECTION I: DIGITAL TOOLS AND STRATEGIC PROPOSALS' }}
        </h3>
    </div>
    <div class="px-4 py-5 sm:p-6 space-y-6">

        <!-- Question 1 -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' 
                    ? '1. Je, unafahamu majukwaa yoyote ya kidijitali yanayohusiana na madini (mfano: leseni, mauzo, upatikanaji wa taarifa)?' 
                    : '1. Are you aware of any digital platforms related to mining (e.g., licensing, selling, information access)?' }}
            </label>
            <div class="flex items-center space-x-6">
                <label class="flex items-center">
                    <input type="radio" wire:model="digitalMiningPlatformAwareness" value="yes" class="h-4 w-4 text-blue-600 border-gray-300">
                    <span class="ml-2 text-sm text-gray-700">{{ session('locale') == 'sw' ? 'Ndiyo' : 'Yes' }}</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" wire:model="digitalMiningPlatformAwareness" value="no" class="h-4 w-4 text-blue-600 border-gray-300">
                    <span class="ml-2 text-sm text-gray-700">{{ session('locale') == 'sw' ? 'Hapana' : 'No' }}</span>
                </label>
            </div>
        </div>

        <!-- Question 2 -->
        @if ($digitalMiningPlatformAwareness === 'yes')
        <div>
            <label for="platformsUsed" class="block text-sm font-medium text-gray-700">
                {{ session('locale') == 'sw' ? '2. Kama ndiyo, ni majukwaa yapi umetumia?' : '2. If yes, which platforms have you used?' }}
            </label>
            <input type="text" id="platformsUsed" wire:model="platformsUsed" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        @endif

        <!-- Question 3 -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' 
                    ? '3. Je, unatumia programu za simu, huduma za SMS au zana za mtandaoni kusaidia shughuli zako za madini?' 
                    : '3. Do you use mobile apps, SMS services, or online tools to support your mining activities?' }}
            </label>
            <div class="flex items-center space-x-6">
                <label class="flex items-center">
                    <input type="radio" wire:model="usesMobileTools" value="yes" class="h-4 w-4 text-blue-600 border-gray-300">
                    <span class="ml-2 text-sm text-gray-700">{{ session('locale') == 'sw' ? 'Ndiyo' : 'Yes' }}</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" wire:model="usesMobileTools" value="no" class="h-4 w-4 text-blue-600 border-gray-300">
                    <span class="ml-2 text-sm text-gray-700">{{ session('locale') == 'sw' ? 'Hapana' : 'No' }}</span>
                </label>
            </div>
        </div>

        <!-- Question 4 -->
        <div>
            <label for="minersBankOpinion" class="block text-sm font-medium text-gray-700">
                {{ session('locale') == 'sw' 
                    ? '4. Maoni yako kuhusu kuanzishwa kwa Benki ya Wachimbaji au Mfuko wa Taifa wa Madini ni yapi?' 
                    : '4. What is your opinion on the creation of a Miners’ Bank or Sovereign Fund?' }}
            </label>
            <textarea id="minersBankOpinion" wire:model="minersBankOpinion" rows="3" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
        </div>

        <!-- Question 5 -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' 
                    ? '5. Ni nini kifanywe kuwa kipaumbele cha juu cha Mfuko wa Wachimbaji au Benki?' 
                    : '5. Which of the following should be a top priority of a Miners’ Fund or Bank?' }}
            </label>
            <div class="space-y-2">
                @foreach([
                    'credit' => session('locale') == 'sw' ? 'Upatikanaji wa Mikopo' : 'Credit access',
                    'leasing' => session('locale') == 'sw' ? 'Upangishaji wa Vifaa' : 'Equipment leasing',
                    'infrastructure' => session('locale') == 'sw' ? 'Miundombinu (barabara, umeme, nk.)' : 'Infrastructure (roads, power, etc.)',
                    'training' => session('locale') == 'sw' ? 'Mafunzo na Vyeti vya Ufundi' : 'Technical training and certification',
                    'other' => session('locale') == 'sw' ? 'Nyingine (tafadhali taja)' : 'Other (please specify)'
                ] as $key => $label)
                <div class="flex items-center">
                    <input type="checkbox" id="minerFundPriority_{{ $key }}" wire:model="minerFundPriorities.{{ $key }}" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="minerFundPriority_{{ $key }}" class="ml-2 block text-sm text-gray-700">{{ $label }}</label>
                </div>
                @endforeach

                @if (!empty($minerFundPriorities['other']))
                <input type="text" wire:model="minerFundPrioritiesOther" placeholder="{{ session('locale') == 'sw' ? 'Tafadhali taja' : 'Please specify' }}" class="mt-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @endif
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
    
    {{ session('locale') == 'sw' ? 'Wasilisha' : 'Submit' }}
</button>


</div>















        </div>
    </div>
</div>
