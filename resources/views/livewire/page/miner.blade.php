<div>


        <div class="bg-gray-50 py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="mb-10 text-center">
            <h1 class="text-3xl font-bold text-gray-900 sm:text-4xl">
                @if(session('locale') == 'sw')
                    MUHTASARI WA ZANA YA UCHAMBUZI (Wachimbaji)
                @else
                    PROFILING TOOL BRIEF (Miner’s)
                @endif
            </h1>
            <p class="mt-3 text-xl text-gray-500">
                @if(session('locale') == 'sw')
                    Kikosi Kazi Maalum cha Kuwawezesha Wachimbaji wa Ndani Tanzania
                @else
                    Special Taskforce on Empowering Local Miners in Tanzania
                @endif
            </p>
        </div>


        @if (session()->has('message'))
            <div class="mb-8 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('message') }}</span>
            </div>
        @endif
        @if ($errors->any())
            <div class="mb-8 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">Please correct the following errors:</span>
                <ul class="mt-2 list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif


        <div class="bg-white shadow rounded-lg p-6">
    <h3 class="text-lg font-semibold text-gray-800 mb-4">
        @if(session('locale') == 'sw')
            SEHEMU A: MAELEZO YA MWANDIKISHAJI
        @else
            SECTION A: ENUMERATION DETAILS
        @endif
    </h3>

    <div class="space-y-6">
        <div>
            <label for="interviewerName" class="block text-sm font-medium text-gray-700">
                {{ session('locale') == 'sw' ? 'Jina la Mwandikisha' : 'Interviewer Name' }}
            </label>
            <input id="interviewerName" wire:model="enumeration.interviewerName" type="text"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="interviewDate" class="block text-sm font-medium text-gray-700">
                    {{ session('locale') == 'sw' ? 'Tarehe ya Mahojiano' : 'Date of Interview' }}
                </label>
                <input id="interviewDate" wire:model="enumeration.date" type="date"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div>
                <label for="region" class="block text-sm font-medium text-gray-700">
                    {{ session('locale') == 'sw' ? 'Mkoa' : 'Region' }}
                </label>
                <input id="region" wire:model="enumeration.region" type="text"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="district" class="block text-sm font-medium text-gray-700">
                    {{ session('locale') == 'sw' ? 'Wilaya' : 'District' }}
                </label>
                <input id="district" wire:model="enumeration.district" type="text"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div>
                <label for="ward" class="block text-sm font-medium text-gray-700">
                    {{ session('locale') == 'sw' ? 'Kata/Kijiji' : 'Ward/Village' }}
                </label>
                <input id="ward" wire:model="enumeration.ward" type="text"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Aina ya Mahojiano:' : 'Interview Type:' }}
            </label>
            <div class="flex flex-wrap gap-4">
                @php
                    $interviewTypes = [
                        'inPerson' => ['en' => 'In-person', 'sw' => 'Ana kwa ana'],
                        'phone' => ['en' => 'Phone', 'sw' => 'Simu'],
                        'radioFeedback' => ['en' => 'Radio Feedback', 'sw' => 'Maoni ya Redio'],
                        'communityForum' => ['en' => 'Community Forum', 'sw' => 'Jukwaa la Jamii'],
                    ];
                @endphp
                @foreach($interviewTypes as $key => $label)
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" wire:model="enumeration.interviewType.{{ $key }}" value="{{ $key }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span>{{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Njia ya Mahojiano:' : 'Interview Medium:' }}
            </label>
            <div class="flex flex-wrap gap-4">
                @php
                    $mediums = [
                        'individual' => ['en' => 'Individual', 'sw' => 'Binafsi'],
                        'group' => ['en' => 'Group (FGD)', 'sw' => 'Kikundi (FGD)'],
                        'kII' => ['en' => 'Key Informant Interview', 'sw' => 'Mahojiano na Mtu Muhimu'],
                    ];
                @endphp
                @foreach($mediums as $value => $label)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="enumeration.interviewMedium" value="{{ $value }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}</span>
                    </label>
                @endforeach
            </div>
        </div>
    </div>
</div>





<div class="bg-white shadow rounded-lg p-6 mt-8">
    <h3 class="text-lg font-semibold text-gray-800 mb-4">
        {{ session('locale') == 'sw' ? 'SEHEMU B: WASIFU WA MHOJIWA & MUKTADHA WA KIUCHUMI' : 'SECTION B: RESPONDENT PROFILE & SOCIO-ECONOMIC CONTEXT' }}
    </h3>

    <div class="space-y-6">
        <div>
            <label for="respondentName" class="block text-sm font-medium text-gray-700">
                {{ session('locale') == 'sw' ? 'Jina la Mhojiwa (Hiari)' : 'Respondent Name (Optional)' }}
            </label>
            <input id="respondentName" wire:model="profile.name" type="text"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="age" class="block text-sm font-medium text-gray-700">
                    {{ session('locale') == 'sw' ? 'Umri' : 'Age' }}
                </label>
                <input id="age" wire:model="profile.age" type="number"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    {{ session('locale') == 'sw' ? 'Jinsia' : 'Gender' }}
                </label>
                <div class="flex flex-wrap gap-4">
                    @php
                        $genders = [
                            'male' => ['en' => 'Male', 'sw' => 'Mwanaume'],
                            'female' => ['en' => 'Female', 'sw' => 'Mwanamke'],
                            'other' => ['en' => 'Other', 'sw' => 'Mwingine'],
                            'prefer_not_to_say' => ['en' => 'Prefer not to say', 'sw' => 'Napendelea kutoeleza'],
                        ];
                    @endphp
                    @foreach ($genders as $value => $label)
                        <label class="flex items-center space-x-2">
                            <input type="radio" wire:model="profile.gender" value="{{ $value }}"
                                   class="text-blue-600 focus:ring-blue-500 border-gray-300">
                            <span>{{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}</span>
                        </label>
                    @endforeach
                </div>
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Wajibu Mkuu' : 'Primary Role' }}
            </label>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @php
                    $roles = [
                        'Miner' => ['en' => 'Miner', 'sw' => 'Mchimbaji'],
                        'Processor' => ['en' => 'Processor', 'sw' => 'Msindikaji'],
                        'Trader' => ['en' => 'Trader', 'sw' => 'Mfanyabiashara'],
                        'Association Leader' => ['en' => 'Association Leader', 'sw' => 'Kiongozi wa Chama'],
                        'Government Official' => ['en' => 'Government Official', 'sw' => 'Afisa wa Serikali'],
                        'Community Member' => ['en' => 'Community Member', 'sw' => 'Mwanajamii'],
                        'Financial Institution' => ['en' => 'Financial Institution', 'sw' => 'Taasis ya Fedha'],
                    ];
                @endphp
                @foreach ($roles as $value => $label)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="profile.role" value="{{ $value }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}</span>
                    </label>
                @endforeach
                <div class="flex items-center space-x-2">
                    <input type="radio" wire:model="profile.role" value="Other"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>{{ session('locale') == 'sw' ? 'Nyinginezo:' : 'Other:' }}</span>
                    <input type="text" wire:model="profile.roleOther"
                           class="ml-2 block w-1/2 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Kiwango cha Elimu' : 'Education Level' }}
            </label>
            <div class="flex flex-wrap gap-4">
                @php
                    $levels = [
                        'Primary' => ['en' => 'Primary', 'sw' => 'Msingi'],
                        "O'Level" => ['en' => "O'Level", 'sw' => "Kidato cha Nne"],
                        "A'Level" => ['en' => "A'Level", 'sw' => "Kidato cha Sita"],
                        'Bachelors' => ['en' => 'Bachelors', 'sw' => 'Shahada'],
                        'Masters' => ['en' => 'Masters', 'sw' => 'Uzamili'],
                        'PhD' => ['en' => 'PhD', 'sw' => 'Uzamivu'],
                    ];
                @endphp
                @foreach ($levels as $value => $label)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="profile.education" value="{{ $value }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="dependents" class="block text-sm font-medium text-gray-700">
                    {{ session('locale') == 'sw' ? 'Idadi ya Wategemezi' : 'Number of Dependents' }}
                </label>
                <input id="dependents" wire:model="profile.dependents" type="number"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div>
                <label for="householdExpenditure" class="block text-sm font-medium text-gray-700">
                    {{ session('locale') == 'sw' ? 'Matumizi ya Kila Mwezi ya Kaya (TZS)' : 'Average Monthly Household Expenditure (TZS)' }}
                </label>
                <input id="householdExpenditure" wire:model="profile.householdExpenditure" type="number"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Vyanzo Vingine vya Mapato ya Kaya' : 'Other Sources of Household Income' }}
            </label>
            <div class="flex flex-wrap gap-4">
                @php
                    $sources = [
                        'Agriculture' => 'Kilimo',
                        'Livestock' => 'Mifugo',
                        'Informal business' => 'Biashara isiyo rasmi',
                        'Employment' => 'Ajira',
                        'None' => 'Hakuna',
                    ];
                @endphp
                @foreach ($sources as $value => $swLabel)
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" wire:model="profile.incomeSources.{{ Str::slug($value) }}" value="{{ $value }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span>{{ session('locale') == 'sw' ? $swLabel : $value }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Je, wewe au mwanafamilia ana ulemavu?' : 'Do you or any household member have a disability?' }}
            </label>
            <div class="flex flex-wrap gap-4">
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="profile.hasDisability" value="yes"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>{{ session('locale') == 'sw' ? 'Ndio' : 'Yes' }}</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="profile.hasDisability" value="no"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>{{ session('locale') == 'sw' ? 'Hapana' : 'No' }}</span>
                </label>
            </div>

            @if ($profile['hasDisability'] === 'yes')
                <div class="mt-2">
                    <label for="disabilityDetail" class="block text-sm font-medium text-gray-700">
                        {{ session('locale') == 'sw' ? 'Kama ndio, eleza' : 'If yes, specify' }}
                    </label>
                    <input id="disabilityDetail" wire:model="profile.disabilityDetail" type="text"
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            @endif
        </div>
    </div>
</div>






<div class="bg-white shadow rounded-lg p-6 mt-8">
    <h3 class="text-lg font-semibold text-gray-800 mb-4">
        {{ session('locale') == 'sw' ? 'SEHEMU C: HALI YA UENDESHAJI WA SHUGHULI ZA MADINI' : 'SECTION C: OPERATIONAL STATUS OF MINING ACTIVITY' }}
    </h3>

    <div class="space-y-6">
        <!-- Nature of Mining Work -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Aina ya Shughuli za Madini' : 'Nature of Mining Work' }}
            </label>
            <div class="flex flex-wrap gap-4">
                @foreach (['Gold', 'Tanzanite', 'Gemstones', 'Industrial Minerals', 'Salt', 'Construction Materials'] as $type)
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" wire:model="miningActivity.nature.{{ Str::slug($type) }}" value="{{ $type }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span>{{ $type }}</span>
                    </label>
                @endforeach
                <div class="flex items-center space-x-2">
                    <input type="checkbox" wire:model="miningActivity.nature.otherChecked" value="Other"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <span>{{ session('locale') == 'sw' ? 'Nyingine' : 'Other' }}</span>
                    <input type="text" wire:model="miningActivity.nature.other"
                           class="ml-2 block w-1/2 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            </div>
        </div>

        <!-- License Ownership and Status -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Umiliki na Hali ya Leseni' : 'License Ownership and Status' }}
            </label>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        {{ session('locale') == 'sw' ? 'Aina' : 'Type' }}
                    </label>
                    <div class="flex flex-wrap gap-4">
                        @foreach (['PML', 'Dealer', 'Aggregator', 'No License'] as $license)
                            <label class="flex items-center space-x-2">
                                <input type="radio" wire:model="miningActivity.licenseType" value="{{ $license }}"
                                       class="text-blue-600 focus:ring-blue-500 border-gray-300">
                                <span>{{ $license }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        {{ session('locale') == 'sw' ? 'Hali' : 'Status' }}
                    </label>
                    <div class="flex flex-wrap gap-4">
                        @foreach (['Valid', 'Expired', 'Application in Process'] as $status)
                            <label class="flex items-center space-x-2">
                                <input type="radio" wire:model="miningActivity.licenseStatus" value="{{ $status }}"
                                       class="text-blue-600 focus:ring-blue-500 border-gray-300">
                                <span>{{ $status }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Years in Operation -->
        <div>
            <label for="yearsOperation" class="block text-sm font-medium text-gray-700">
                {{ session('locale') == 'sw' ? 'Miaka ya Uendeshaji' : 'Years in Operation' }}
            </label>
            <input id="yearsOperation" wire:model="miningActivity.yearsInOperation" type="number"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <!-- Number of Workers -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="maleWorkers" class="block text-sm font-medium text-gray-700">
                    {{ session('locale') == 'sw' ? 'Idadi ya Wanaume' : 'Number of Male Workers' }}
                </label>
                <input id="maleWorkers" wire:model="miningActivity.workers.male" type="number"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div>
                <label for="femaleWorkers" class="block text-sm font-medium text-gray-700">
                    {{ session('locale') == 'sw' ? 'Idadi ya Wanawake' : 'Number of Female Workers' }}
                </label>
                <input id="femaleWorkers" wire:model="miningActivity.workers.female" type="number"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
        </div>

        <!-- Ownership Structure -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Muundo wa Umiliki' : 'Ownership Structure' }}
            </label>
            <div class="flex flex-wrap gap-4">
                @foreach (['Sole owner', 'Family', 'Cooperative', 'Joint venture', 'Employer', 'Informal group'] as $owner)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="miningActivity.ownership" value="{{ $owner }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ $owner }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Main Tools Used -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Zana Zinazotumika' : 'Main Tools Used' }}
            </label>
            <div class="flex flex-wrap gap-4">
                @foreach (['Manual', 'Powered machinery', 'Ball mill', 'Crushing plant', 'Mercury', 'Cyanide'] as $tool)
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" wire:model="miningActivity.tools.{{ Str::slug($tool) }}" value="{{ $tool }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span>{{ $tool }}</span>
                    </label>
                @endforeach
                <div class="flex items-center space-x-2">
                    <input type="checkbox" wire:model="miningActivity.tools.otherChecked" value="Other"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <span>{{ session('locale') == 'sw' ? 'Nyingine' : 'Other' }}</span>
                    <input type="text" wire:model="miningActivity.tools.other"
                           class="ml-2 block w-1/2 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            </div>
        </div>

        <!-- Production Output -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                {{ session('locale') == 'sw' ? 'Uzalishaji kwa Makadirio' : 'Production Output (Estimated)' }}
            </label>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="outputKg" class="block text-sm text-gray-600">
                        {{ session('locale') == 'sw' ? 'Kilo kwa mwezi' : 'Kg per month' }}
                    </label>
                    <input id="outputKg" wire:model="miningActivity.outputKg" type="number"
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div>
                    <label for="outputTons" class="block text-sm text-gray-600">
                        {{ session('locale') == 'sw' ? 'Tani kwa mwezi' : 'Tons per month' }}
                    </label>
                    <input id="outputTons" wire:model="miningActivity.outputTons" type="number"
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            </div>
        </div>
    </div>
</div>






<div class="bg-white shadow rounded-lg p-6 mt-8">
{{ session('locale') == 'sw' ? 'SEHEMU D: UPATIKANAJI WA FEDHA, UWEZO WA KUKOPA NA TAFAKURI YA HATARI ZA KIFEDHA' : 'SECTION D: FINANCIAL ACCESS, CREDITWORTHINESS & RISK PERCEPTION' }}

    <div class="space-y-6">
        <!-- Main Capital Sources -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Vyanzo Vikuu vya Mtaji (chagua vyote vinavyohusika)' : 'Main Capital Sources (tick all that apply)' }}
            </label>
            <div class="flex flex-wrap gap-4">
                @foreach (['Personal Savings', 'Informal Lending', 'Bank Loan', 'SACCO/MFI', 'Mobile Lending', 'Buyer Advance', 'Government Grant'] as $source)
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" wire:model="finance.capitalSources.{{ Str::slug($source) }}" value="{{ $source }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span>{{ $source }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Loan Application -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Je, umewahi kuomba mkopo kutoka taasisi ya kifedha?' : 'Have you ever applied for a loan from a financial institution?' }}
            </label>
            <div class="flex gap-6">
                @foreach (['yes' => 'Yes', 'no' => 'No'] as $value => $label)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="finance.appliedForLoan" value="{{ $value }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ session('locale') == 'sw' ? ($value == 'yes' ? 'Ndiyo' : 'Hapana') : $label }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Loan Application Outcome -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Ikiwa uliomba, matokeo yalikuwa nini?' : 'If applied, what was the outcome?' }}
            </label>
            <div class="flex flex-col sm:flex-row gap-6">
                @foreach (['Approved', 'Rejected', 'Pending', 'Not Applicable'] as $outcome)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="finance.loanOutcome" value="{{ $outcome }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ $outcome }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Barriers to Access -->
        <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Vikwazo vya Kupata Mkopo wa Benki (chagua vyote)' : 'Barriers to Accessing Bank Loan (tick all)' }}
            </label>
            <div class="flex flex-wrap gap-4">
                @foreach (['Collateral', 'Documentation', 'Interest Rates', 'Lack of Trust', 'Poor Credit History', 'Awareness'] as $barrier)
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" wire:model="finance.loanBarriers.{{ Str::slug($barrier) }}" value="{{ $barrier }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span>
                            {{ session('locale') == 'sw' ? match($barrier) {
                                'Collateral' => 'Dhamana',
                                'Documentation' => 'Nyaraka',
                                'Interest Rates' => 'Viwango vya riba',
                                'Lack of Trust' => 'Ukosefu wa kuaminika',
                                'Poor Credit History' => 'Historia mbaya ya mkopo',
                                'Awareness' => 'Uelewa',
                                default => $barrier
                            } : $barrier }}
                        </span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Bank Account -->
      <!-- Bank Account -->
        <div>

    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' ? 'Je, una akaunti hai ya benki?' : 'Do you have an active bank account?' }}
    </label>
    <div class="flex gap-6">
        @foreach (['yes' => 'Yes', 'no' => 'No'] as $value => $label)
            <label class="flex items-center space-x-2">
                <input type="radio" wire:model="finance.hasBankAccount" value="{{ $value }}"
                       class="text-blue-600 focus:ring-blue-500 border-gray-300">
                <span>{{ session('locale') == 'sw' ? ($value == 'yes' ? 'Ndiyo' : 'Hapana') : $label }}</span>
            </label>
        @endforeach
    </div>
</div>


        <!-- Financial Document Handling -->
        <div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' ? 'Je, unaweza kushughulikia nyaraka za kifedha (km fomu za mkopo)?' : 'Can you manage financial documents (e.g. loan forms)?' }}
    </label>
    <div class="flex gap-6">
        @foreach (['Yes', 'No', 'Somewhat'] as $answer)
            <label class="flex items-center space-x-2">
                <input type="radio" wire:model="finance.manageDocs" value="{{ strtolower($answer) }}"
                       class="text-blue-600 focus:ring-blue-500 border-gray-300">
                <span>
                    {{ session('locale') == 'sw' 
                        ? ($answer === 'Yes' ? 'Ndiyo' 
                            : ($answer === 'No' ? 'Hapana' : 'Kidogo')) 
                        : $answer 
                    }}
                </span>
            </label>
        @endforeach
    </div>
         </div>


        <!-- Loan Access Suggestions -->
        <div>
    <label for="loanSuggestions" class="block text-sm font-medium text-gray-700">
        {{ session('locale') == 'sw' ? 'Mapendekezo ya kuboresha upatikanaji wa mikopo' : 'Suggestions for improving access to loans' }}
    </label>
    <textarea id="loanSuggestions" wire:model="finance.loanSuggestions"
              class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
              rows="3"></textarea>
         </div>


        <!-- Creditworthiness -->
        <div class="border-t pt-4 mt-4">
    <h4 class="text-md font-semibold text-gray-800 mb-2">
        {{ session('locale') == 'sw' ? 'Uwezo wa Kukopa' : 'Creditworthiness' }}
    </h4>

    <div class="space-y-4">
        <!-- Outstanding debts/loans -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Je, una madeni au mikopo inayodaiwa?' : 'Outstanding debts/loans?' }}
            </label>
            <div class="flex gap-6">
                @foreach (['yes' => 'Yes', 'no' => 'No'] as $value => $label)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="finance.hasDebt" value="{{ $value }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ session('locale') == 'sw' ? ($value === 'yes' ? 'Ndiyo' : 'Hapana') : $label }}</span>
                    </label>
                @endforeach
            </div>
            @if ($finance['hasDebt'] === 'yes')
                <div class="mt-2">
                    <label for="debtSource" class="block text-sm font-medium text-gray-700">
                        {{ session('locale') == 'sw' ? 'Chanzo cha deni' : 'Source' }}
                    </label>
                    <input id="debtSource" wire:model="finance.debtSource" type="text"
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            @endif
        </div>

        <!-- Written records -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Je, unaandika rekodi za mapato/mauzo?' : 'Do you keep written records of income/sales?' }}
            </label>
            <div class="flex gap-6">
                @foreach (['yes' => 'Yes', 'no' => 'No'] as $value => $label)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="finance.keepRecords" value="{{ $value }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ session('locale') == 'sw' ? ($value === 'yes' ? 'Ndiyo' : 'Hapana') : $label }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Update frequency -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Mara ngapi unahuisha rekodi zako?' : 'Update frequency:' }}
            </label>
            <div class="flex gap-4">
                @foreach (['Daily', 'Weekly', 'Monthly', 'Rarely'] as $freq)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="finance.recordFrequency" value="{{ strtolower($freq) }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ session('locale') == 'sw' ? match($freq) {
                            'Daily' => 'Kila siku',
                            'Weekly' => 'Kila wiki',
                            'Monthly' => 'Kila mwezi',
                            'Rarely' => 'Mara chache',
                        } : $freq }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Monthly income -->
        <div>
            <label for="miningIncome" class="block text-sm font-medium text-gray-700">
                {{ session('locale') == 'sw' ? 'Mapato ya kila mwezi kutoka shughuli za madini (TZS)' : 'Estimated monthly mining income (TZS)' }}
            </label>
            <input id="miningIncome" wire:model="finance.monthlyIncome" type="number"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <!-- Collateral -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Mali zinazoweza kutumika kama dhamana (chagua vyote)' : 'Assets usable as collateral (tick all)' }}
            </label>
            <div class="flex flex-wrap gap-4">
                @foreach (['Land', 'Equipment', 'Vehicles', 'Savings', 'Minerals', 'None'] as $asset)
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" wire:model="finance.collateral.{{ Str::slug($asset) }}" value="{{ $asset }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span>{{ session('locale') == 'sw' ? match($asset) {
                            'Land' => 'Ardhi',
                            'Equipment' => 'Vifaa',
                            'Vehicles' => 'Magari',
                            'Savings' => 'Akiba',
                            'Minerals' => 'Madini',
                            'None' => 'Hakuna',
                        } : $asset }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Loan repayment history -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Historia ya urejeshaji wa mkopo' : 'Loan repayment history' }}
            </label>
            <div class="flex flex-col sm:flex-row gap-6">
                @foreach (['Fully repaid', 'Partially', 'Never', 'Not applicable'] as $repay)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="finance.repaymentHistory" value="{{ $repay }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ session('locale') == 'sw' ? match($repay) {
                            'Fully repaid' => 'Umerudishwa wote',
                            'Partially' => 'Umerudishwa sehemu',
                            'Never' => 'Haujawahi kurudishwa',
                            'Not applicable' => 'Haitumiki',
                        } : $repay }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Peer-guaranteed loan group -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Je, uko tayari kujiunga na kikundi cha mkopo chenye dhamana ya pamoja?' : 'Willing to join a peer-guaranteed loan group?' }}
            </label>
            <div class="flex gap-6">
                @foreach (['Yes', 'No', 'Maybe'] as $response)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="finance.peerLoanGroup" value="{{ strtolower($response) }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ session('locale') == 'sw' ? match($response) {
                            'Yes' => 'Ndiyo',
                            'No' => 'Hapana',
                            'Maybe' => 'Labda',
                        } : $response }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Savings group member -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Je, wewe ni mwanachama wa kikundi cha akiba/mikopo (km VICOBA)?' : 'Member of savings/loan group (e.g. VICOBA)?' }}
            </label>
            <div class="flex items-center space-x-4">
                @foreach (['yes' => 'Yes', 'no' => 'No'] as $value => $label)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="finance.savingsGroupMember" value="{{ $value }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ session('locale') == 'sw' ? ($value === 'yes' ? 'Ndiyo' : 'Hapana') : $label }}</span>
                    </label>
                @endforeach
                @if ($finance['savingsGroupMember'] === 'yes')
                    <input type="text" wire:model="finance.savingsGroupName"
                           class="ml-4 block w-1/2 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                           placeholder="{{ session('locale') == 'sw' ? 'Jina la kikundi' : 'Group name/type' }}">
                @endif
            </div>
        </div>
    </div>
</div>


        <!-- Financial Behavior & Risk Perception -->
      <!-- Financial Behavior & Risk Perception -->
<div class="border-t pt-4 mt-4">
    <h4 class="text-md font-semibold text-gray-800 mb-2">
        {{ session('locale') == 'sw' ? 'Tabia za Kifedha na Mtazamo wa Hatari' : 'Financial Behavior & Risk Perception' }}
    </h4>

    <div class="space-y-4">
        <!-- Saving Frequency -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Ni mara ngapi unaweka akiba ya mapato?' : 'How often do you save income?' }}
            </label>
            <div class="flex flex-wrap gap-4">
                @foreach (['Daily', 'Weekly', 'Monthly', 'Rarely', 'Never'] as $freq)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="finance.savingFrequency" value="{{ strtolower($freq) }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ session('locale') == 'sw' ? match($freq) {
                            'Daily' => 'Kila siku',
                            'Weekly' => 'Kila wiki',
                            'Monthly' => 'Kila mwezi',
                            'Rarely' => 'Mara chache',
                            'Never' => 'Hapana kamwe',
                        } : $freq }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Budget Use -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Je, unatumia bajeti?' : 'Do you use a budget?' }}
            </label>
            <div class="flex gap-6">
                @foreach (['Yes', 'No', 'Sometimes'] as $option)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="finance.useBudget" value="{{ strtolower($option) }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ session('locale') == 'sw' ? match($option) {
                            'Yes' => 'Ndiyo',
                            'No' => 'Hapana',
                            'Sometimes' => 'Wakati mwingine',
                        } : $option }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Digital Tools -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Je, unatumia zana za kifedha za kidijitali (km programu au benki ya simu)?' : 'Do you use digital financial tools (apps, mobile banking)?' }}
            </label>
            <div class="flex gap-6">
                @foreach (['yes' => 'Yes', 'no' => 'No'] as $value => $label)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="finance.useDigitalTools" value="{{ $value }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ session('locale') == 'sw' ? ($value === 'yes' ? 'Ndiyo' : 'Hapana') : $label }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Financial Risks -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                {{ session('locale') == 'sw' ? 'Ni hatari zipi za kifedha zinakutia wasiwasi zaidi?' : 'What financial risks concern you most?' }}
            </label>
            <div class="flex flex-wrap gap-4">
                @foreach (['Mineral price drops', 'Equipment failure', 'Theft', 'Loan repayment difficulty', 'Market access'] as $risk)
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" wire:model="finance.risks.{{ Str::slug($risk) }}" value="{{ $risk }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span>{{ session('locale') == 'sw' ? match($risk) {
                            'Mineral price drops' => 'Kuporomoka kwa bei ya madini',
                            'Equipment failure' => 'Hitilafu ya vifaa',
                            'Theft' => 'Wizi',
                            'Loan repayment difficulty' => 'Ugumu wa kulipa mkopo',
                            'Market access' => 'Upatikanaji wa soko',
                        } : $risk }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Debt Repayment Percentage -->
        <div>
            <label for="debtPercent" class="block text-sm font-medium text-gray-700">
                {{ session('locale') == 'sw' ? 'Asilimia ya mapato inayotumika kulipa madeni (%)' : 'Percentage of income spent on debt repayment (%)' }}
            </label>
            <input id="debtPercent" wire:model="finance.debtRepaymentPercent" type="number" min="0" max="100"
                   class="mt-1 block w-1/2 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
    </div>
</div>



    
</div>



<div class="bg-white shadow rounded-lg p-6 mt-8">

<h3 class="text-lg font-semibold text-gray-800 mb-4">
    {{ session('locale') == 'sw' ? 'SEHEMU E: UWEZO WA KIUFUNDI NA MAHITAJI YA MSAADA' : 'SECTION E: TECHNICAL CAPACITY AND SUPPORT NEEDS' }}
</h3>

    <div class="space-y-6">
      <!-- Training Received -->
<div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' ? 'Mafunzo Uliyopokea katika miaka 3 iliyopita (chagua yote yanayohusika)' : 'Training Received in the past 3 years (tick all that apply)' }}
    </label>
    <div class="flex flex-wrap gap-4">
        @foreach (['Mining methods', 'Safety', 'Environment', 'Business skills', 'Legal literacy', 'None'] as $training)
            <label class="flex items-center space-x-2">
                <input type="checkbox" wire:model="technical.trainingReceived.{{ Str::slug($training) }}" value="{{ $training }}"
                       class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                <span>
                    {{ session('locale') == 'sw' ? match($training) {
                        'Mining methods' => 'Mbinu za uchimbaji',
                        'Safety' => 'Usalama',
                        'Environment' => 'Mazingira',
                        'Business skills' => 'Ujuzi wa biashara',
                        'Legal literacy' => 'Uelewa wa kisheria',
                        'None' => 'Hakuna',
                        default => $training
                    } : $training }}
                </span>
            </label>
        @endforeach
    </div>
</div>


        <!-- Training Needs (priority 1–5) -->
        <div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' ? 'Mahitaji ya Mafunzo (kadiria kila moja kutoka 1–5)' : 'Training Needs (rate each from 1–5)' }}
    </label>
    <div class="space-y-4">
        @foreach ([
            'Safety & Health' => 'safetyHealth',
            'Equipment Operation' => 'equipmentOperation',
            'Environmental Handling' => 'environmentalHandling',
            'Business Management' => 'businessManagement',
            'Legal Literacy' => 'legalLiteracy',
            'Geological Knowledge' => 'geologicalKnowledge'
        ] as $label => $field)
            <div class="flex items-center gap-4">
                <label class="w-56 text-sm text-gray-700">
                    {{ session('locale') == 'sw' ? match($label) {
                        'Safety & Health' => 'Usalama na Afya',
                        'Equipment Operation' => 'Uendeshaji wa Vifaa',
                        'Environmental Handling' => 'Utunzaji wa Mazingira',
                        'Business Management' => 'Usimamizi wa Biashara',
                        'Legal Literacy' => 'Uelewa wa Kisheria',
                        'Geological Knowledge' => 'Ujuzi wa Jiolojia',
                        default => $label
                    } : $label }}
                </label>
                <select wire:model="technical.trainingNeeds.{{ $field }}"
                        class="w-24 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    <option value="">--</option>
                    @for ($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
        @endforeach
    </div>
</div>




      <!-- Tool Operation -->
<div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' ? 'Je, unaweza kutumia au kutengeneza zana za uchimbaji mwenyewe?' : 'Can you operate or repair mining tools yourself?' }}
    </label>
    <div class="flex gap-6">
        @foreach (['yes' => 'Yes', 'no' => 'No', 'partially' => 'Partially'] as $value => $label)
            <label class="flex items-center space-x-2">
                <input type="radio" wire:model="technical.toolOperation" value="{{ $value }}"
                       class="text-blue-600 focus:ring-blue-500 border-gray-300">
                <span>
                    {{ session('locale') == 'sw' ? match($value) {
                        'yes' => 'Ndiyo',
                        'no' => 'Hapana',
                        'partially' => 'Kidogo',
                    } : $label }}
                </span>
            </label>
        @endforeach
    </div>
</div>

<!-- Tool Upgrades -->
<div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' ? 'Je, umeboresha zana zozote katika miaka 2 iliyopita?' : 'Have you upgraded any tools in the last 2 years?' }}
    </label>
    <div class="flex gap-6">
        @foreach (['yes' => 'Yes', 'no' => 'No'] as $value => $label)
            <label class="flex items-center space-x-2">
                <input type="radio" wire:model="technical.toolUpgrade" value="{{ $value }}"
                       class="text-blue-600 focus:ring-blue-500 border-gray-300">
                <span>{{ session('locale') == 'sw' ? ($value === 'yes' ? 'Ndiyo' : 'Hapana') : $label }}</span>
            </label>
        @endforeach
    </div>

    @if ($technical['toolUpgrade'] === 'no')
        <div class="mt-2">
            <label for="noUpgradeReason" class="block text-sm font-medium text-gray-700">
                {{ session('locale') == 'sw' ? 'Ikiwa hapana, kwa nini?' : 'If no, why?' }}
            </label>
            <input id="noUpgradeReason" wire:model="technical.noUpgradeReason" type="text"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
    @endif
</div>


        <!-- Technical Support Received -->
        <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
    {{ session('locale') == 'sw' ? 'Je, umewahi kupata msaada wa kiufundi hapo awali?' : 'Have you received technical support before?' }}
            </label>
            <div class="flex gap-6">
                @foreach (['yes' => 'Yes', 'no' => 'No'] as $value => $label)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="technical.receivedSupport" value="{{ $value }}"
                            class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ session('locale') == 'sw' ? ($value === 'yes' ? 'Ndiyo' : 'Hapana') : $label }}</span>
                    </label>
                @endforeach
            </div>


            @if ($technical['receivedSupport'] === 'yes')
    <div class="mt-2">
        <label class="block text-sm font-medium text-gray-700 mb-2">
            {{ session('locale') == 'sw' ? 'Imetolewa na:' : 'From:' }}
        </label>
        <div class="flex flex-wrap gap-4">
            @foreach (['Government', 'NGO', 'Private Sector', 'Other'] as $source)
                <label class="flex items-center space-x-2">
                    <input type="checkbox" wire:model="technical.supportFrom.{{ Str::slug($source) }}" value="{{ $source }}"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <span>{{ session('locale') == 'sw' ? match($source) {
                        'Government' => 'Serikali',
                        'NGO' => 'Asasi zisizo za kiserikali (NGO)',
                                'Private Sector' => 'Sekta binafsi',
                                'Other' => 'Nyingine',
                            } : $source }}</span>
                        </label>
                    @endforeach
                </div>
            </div>
        @endif

        </div>
    </div>
</div>








<div class="bg-white shadow rounded-lg p-6 mt-8">
<h3 class="text-lg font-semibold text-gray-800 mb-4">
    {{ session('locale') == 'sw' ? 'SEHEMU F: UTUNZAJI WA MAZINGIRA NA UZINGATIAJI WA SHERIA' : 'SECTION F: ENVIRONMENTAL PRACTICES & COMPLIANCE' }}
</h3>

    <div class="space-y-6">
        <!-- Awareness of Guidelines -->
        <div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' ? 'Je, unafahamu miongozo ya mazingira kwa wachimbaji?' : 'Are you aware of environmental guidelines for miners?' }}
    </label>
       <div class="flex gap-6">
         @foreach (['yes' => 'Yes', 'no' => 'No'] as $value => $label)
            <label class="flex items-center space-x-2">
                <input type="radio" wire:model="environmental.awareness" value="{{ $value }}"
                       class="text-blue-600 focus:ring-blue-500 border-gray-300">
                <span>{{ session('locale') == 'sw' ? ($value === 'yes' ? 'Ndiyo' : 'Hapana') : $label }}</span>
                    </label>
                @endforeach
            </div>
        </div>


        <!-- Practices Followed -->
        <div>
    <label for="practicesFollowed" class="block text-sm font-medium text-gray-700">
        {{ session('locale') == 'sw' ? 'Je, unafuata taratibu gani za kimazingira?' : 'What practices do you follow?' }}
    </label>
       <textarea id="practicesFollowed" wire:model="environmental.practices"
              class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
              rows="3">
            </textarea>
        </div>


<!-- Use of Mercury/Cyanide -->
<div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' ? 'Je, unatumia zebaki au sianidi?' : 'Do you use mercury or cyanide?' }}
    </label>
    <div class="flex flex-wrap gap-6">
        @foreach (['Mercury', 'Cyanide', 'None'] as $chemical)
            <label class="flex items-center space-x-2">
                <input type="checkbox" wire:model="environmental.chemicals.{{ strtolower($chemical) }}" value="{{ $chemical }}"
                       class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                <span>{{ session('locale') == 'sw' ? match($chemical) {
                    'Mercury' => 'Zebaki',
                    'Cyanide' => 'Sianidi',
                    'None' => 'Hakuna',
                } : $chemical }}</span>
            </label>
        @endforeach
    </div>
</div>


<!-- Inspection History -->
<div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' ? 'Je, umewahi kukaguliwa na afisa mazingira wa serikali?' : 'Ever been inspected by a government environmental officer?' }}
    </label>
    <div class="flex gap-6">
        @foreach (['yes' => 'Yes', 'no' => 'No'] as $value => $label)
            <label class="flex items-center space-x-2">
                <input type="radio" wire:model="environmental.inspected" value="{{ $value }}"
                       class="text-blue-600 focus:ring-blue-500 border-gray-300">
                <span>{{ session('locale') == 'sw' ? ($value === 'yes' ? 'Ndiyo' : 'Hapana') : $label }}</span>
            </label>
        @endforeach
    </div>
</div>


<!-- Restoration Efforts -->
<div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' ? 'Je, unarejesha ardhi baada ya kuchimba?' : 'Do you restore mined land after use?' }}
    </label>
    <div class="flex gap-6">
        @foreach (['Yes', 'No', 'Sometimes'] as $option)
            <label class="flex items-center space-x-2">
                <input type="radio" wire:model="environmental.landRestoration" value="{{ strtolower($option) }}"
                       class="text-blue-600 focus:ring-blue-500 border-gray-300">
                <span>
                    {{ session('locale') == 'sw' ? match($option) {
                        'Yes' => 'Ndiyo',
                        'No' => 'Hapana',
                        'Sometimes' => 'Wakati mwingine',
                    } : $option }}
                </span>
            </label>
        @endforeach
    </div>
</div>




        <!-- Climate Impacts -->
        <div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' ? 'Je, umewahi kuathiriwa na athari za mabadiliko ya tabianchi (km mafuriko)?' : 'Experienced climate-related impacts (e.g. floods)?' }}
    </label>
    <div class="flex gap-6">
        @foreach (['yes' => 'Yes', 'no' => 'No'] as $value => $label)
            <label class="flex items-center space-x-2">
                <input type="radio" wire:model="environmental.climateImpact" value="{{ $value }}"
                       class="text-blue-600 focus:ring-blue-500 border-gray-300">
                <span>{{ session('locale') == 'sw' ? ($value === 'yes' ? 'Ndiyo' : 'Hapana') : $label }}</span>
            </label>
        @endforeach
    </div>

    @if ($environmental['climateImpact'] === 'yes')
        <div class="mt-2">
            <label for="climateType" class="block text-sm font-medium text-gray-700">
                {{ session('locale') == 'sw' ? 'Aina ya athari' : 'Type' }}
            </label>
            <input id="climateType" wire:model="environmental.climateType" type="text"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
    @endif
</div>



    </div>
</div>





<div class="bg-white shadow rounded-lg p-6 mt-8">

<h3 class="text-lg font-semibold text-gray-800 mb-4">
    {{ session('locale') == 'sw' ? 'SEHEMU G: MAHUSIANO YA JAMII NA MASUALA YA KIJINSIA' : 'SECTION G: COMMUNITY & GENDER DYNAMICS' }}
</h3>

    <div class="space-y-6">
        <!-- Community Impact -->
       
        <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
    {{ session('locale') == 'sw' ? 'Shughuli za uchimbaji zinaathiri vipi jamii yako?' : 'How does mining affect your community?' }}
</label>
<div class="flex gap-6">
    @foreach (['Positively', 'Negatively', 'Mixed'] as $impact)
        <label class="flex items-center space-x-2">
            <input type="radio" wire:model="community.impact" value="{{ strtolower($impact) }}"
                   class="text-blue-600 focus:ring-blue-500 border-gray-300">
            <span>{{ session('locale') == 'sw' ? match($impact) {
                'Positively' => 'Kwa njia chanya',
                'Negatively' => 'Kwa njia hasi',
                'Mixed' => 'Mchanganyiko',
            } : $impact }}</span>
        </label>
    @endforeach
</div>


<div class="mt-2">
    <label for="impactExplain" class="block text-sm font-medium text-gray-700">
        {{ session('locale') == 'sw' ? 'Eleza' : 'Explain' }}
    </label>
    <textarea id="impactExplain" wire:model="community.impactExplanation"
              class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
              rows="2"></textarea>
</div>



        </div>

        <!-- Women Involvement -->
        <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
    {{ session('locale') == 'sw' ? 'Je, wanawake wanashiriki katika shughuli za uchimbaji hapa?' : 'Are women involved in mining here?' }}
</label>
<div class="flex gap-6">
    @foreach (['yes' => 'Yes', 'no' => 'No'] as $value => $label)
        <label class="flex items-center space-x-2">
            <input type="radio" wire:model="community.womenInvolved" value="{{ $value }}"
                   class="text-blue-600 focus:ring-blue-500 border-gray-300">
            <span>{{ session('locale') == 'sw' ? ($value === 'yes' ? 'Ndiyo' : 'Hapana') : $label }}</span>
        </label>
    @endforeach
</div>


@if ($community['womenInvolved'] === 'yes')
    <div class="mt-2">
        <label class="block text-sm font-medium text-gray-700 mb-2">
            {{ session('locale') == 'sw' ? 'Majukumu (chagua yote yanayohusika)' : 'Roles (tick all that apply)' }}
        </label>
        <div class="flex flex-wrap gap-4">
            @foreach (['Digging', 'Processing', 'Sorting', 'Trading', 'Admin'] as $role)
                <label class="flex items-center space-x-2">
                    <input type="checkbox" wire:model="community.womenRoles.{{ Str::slug($role) }}" value="{{ $role }}"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <span>{{ session('locale') == 'sw' ? match($role) {
                        'Digging' => 'Kuchimba',
                        'Processing' => 'Kuchakata',
                        'Sorting' => 'Kuchambua',
                        'Trading' => 'Kufanya biashara',
                        'Admin' => 'Usimamizi',
                    } : $role }}</span>
                </label>
            @endforeach
        </div>
    </div>
@endif



        </div>

     <!-- Conflict Existence -->
<div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' ? 'Je, kuna migogoro inayohusiana na uchimbaji katika eneo hili?' : 'Conflicts related to mining in the area?' }}
    </label>
    <div class="flex gap-6">
        @foreach (['yes' => 'Yes', 'no' => 'No'] as $value => $label)
            <label class="flex items-center space-x-2">
                <input type="radio" wire:model="community.hasConflict" value="{{ $value }}"
                       class="text-blue-600 focus:ring-blue-500 border-gray-300">
                <span>{{ session('locale') == 'sw' ? ($value === 'yes' ? 'Ndiyo' : 'Hapana') : $label }}</span>
            </label>
        @endforeach
    </div>

    @if ($community['hasConflict'] === 'yes')
        <div class="mt-2">
            <label for="conflictNature" class="block text-sm font-medium text-gray-700">
                {{ session('locale') == 'sw' ? 'Aina ya mgogoro' : 'Nature of conflict' }}
            </label>
            <input id="conflictNature" wire:model="community.conflictNature" type="text"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
    @endif
</div>


        <!-- Inclusiveness & Peace -->
        <div>
    <label for="inclusivenessSuggestions" class="block text-sm font-medium text-gray-700">
        {{ session('locale') == 'sw' ? 'Je, ni kwa jinsi gani shughuli za uchimbaji zinaweza kuwa shirikishi na zenye amani zaidi?' : 'How can mining be more inclusive and peaceful?' }}
    </label>
    <textarea id="inclusivenessSuggestions" wire:model="community.inclusivenessSuggestions"
              class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
              rows="3"></textarea>
</div>


    </div>
</div>





<div class="bg-white shadow rounded-lg p-6 mt-8">
<h3 class="text-lg font-semibold text-gray-800 mb-4">
    {{ session('locale') == 'sw' ? 'SEHEMU H: UFAHAMU WA SERA, IMANI NA UTAYARI WA MABORESHO' : 'SECTION H: POLICY INSIGHT, TRUST & REFORM READINESS' }}
</h3>

    <div class="space-y-6">
    <div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' ? 'Je, unaamini taasisi hizi? (Kadiria 1–5)' : 'Do you trust these institutions? (Rate 1–5)' }}
    </label>
    <div class="space-y-3">
        @foreach ([
            'Mining Commission' => 'miningCommission',
            'Local Government' => 'localGovernment',
            'Banks/Financial Institutions' => 'banks',
            'Large-scale Miners' => 'largeMiners',
            'Miners’ Associations' => 'minersAssociations'
        ] as $label => $field)
            <div class="flex items-center gap-4">
                <label class="w-56 text-sm text-gray-700">
                    {{ session('locale') == 'sw' ? match($label) {
                        'Mining Commission' => 'Tume ya Madini',
                        'Local Government' => 'Serikali za Mitaa',
                        'Banks/Financial Institutions' => 'Benki/Taasisi za Kifedha',
                        'Large-scale Miners' => 'Wachimbaji wa Kiwango Kikubwa',
                        'Miners’ Associations' => 'Vyama vya Wachimbaji',
                    } : $label }}
                </label>
                <select wire:model="policy.trustLevels.{{ $field }}"
                        class="w-24 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    <option value="">--</option>
                    @for ($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
        @endforeach
    </div>
</div>


        <!-- Awareness of Gov Support -->
<div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' ? 'Je, unafahamu mipango ya serikali ya kuwasaidia wachimbaji?' : 'Are you aware of government support programs for miners?' }}
    </label>
    <div class="flex gap-6">
        @foreach (['yes' => 'Yes', 'no' => 'No'] as $value => $label)
            <label class="flex items-center space-x-2">
                <input type="radio" wire:model="policy.govSupportAwareness" value="{{ $value }}"
                       class="text-blue-600 focus:ring-blue-500 border-gray-300">
                <span>{{ session('locale') == 'sw' ? ($value === 'yes' ? 'Ndiyo' : 'Hapana') : $label }}</span>
            </label>
        @endforeach
    </div>

    @if ($policy['govSupportAwareness'] === 'yes')
        <div class="mt-2">
            <label for="govSupportExamples" class="block text-sm font-medium text-gray-700">
                {{ session('locale') == 'sw' ? 'Taja mifano' : 'Examples' }}
            </label>
            <input id="govSupportExamples" wire:model="policy.govSupportExamples" type="text"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
    @endif
</div>

<!-- Policy Bias Perception -->
<div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' ? 'Je, unadhani sera zinaunga mkono wachimbaji wakubwa zaidi ya wadogo?' : 'Do you think policies favor large-scale miners over small ones?' }}
    </label>
    <div class="flex gap-6">
        @foreach (['Yes', 'No', 'Not sure'] as $option)
            <label class="flex items-center space-x-2">
                <input type="radio" wire:model="policy.policyBias" value="{{ strtolower($option) }}"
                       class="text-blue-600 focus:ring-blue-500 border-gray-300">
                <span>{{ session('locale') == 'sw' ? match($option) {
                    'Yes' => 'Ndiyo',
                    'No' => 'Hapana',
                    'Not sure' => 'Sina uhakika',
                } : $option }}</span>
            </label>
        @endforeach
    </div>
</div>

<!-- Willingness to Pay Tax -->
<div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' ? 'Je, uko tayari kulipa kodi rasmi endapo itahusishwa na huduma bora?' : 'Would you support paying formal tax if linked to better services?' }}
    </label>
    <div class="flex gap-6">
        @foreach (['Yes', 'No', 'Maybe'] as $option)
            <label class="flex items-center space-x-2">
                <input type="radio" wire:model="policy.payTaxForServices" value="{{ strtolower($option) }}"
                       class="text-blue-600 focus:ring-blue-500 border-gray-300">
                <span>{{ session('locale') == 'sw' ? match($option) {
                    'Yes' => 'Ndiyo',
                    'No' => 'Hapana',
                    'Maybe' => 'Labda',
                } : $option }}</span>
            </label>
        @endforeach
    </div>
</div>

<!-- Reform Suggestions -->
<div>
    <label for="reformSuggestions" class="block text-sm font-medium text-gray-700">
        {{ session('locale') == 'sw' ? 'Ni mabadiliko gani yangeboreshwa kwenye sekta ya madini?' : 'What reforms or changes would improve the mining sector?' }}
    </label>
    <textarea id="reformSuggestions" wire:model="policy.reformSuggestions"
              class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
              rows="3"></textarea>
</div>



    </div>
</div>




<div class="bg-white shadow rounded-lg p-6 mt-8">
<h3 class="text-lg font-semibold text-gray-800 mb-4">
    {{ session('locale') == 'sw' ? 'SEHEMU I: MAONI KUHUSU MABORESHO YANAYOPENDEKEZWA' : 'SECTION I: FEEDBACK ON PROPOSED REFORMS' }}
</h3>

    <div class="space-y-6">
        <!-- Awareness of Reforms -->
<div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' ? 'Je, umewahi kusikia kuhusu mapendekezo ya Benki ya Wachimbaji au Mfuko wa Taifa?' : 'Have you heard about the proposed Miners’ Bank or Sovereign Fund?' }}
    </label>
    <div class="flex gap-6">
        @foreach (['yes' => 'Yes', 'no' => 'No'] as $value => $label)
            <label class="flex items-center space-x-2">
                <input type="radio" wire:model="reformFeedback.heardOfProposals" value="{{ $value }}"
                       class="text-blue-600 focus:ring-blue-500 border-gray-300">
                <span>{{ session('locale') == 'sw' ? ($value === 'yes' ? 'Ndiyo' : 'Hapana') : $label }}</span>
            </label>
        @endforeach
    </div>
</div>

<!-- Support Level -->
<div>
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ session('locale') == 'sw' ? 'Je, unaunga mkono mapendekezo haya?' : 'Do you support these proposals?' }}
    </label>
    <div class="flex flex-wrap gap-4">
        @foreach (['Strongly Support', 'Support', 'Neutral', 'Oppose'] as $option)
            <label class="flex items-center space-x-2">
                <input type="radio" wire:model="reformFeedback.supportLevel" value="{{ strtolower(str_replace(' ', '_', $option)) }}"
                       class="text-blue-600 focus:ring-blue-500 border-gray-300">
                <span>{{ session('locale') == 'sw' ? match($option) {
                    'Strongly Support' => 'Naunga mkono kwa nguvu',
                    'Support' => 'Naunga mkono',
                    'Neutral' => 'Sina upande',
                    'Oppose' => 'Napingana nayo',
                } : $option }}</span>
            </label>
        @endforeach
    </div>
</div>

<!-- Why or Why Not -->
<div>
    <label for="reformReason" class="block text-sm font-medium text-gray-700">
        {{ session('locale') == 'sw' ? 'Kwa nini au kwa nini hapana?' : 'Why or why not?' }}
    </label>
    <textarea id="reformReason" wire:model="reformFeedback.reasons"
              class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
              rows="3"></textarea>
</div>

<!-- Suggestions -->
<div>
    <label for="policySuggestions" class="block text-sm font-medium text-gray-700">
        {{ session('locale') == 'sw' ? 'Mapendekezo ya sera au huduma bora kwa wachimbaji wadogo' : 'Suggestions for better policies or services for small miners' }}
    </label>
    <textarea id="policySuggestions" wire:model="reformFeedback.policySuggestions"
              class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
              rows="3"></textarea>
</div>

<!-- Enumerator Observations -->
<div>
    <label for="enumeratorObservations" class="block text-sm font-medium text-gray-700">
        {{ session('locale') == 'sw' ? 'Maoni ya Mhoji (Hiari)' : 'Enumerator Observations (Optional)' }}
    </label>
    <textarea id="enumeratorObservations" wire:model="reformFeedback.enumeratorNotes"
              class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
              rows="3"></textarea>
</div>


    </div>
</div>




<div class="mt-8 flex justify-end">
<button wire:click="save"
        class="px-6 py-2 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
    {{ session('locale') == 'sw' ? 'Wasilisha Fomu' : 'Submit Form' }}
</button>


    @if (session()->has('success'))
        <p class="mt-2 text-green-600 text-sm">{{ session('success') }}</p>
    @endif
</div>









</div>

</div>



</div>
