<div>
   

{{-- resources/views/livewire/government-data-form.blade.php --}}
<div class="bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mb-10 text-center">
    <h1 class="text-3xl font-bold text-gray-900 sm:text-4xl">
        @if(session('locale') == 'sw')
            Zana ya Uchambuzi wa Taarifa za Serikali
        @else
            Government Data Profiling Tool
        @endif
    </h1>
    <p class="mt-3 text-xl text-gray-500">
        @if(session('locale') == 'sw')
            Kikosi Kazi Maalum cha Kuwainua Wachimbaji Wadogo wa Madini Tanzania
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

        <form wire:submit.prevent="submit" class="space-y-12">
            <!-- Section A: Official Identification -->
           <!-- Section A: Official Identification -->
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        @if(session('locale') == 'sw')
                            SEHEMU A: UTAMBULISHO WA AFISA
                        @else
                            SECTION A: OFFICIAL IDENTIFICATION
                        @endif
                    </h3>
                </div>
                <div class="px-4 py-5 sm:p-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="fullName" class="block text-sm font-medium text-gray-700">
                            @if(session('locale') == 'sw')
                                Jina Kamili la Afisa
                            @else
                                Full Name of Official
                            @endif
                        </label>
                        <div class="mt-1">
                            <input type="text" wire:model="fullName" id="fullName" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            @error('fullName') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="position" class="block text-sm font-medium text-gray-700">
                            @if(session('locale') == 'sw')
                                Cheo / Nafasi
                            @else
                                Position/Title
                            @endif
                        </label>
                        <div class="mt-1">
                            <input type="text" wire:model="position" id="position" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            @error('position') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="institution" class="block text-sm font-medium text-gray-700">
                            @if(session('locale') == 'sw')
                                Taasisi / Idara
                            @else
                                Institution/Department
                            @endif
                        </label>
                        <div class="mt-1">
                            <input type="text" wire:model="institution" id="institution" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            @error('institution') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="region" class="block text-sm font-medium text-gray-700">
                            @if(session('locale') == 'sw')
                                Mkoa
                            @else
                                Region
                            @endif
                        </label>
                        <div class="mt-1">
                            <input type="text" wire:model="region" id="region" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            @error('region') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="districts" class="block text-sm font-medium text-gray-700">
                            @if(session('locale') == 'sw')
                                Wilaya Zinazohusika
                            @else
                                District(s) Covered
                            @endif
                        </label>
                        <div class="mt-1">
                            <input type="text" wire:model="districts" id="districts" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label class="block text-sm font-medium text-gray-700">
                            @if(session('locale') == 'sw')
                                Taarifa za Ngazi ya Kata Zinapatikana?
                            @else
                                Ward-Level Data Available?
                            @endif
                        </label>
                        <div class="mt-1 flex items-center">
                            <div class="flex items-center">
                                <input id="wardYes" wire:model="wardLevelDataAvailable" type="radio" value="1" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                <label for="wardYes" class="ml-2 block text-sm text-gray-700">
                                    @if(session('locale') == 'sw') Ndiyo @else Yes @endif
                                </label>
                            </div>
                            <div class="flex items-center ml-6">
                                <input id="wardNo" wire:model="wardLevelDataAvailable" type="radio" value="0" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                <label for="wardNo" class="ml-2 block text-sm text-gray-700">
                                    @if(session('locale') == 'sw') Hapana @else No @endif
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="contactInfo" class="block text-sm font-medium text-gray-700">
                            @if(session('locale') == 'sw')
                                Mawasiliano (Barua Pepe / Simu)
                            @else
                                Email / Phone Contact
                            @endif
                        </label>
                        <div class="mt-1">
                            <input type="text" wire:model="contactInfo" id="contactInfo" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="submissionDate" class="block text-sm font-medium text-gray-700">
                            @if(session('locale') == 'sw')
                                Tarehe ya Kuwasilisha
                            @else
                                Date of Submission
                            @endif
                        </label>
                        <div class="mt-1">
                            <input type="date" wire:model="submissionDate" id="submissionDate" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>
                </div>
            </div>




           <!-- Section B: Quantitative Stakeholder Enumeration -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            @if(session('locale') == 'sw')
                SEHEMU B: HESABU YA WADAU WA MADINI
            @else
                SECTION B: QUANTITATIVE STAKEHOLDER ENUMERATION
            @endif
        </h3>
        <p class="mt-1 text-sm text-gray-500">
            @if(session('locale') == 'sw')
                Toa idadi na sifa za kila kundi la wadau. Eleza kama takwimu ni makadirio au kutoka kwenye kumbukumbu rasmi.
            @else
                Provide counts and characteristics for each stakeholder group. Indicate if figures are approximate or based on records.
            @endif
        </p>
    </div>

    <div class="px-4 py-5 sm:p-6 overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        @if(session('locale') == 'sw') Kundi la Wadau @else Stakeholder Category @endif
                    </th>
                    <th class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        @if(session('locale') == 'sw') Jumla @else Total Count @endif
                    </th>
                    <th class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        @if(session('locale') == 'sw') % Wenye Leseni @else % Licensed @endif
                    </th>
                    <th class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        @if(session('locale') == 'sw') % Inayoongozwa na Wanawake @else % Women-Led @endif
                    </th>
                    <th class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        @if(session('locale') == 'sw') % Inayoongozwa na Vijana @else % Youth-Led @endif
                    </th>
                    <th class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        @if(session('locale') == 'sw') % Hai @else % Active @endif
                    </th>
                    <th class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        @if(session('locale') == 'sw') Kata Zilizofunikwa (#) @else Ward Coverage (#) @endif
                    </th>
                    <th class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        @if(session('locale') == 'sw') Chanzo cha Taarifa @else Data Source @endif
                    </th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
                <!-- Individual Small-Scale Miners -->
                <tr>
                    <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        @if(session('locale') == 'sw') Wachimbaji Binafsi Wadogo @else Individual Small-Scale Miners @endif
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        <input type="number" wire:model="stakeholders.individualMiners.count" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        <input type="number" min="0" max="100" wire:model="stakeholders.individualMiners.licensed" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        <input type="number" min="0" max="100" wire:model="stakeholders.individualMiners.womenLed" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        <input type="number" min="0" max="100" wire:model="stakeholders.individualMiners.youthLed" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        <input type="number" min="0" max="100" wire:model="stakeholders.individualMiners.active" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        <input type="number" wire:model="stakeholders.individualMiners.wardCoverage" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        <input type="text" wire:model="stakeholders.individualMiners.dataSource" placeholder="@if(session('locale') == 'sw') mfano: rejesta, makadirio @else e.g. registry, estimate @endif" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </td>
                </tr>

                <!-- Mining Cooperatives -->
                <tr>
                    <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        @if(session('locale') == 'sw') Vyama vya Ushirika wa Madini @else Mining Cooperatives @endif
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        <input type="number" wire:model="stakeholders.miningCooperatives.count" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        <input type="number" min="0" max="100" wire:model="stakeholders.miningCooperatives.licensed" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        <input type="number" min="0" max="100" wire:model="stakeholders.miningCooperatives.womenLed" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        <input type="number" min="0" max="100" wire:model="stakeholders.miningCooperatives.youthLed" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        <input type="number" min="0" max="100" wire:model="stakeholders.miningCooperatives.active" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        <input type="number" wire:model="stakeholders.miningCooperatives.wardCoverage" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </td>
                    <td class="px-3 py-4 whitespace-nowrap">
                        <input type="text" wire:model="stakeholders.miningCooperatives.dataSource" placeholder="@if(session('locale') == 'sw') mfano: rejesta, makadirio @else e.g. registry, estimate @endif" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>



       <!-- Section C: Mining Operational Characteristics -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            @if(session('locale') == 'sw')
                SEHEMU C: TABIA ZA UENDESHAJI WA SHUGHULI ZA MADINI
            @else
                SECTION C: MINING OPERATIONAL CHARACTERISTICS
            @endif
        </h3>
    </div>
    <div class="px-4 py-5 sm:p-6">

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">
                @if(session('locale') == 'sw') Madini Makuu Yanayochimbwa (chagua yote yanayohusika): @else Main Minerals Extracted (tick all that apply): @endif
            </label>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @php
                    $minerals = [
                        'gold' => ['en' => 'Gold', 'sw' => 'Dahabu'],
                        'tanzanite' => ['en' => 'Tanzanite', 'sw' => 'Tanzanite'],
                        'gemstones' => ['en' => 'Gemstones', 'sw' => 'Vito vya thamani'],
                        'salt' => ['en' => 'Salt', 'sw' => 'Chumvi'],
                        'industrialMinerals' => ['en' => 'Industrial Minerals', 'sw' => 'Madini ya Viwandani'],
                        'constructionMaterials' => ['en' => 'Construction Materials', 'sw' => 'Vifaa vya Ujenzi'],
                        'other' => ['en' => 'Other', 'sw' => 'Nyinginezo'],
                    ];
                @endphp
                @foreach ($minerals as $key => $label)
                    <div class="flex items-center">
                        <input id="mineral{{ ucfirst($key) }}" wire:model="mineralsExtracted.{{ $key }}" type="checkbox"
                            class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                        <label for="mineral{{ ucfirst($key) }}" class="ml-2 block text-sm text-gray-700">
                            {{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}
                        </label>
                    </div>
                @endforeach
                @if($mineralsExtracted['other'])
                    <div>
                        <input type="text" wire:model="otherMineralType"
                            placeholder="{{ session('locale') == 'sw' ? 'Taja nyinginezo' : 'Specify other' }}"
                            class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                @endif
            </div>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">
                @if(session('locale') == 'sw') Makadirio ya Asilimia kwa Aina ya Uendeshaji: @else Estimated Share of Mining Operation Types: @endif
            </label>
            @php
                $operations = [
                    'individualMiners' => ['en' => 'Individual Miners (%)', 'sw' => 'Wachimbaji Binafsi (%)'],
                    'cooperatives' => ['en' => 'Cooperatives (%)', 'sw' => 'Vyama vya Ushirika (%)'],
                    'informalGroups' => ['en' => 'Informal Groups (%)', 'sw' => 'Makundi Yasiyo Rasmi (%)'],
                    'jointVentures' => ['en' => 'Joint Ventures (%)', 'sw' => 'Ubia wa Kibiashara (%)'],
                    'largeScalePartnerships' => ['en' => 'Large-Scale Partnerships (%)', 'sw' => 'Ubia Mkubwa wa Biashara (%)'],
                ];
            @endphp
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach ($operations as $key => $label)
                    <div>
                        <label for="operation{{ ucfirst($key) }}" class="block text-sm text-gray-700">
                            {{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}
                        </label>
                        <input type="number" min="0" max="100" wire:model="operationTypes.{{ $key }}"
                            id="operation{{ ucfirst($key) }}"
                            class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">
                @if(session('locale') == 'sw') Zana/Teknolojia Zinazotumika (chagua zote): @else Common Tools/Technologies Used (tick all that apply): @endif
            </label>
            @php
                $tools = [
                    'manualTools' => ['en' => 'Manual Tools', 'sw' => 'Zana za Mikono'],
                    'poweredCrushers' => ['en' => 'Powered Crushers', 'sw' => 'Mashine za Kusaga'],
                    'ballMills' => ['en' => 'Ball Mills', 'sw' => 'Ball Mills'],
                    'mercury' => ['en' => 'Mercury', 'sw' => 'Zebaki'],
                    'cyanide' => ['en' => 'Cyanide', 'sw' => 'Sianidi'],
                ];
            @endphp
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                @foreach ($tools as $key => $label)
                    <div class="flex items-center">
                        <input id="tool{{ ucfirst($key) }}" wire:model="toolsUsed.{{ $key }}" type="checkbox"
                            class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                        <label for="tool{{ ucfirst($key) }}" class="ml-2 block text-sm text-gray-700">
                            {{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">
                @if(session('locale') == 'sw') Vifaa vya Usalama Vinavyotumika: @else Safety Equipment Used: @endif
            </label>
            <div class="flex flex-wrap space-x-6">
                @php
                    $safetyOptions = [
                        'yes' => ['en' => 'Yes', 'sw' => 'Ndiyo'],
                        'no' => ['en' => 'No', 'sw' => 'Hapana'],
                        'rarely' => ['en' => 'Rarely', 'sw' => 'Mara chache'],
                    ];
                @endphp
                @foreach ($safetyOptions as $value => $label)
                    <div class="flex items-center">
                        <input id="safety{{ ucfirst($value) }}" wire:model="safetyEquipmentUsed" type="radio" value="{{ $value }}"
                            class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                        <label for="safety{{ ucfirst($value) }}" class="ml-2 block text-sm text-gray-700">
                            {{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                @if(session('locale') == 'sw') Huduma za Msaada Zilizopo katika Eneo (chagua zote): @else Support Services Present in Region (tick all that apply): @endif
            </label>
            @php
                $services = [
                    'vicoba' => ['en' => 'VICOBA / Savings Groups', 'sw' => 'VICOBA / Vikundi vya Akiba'],
                    'mobileMoneyAgents' => ['en' => 'Mobile Money Agents', 'sw' => 'Wakala wa Fedha za Simu'],
                    'governmentExtensionOfficers' => ['en' => 'Government Extension Officers', 'sw' => 'Maafisa Ugani wa Serikali'],
                    'environmentalInspectors' => ['en' => 'Environmental Inspectors', 'sw' => 'Wakaguzi wa Mazingira'],
                    'legalAidServices' => ['en' => 'Legal Aid Services', 'sw' => 'Huduma za Msaada wa Kisheria'],
                    'geologicalSurveySupport' => ['en' => 'Geological Survey Support', 'sw' => 'Msaada wa Utafiti wa Jiolojia'],
                    'financialLiteracyPrograms' => ['en' => 'Financial Literacy Programs', 'sw' => 'Programu za Elimu ya Fedha'],
                ];
            @endphp
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach ($services as $key => $label)
                    <div class="flex items-center">
                        <input id="service{{ ucfirst($key) }}" wire:model="supportServices.{{ $key }}" type="checkbox"
                            class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                        <label for="service{{ ucfirst($key) }}" class="ml-2 block text-sm text-gray-700">
                            {{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>


<!-- Section D: Stakeholder Organization & Coordination -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            @if(session('locale') == 'sw')
                SEHEMU D: URATIBU NA MUUNDO WA WADAU
            @else
                SECTION D: STAKEHOLDER ORGANIZATION & COORDINATION
            @endif
        </h3>
    </div>
    <div class="px-4 py-5 sm:p-6">
        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">
                @if(session('locale') == 'sw')
                    Je, wadau hukutana katika majukwaa yaliyo rasmi?
                @else
                    Do stakeholders meet in structured forums?
                @endif
            </label>
            <div class="flex flex-wrap space-x-6">
                @php
                    $options = [
                        'yes' => ['en' => 'Yes', 'sw' => 'Ndiyo'],
                        'occasionally' => ['en' => 'Occasionally', 'sw' => 'Mara chache'],
                        'no' => ['en' => 'No formal platform exists', 'sw' => 'Hakuna jukwaa rasmi'],
                    ];
                @endphp
                @foreach ($options as $value => $label)
                    <div class="flex items-center">
                        <input id="forum{{ ucfirst($value) }}" wire:model="structuredForumsExist" type="radio" value="{{ $value }}"
                            class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                        <label for="forum{{ ucfirst($value) }}" class="ml-2 block text-sm text-gray-700">
                            {{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}
                        </label>
                    </div>
                @endforeach
            </div>

            @if($structuredForumsExist === 'yes')
                <div class="mt-3">
                    <label for="forumCoordinator" class="block text-sm text-gray-700">
                        @if(session('locale') == 'sw') Kuratibiwa na: @else Coordinated by: @endif
                    </label>
                    <input type="text" wire:model="forumCoordinator" id="forumCoordinator"
                        class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            @endif
        </div>

        <div class="mb-8">
            <label class="block text-sm font-medium text-gray-700 mb-2">
                @if(session('locale') == 'sw')
                    Je, matawi ya FEMATA au vyama vya ushirika vinafanya kazi katika mikoa?
                @else
                    Are FEMATA chapters or cooperatives active regionally?
                @endif
            </label>
            <div class="flex flex-wrap space-x-6">
                @php
                    $femata = [
                        'yes' => ['en' => 'Yes', 'sw' => 'Ndiyo'],
                        'no' => ['en' => 'No', 'sw' => 'Hapana'],
                        'unknown' => ['en' => 'Unknown', 'sw' => 'Haijulikani'],
                    ];
                @endphp
                @foreach ($femata as $value => $label)
                    <div class="flex items-center">
                        <input id="femata{{ ucfirst($value) }}" wire:model="femataActive" type="radio" value="{{ $value }}"
                            class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                        <label for="femata{{ ucfirst($value) }}" class="ml-2 block text-sm text-gray-700">
                            {{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}
                        </label>
                    </div>
                @endforeach
            </div>

            @if($femataActive === 'yes')
                <div class="mt-3">
                    <label for="femataChapters" class="block text-sm text-gray-700">
                        @if(session('locale') == 'sw') Idadi: @else Number: @endif
                    </label>
                    <input type="number" wire:model="femataChapters" id="femataChapters"
                        class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            @endif
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                @if(session('locale') == 'sw') Mbinu za Uratibu: @else Coordination Mechanisms: @endif
            </label>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                @if(session('locale') == 'sw') Mbinu @else Mechanism @endif
                            </th>
                            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                @if(session('locale') == 'sw') Ipo? @else Exists? @endif
                            </th>
                            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                @if(session('locale') == 'sw') Mara kwa mara @else Frequency @endif
                            </th>
                            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                @if(session('locale') == 'sw') Changamoto @else Challenges @endif
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @php
                            $mechanisms = [
                                'asmForum' => ['en' => 'ASM Forum / Stakeholder Dialogue', 'sw' => 'Jukwaa la ASM / Majadiliano ya Wadau'],
                                'conflictMediation' => ['en' => 'Conflict Mediation Platforms', 'sw' => 'Mifumo ya Upatanisho wa Migogoro'],
                                'lgaLiaison' => ['en' => 'LGA–Miner Liaison Committee', 'sw' => 'Kamati ya Ushirikiano wa Halmashauri na Wachimbaji'],
                                'womenGroups' => ['en' => 'Women-in-Mining Coordination Groups', 'sw' => 'Makundi ya Wanawake Wachimbaji'],
                            ];
                        @endphp

                        @foreach ($mechanisms as $key => $label)
                            <tr>
                                <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}
                                </td>
                                <td class="px-3 py-4 whitespace-nowrap">
                                    <input type="checkbox" wire:model="coordinationMechanisms.{{ $key }}.exists"
                                        class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                </td>
                                <td class="px-3 py-4 whitespace-nowrap">
                                    <input type="text" wire:model="coordinationMechanisms.{{ $key }}.frequency"
                                        placeholder="e.g. monthly"
                                        class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </td>
                                <td class="px-3 py-4 whitespace-nowrap">
                                    <input type="text" wire:model="coordinationMechanisms.{{ $key }}.challenges"
                                        class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




      <!-- Section E: Policy Priorities & Reform Awareness -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            @if(session('locale') == 'sw')
                SEHEMU E: KIPAUMBELE CHA SERA NA UELEWA WA MABADILIKO
            @else
                SECTION E: POLICY PRIORITIES & REFORM AWARENESS
            @endif
        </h3>
    </div>
    <div class="px-4 py-5 sm:p-6">
        <div class="mb-8">
            <label class="block text-sm font-medium text-gray-700 mb-3">
                @if(session('locale') == 'sw')
                    Masuala 3 Yanayojitokeza Mara kwa Mara kwa Wadau:
                @else
                    Top 3 Recurring Issues Raised by Stakeholders:
                @endif
            </label>
            <div class="space-y-3">
                @for ($i = 0; $i < 3; $i++)
                    <div>
                        <label for="issue{{ $i + 1 }}" class="block text-xs text-gray-500">{{ $i + 1 }}.</label>
                        <input type="text" wire:model="recurringIssues.{{ $i }}" id="issue{{ $i + 1 }}" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                @endfor
            </div>
        </div>

        <div class="mb-8">
            <label class="block text-sm font-medium text-gray-700 mb-3">
                @if(session('locale') == 'sw')
                    Pangilia Maeneo ya Sera kwa Kipaumbele (1 = juu zaidi, 5 = chini zaidi):
                @else
                    Rank Policy Areas by Priority (1 = highest, 5 = lowest):
                @endif
            </label>
            @php
                $policyLabels = [
                    'licensingEfficiency' => ['en' => 'Licensing Efficiency', 'sw' => 'Ufanisi wa Leseni'],
                    'accessToFinance' => ['en' => 'Access to Finance', 'sw' => 'Upatikanaji wa Fedha'],
                    'environmentalEnforcement' => ['en' => 'Environmental Enforcement', 'sw' => 'Utekelezaji wa Mazingira'],
                    'marketAccess' => ['en' => 'Market Access & Pricing', 'sw' => 'Upatikanaji wa Masoko na Bei'],
                    'equipmentTechnicalSkills' => ['en' => 'Equipment/Technical Skills', 'sw' => 'Vifaa / Ujuzi wa Kiufundi'],
                ];
            @endphp
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach($policyLabels as $key => $label)
                    <div>
                        <label for="policy{{ ucfirst($key) }}" class="block text-sm text-gray-700">
                            {{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}
                        </label>
                        <input type="number" min="1" max="5" wire:model="policyPriorities.{{ $key }}" id="policy{{ ucfirst($key) }}"
                            class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                @endforeach
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-3">
                @if(session('locale') == 'sw')
                    Uelewa na Msaada kwa Mabadiliko Muhimu:
                @else
                    Awareness and Support for Key Reforms:
                @endif
            </label>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                @if(session('locale') == 'sw') Pendekezo la Mageuzi @else Reform Proposal @endif
                            </th>
                            <th class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                @if(session('locale') == 'sw') Kiwango cha Uelewa @else Awareness Level @endif
                            </th>
                            <th class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                @if(session('locale') == 'sw') Kiwango cha Msaada @else Support Level @endif
                            </th>
                            <th class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                @if(session('locale') == 'sw') Maoni @else Comments @endif
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @php
                            $reforms = [
                                'minersBank' => 'Miners\' Bank',
                                'sovereignMineralFund' => 'Sovereign Mineral Fund',
                                'localContentRegulations' => 'Local Content Regulations',
                            ];
                        @endphp

                        @foreach($reforms as $key => $name)
                            <tr>
                                <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $name }}
                                </td>
                                <td class="px-3 py-4 whitespace-nowrap">
                                    <select wire:model="reformAwareness.{{ $key }}.awareness" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        <option value="">{{ session('locale') == 'sw' ? 'Chagua kiwango' : 'Select level' }}</option>
                                        <option value="high">{{ session('locale') == 'sw' ? 'Juu' : 'High' }}</option>
                                        <option value="moderate">{{ session('locale') == 'sw' ? 'Wastani' : 'Moderate' }}</option>
                                        <option value="low">{{ session('locale') == 'sw' ? 'Chini' : 'Low' }}</option>
                                    </select>
                                </td>
                                <td class="px-3 py-4 whitespace-nowrap">
                                    <select wire:model="reformAwareness.{{ $key }}.support" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        <option value="">{{ session('locale') == 'sw' ? 'Chagua kiwango' : 'Select level' }}</option>
                                        <option value="strong">{{ session('locale') == 'sw' ? 'Imara' : 'Strong' }}</option>
                                        <option value="mixed">{{ session('locale') == 'sw' ? 'Mchanganyiko' : 'Mixed' }}</option>
                                        <option value="low">{{ session('locale') == 'sw' ? 'Chini' : 'Low' }}</option>
                                    </select>
                                </td>
                                <td class="px-3 py-4 whitespace-nowrap">
                                    <input type="text" wire:model="reformAwareness.{{ $key }}.comments"
                                           class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




<div class="bg-white shadow overflow-hidden sm:rounded-lg max-w-full">
    <!-- SECTION F: GENDER & YOUTH PARTICIPATION -->
    <div class="px-2 sm:px-4 py-3 sm:py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
        <h3 class="text-base sm:text-lg leading-6 font-medium text-gray-900">
            @if(session('locale') == 'sw')
                SEHEMU F: USHIRIKI WA WANAWAKE NA VIJANA
            @else
                SECTION F: GENDER & YOUTH PARTICIPATION
            @endif
        </h3>
    </div>
    <div class="px-2 sm:px-4 py-3 sm:py-5 sm:p-6">

        <!-- Women Organization -->
        <div class="mb-4 sm:mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">
                @if(session('locale') == 'sw') Je, wachimbaji wanawake wamejipanga? @else Are women miners organized? @endif
            </label>
            <div class="flex flex-wrap items-center gap-2 sm:gap-4">
                <div class="flex items-center">
                    <input id="women-org-yes" wire:model="womenMinersOrganized" type="radio" value="yes" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="women-org-yes" class="ml-2 block text-sm text-gray-700">
                        @if(session('locale') == 'sw') Ndio @else Yes @endif
                    </label>
                </div>
                <div class="flex items-center">
                    <input id="women-org-informal" wire:model="womenMinersOrganized" type="radio" value="informal" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="women-org-informal" class="ml-2 block text-sm text-gray-700">
                        @if(session('locale') == 'sw') Kuna vikundi visivyo rasmi @else Informal Groups Exist @endif
                    </label>
                </div>
                <div class="flex items-center">
                    <input id="women-org-no" wire:model="womenMinersOrganized" type="radio" value="no" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="women-org-no" class="ml-2 block text-sm text-gray-700">
                        @if(session('locale') == 'sw') Hakuna vikundi vinavyojulikana @else No Known Groups @endif
                    </label>
                </div>
            </div>
            <div class="mt-2" x-show="womenMinersOrganized === 'yes'">
                <label for="womenGroupCount" class="block text-sm text-gray-700">
                    @if(session('locale') == 'sw') Idadi ya vikundi: @else No. of Groups: @endif
                </label>
                <input type="number" wire:model="womenGroupCount" id="womenGroupCount" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-24 sm:w-32 text-sm border-gray-300 rounded-md">
            </div>
        </div>

        <!-- Barriers -->
        <div class="mb-4 sm:mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">
                @if(session('locale') == 'sw') Vikwazo kwa Ushiriki wa Wanawake (chagua vyote vinavyofaa): @else Barriers to Women's Participation (tick all): @endif
            </label>
            @php
                $barrierLabels = [
                    'landAccess' => ['en' => 'Land Access', 'sw' => 'Upatikanaji wa Ardhi'],
                    'licensingRestrictions' => ['en' => 'Licensing Restrictions', 'sw' => 'Vizuizi vya Leseni'],
                    'toolAccess' => ['en' => 'Tool Access', 'sw' => 'Upatikanaji wa Vifaa'],
                    'creditAccess' => ['en' => 'Credit Access', 'sw' => 'Upatikanaji wa Mikopo'],
                    'socialNorms' => ['en' => 'Social Norms', 'sw' => 'Mila na Desturi'],
                    'childcareResponsibilities' => ['en' => 'Childcare Responsibilities', 'sw' => 'Majukumu ya Malezi ya Watoto'],
                    'other' => ['en' => 'Other', 'sw' => 'Nyingine'],
                ];
            @endphp
            <div class="grid grid-cols-1 xs:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 sm:gap-3">
                @foreach($barrierLabels as $key => $label)
                    <div class="flex items-center">
                        <input id="barrier-{{ $key }}" wire:model="{{ $key == 'other' ? 'womenBarriersOther.exists' : 'womenBarriers' }}" type="checkbox" value="{{ $key == 'other' ? 'true' : $key }}" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                        <label for="barrier-{{ $key }}" class="ml-2 block text-sm text-gray-700">
                            {{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}
                        </label>
                    </div>
                @endforeach

                <div class="col-span-1 xs:col-span-2 md:col-span-3 lg:col-span-4" x-show="womenBarriersOther.exists">
                    <input type="text" wire:model="womenBarriersOther.value"
                        placeholder="{{ session('locale') == 'sw' ? 'Taja vikwazo vingine' : 'Specify other barriers' }}"
                        class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full text-sm border-gray-300 rounded-md">
                </div>
            </div>
        </div>

        <!-- Youth Involvement -->
        <div class="mb-4 sm:mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">
                @if(session('locale') == 'sw') Ushiriki wa Vijana katika Shughuli za Madini: @else Youth Involvement in Mining Activities: @endif
            </label>
            <div class="flex flex-wrap items-center gap-2 sm:gap-4">
                @foreach(['high' => 'High', 'moderate' => 'Moderate', 'low' => 'Low'] as $value => $text)
                    <div class="flex items-center">
                        <input id="youth-{{ $value }}" wire:model="youthInvolvement" type="radio" value="{{ $value }}" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                        <label for="youth-{{ $value }}" class="ml-2 block text-sm text-gray-700">
                            {{ session('locale') == 'sw' ? ucfirst(__($value == 'high' ? 'Juu' : ($value == 'moderate' ? 'Wastani' : 'Chini'))) : $text }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Youth Programs -->
        <div class="mb-4 sm:mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">
                @if(session('locale') == 'sw') Je, kuna Programu Maalum kwa Vijana? @else Youth-Specific Support Programs Present? @endif
            </label>
            <div class="flex flex-wrap items-center gap-2 sm:gap-4">
                <div class="flex items-center">
                    <input id="youth-programs-yes" wire:model="youthPrograms" type="radio" value="yes" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="youth-programs-yes" class="ml-2 block text-sm text-gray-700">
                        @if(session('locale') == 'sw') Ndio @else Yes @endif
                    </label>
                </div>
                <div class="flex items-center">
                    <input id="youth-programs-no" wire:model="youthPrograms" type="radio" value="no" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="youth-programs-no" class="ml-2 block text-sm text-gray-700">
                        @if(session('locale') == 'sw') Hapana @else No @endif
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="bg-white shadow overflow-hidden sm:rounded-lg max-w-full">
    <!-- SECTION G: REGULATORY & SUPPORT INFRASTRUCTURE -->
    <div class="px-2 sm:px-4 py-3 sm:py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
        <h3 class="text-base sm:text-lg leading-6 font-medium text-gray-900">
            @if(session('locale') == 'sw')
                SEHEMU G: MIUNDOMBINU YA KISERIKALI NA MSAADA
            @else
                SECTION G: REGULATORY & SUPPORT INFRASTRUCTURE
            @endif
        </h3>
    </div>
    <div class="px-2 sm:px-4 py-3 sm:py-5 sm:p-6">

        <!-- Stakeholder Registry -->
        <div class="mb-4 sm:mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">
                @if(session('locale') == 'sw')
                    Je, ofisi yako inatunza rejesta ya wadau?
                @else
                    Does your office maintain a stakeholder registry?
                @endif
            </label>
            <div class="flex flex-wrap items-center gap-2 sm:gap-4">
                @php
                    $registryOptions = [
                        'digital' => ['en' => 'Yes – Digital', 'sw' => 'Ndio – Kidijitali'],
                        'paper' => ['en' => 'Yes – Paper', 'sw' => 'Ndio – Karatasi'],
                        'no' => ['en' => 'No Registry', 'sw' => 'Hakuna Rejesta'],
                        'unknown' => ['en' => 'Unknown', 'sw' => 'Haijulikani'],
                    ];
                @endphp
                @foreach($registryOptions as $value => $label)
                    <div class="flex items-center">
                        <input id="registry-{{ $value }}" wire:model="stakeholderRegistry" type="radio" value="{{ $value }}" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                        <label for="registry-{{ $value }}" class="ml-2 block text-sm text-gray-700">
                            {{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Training Programs -->
        <div class="mb-4 sm:mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">
                @if(session('locale') == 'sw')
                    Je, kuna Mafunzo au Programu za Ugani Zinazotolewa?
                @else
                    Are Training/Extension Programs Offered?
                @endif
            </label>
            <div class="flex flex-wrap items-center gap-2 sm:gap-4">
                @php
                    $trainingOptions = [
                        'yes' => ['en' => 'Yes', 'sw' => 'Ndio'],
                        'no' => ['en' => 'No', 'sw' => 'Hapana'],
                        'planned' => ['en' => 'Planned but not launched', 'sw' => 'Imepangwa lakini haijaanzishwa'],
                    ];
                @endphp
                @foreach($trainingOptions as $value => $label)
                    <div class="flex items-center">
                        <input id="training-{{ $value }}" wire:model="trainingPrograms" type="radio" value="{{ $value }}" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                        <label for="training-{{ $value }}" class="ml-2 block text-sm text-gray-700">
                            {{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}
                        </label>
                    </div>
                @endforeach
            </div>

            <div class="mt-2" x-show="trainingPrograms === 'yes'">
                <label for="trainingProvider" class="block text-sm text-gray-700">
                    @if(session('locale') == 'sw') Mtoa Huduma: @else Provider: @endif
                </label>
                <input type="text" wire:model="trainingProvider" id="trainingProvider" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full text-sm border-gray-300 rounded-md">
            </div>
        </div>

        <!-- Environmental Monitoring -->
        <div class="mb-4 sm:mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2 sm:mb-3">
                @if(session('locale') == 'sw') Ufuatiliaji wa Mazingira wa Kila Mwaka: @else Annual Environmental Monitoring: @endif
            </label>
            <div class="space-y-3 sm:space-y-4">
                <div>
                    <label for="asmSiteCount" class="block text-sm text-gray-700">
                        @if(session('locale') == 'sw') Idadi Inayokadiriwa ya Maeneo ya Uchimbaji Mdogo @else Estimated Number of ASM Sites @endif
                    </label>
                    <input type="number" wire:model="environmentalMonitoring.siteCount" id="asmSiteCount" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full text-sm border-gray-300 rounded-md">
                </div>
                <div>
                    <label for="sitesMonitored" class="block text-sm text-gray-700">
                        @if(session('locale') == 'sw') Maeneo Yanayofuatiliwa Kila Mwaka @else Sites Monitored Annually @endif
                    </label>
                    <input type="number" wire:model="environmentalMonitoring.monitored" id="sitesMonitored" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full text-sm border-gray-300 rounded-md">
                </div>
                <div>
                    <label class="block text-sm text-gray-700 mb-2">
                        @if(session('locale') == 'sw') Marudio ya Ukaguzi @else Frequency of Inspections @endif
                    </label>
                    <div class="flex flex-wrap items-center gap-2 sm:gap-4">
                        @php
                            $inspectionOptions = [
                                'frequent' => ['en' => 'Frequent', 'sw' => 'Mara kwa mara'],
                                'occasional' => ['en' => 'Occasional', 'sw' => 'Mara chache'],
                                'rare' => ['en' => 'Rare', 'sw' => 'Nadira'],
                                'none' => ['en' => 'None', 'sw' => 'Hakuna'],
                            ];
                        @endphp
                        @foreach($inspectionOptions as $value => $label)
                            <div class="flex items-center">
                                <input id="inspection-{{ $value }}" wire:model="environmentalMonitoring.frequency" type="radio" value="{{ $value }}" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                <label for="inspection-{{ $value }}" class="ml-2 block text-sm text-gray-700">
                                    {{ session('locale') == 'sw' ? $label['sw'] : $label['en'] }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="bg-white shadow overflow-hidden sm:rounded-lg max-w-full">
    <!-- SECTION H: FINAL RECOMMENDATIONS & INSIGHTS -->
    <div class="px-2 sm:px-4 py-3 sm:py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
        <h3 class="text-base sm:text-lg leading-6 font-medium text-gray-900">
            @if(session('locale') == 'sw')
                SEHEMU H: MAPENDEKEZO YA MWISHO NA MAONI
            @else
                SECTION H: FINAL RECOMMENDATIONS & INSIGHTS
            @endif
        </h3>
    </div>
    <div class="px-2 sm:px-4 py-3 sm:py-5 sm:p-6">
        <div class="mb-4 sm:mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2 sm:mb-3">
                @if(session('locale') == 'sw')
                    Mapendekezo 3 ya Juu kwa Kuboresha Msaada kwa Wadau:
                @else
                    Top 3 Recommendations for Improving Stakeholder Support:
                @endif
            </label>
            <div class="space-y-2 sm:space-y-3">
                <div>
                    <label for="recommendation1" class="block text-xs text-gray-500">1.</label>
                    <input type="text" wire:model="recommendations.0" id="recommendation1" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full text-sm border-gray-300 rounded-md">
                </div>
                <div>
                    <label for="recommendation2" class="block text-xs text-gray-500">2.</label>
                    <input type="text" wire:model="recommendations.1" id="recommendation2" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full text-sm border-gray-300 rounded-md">
                </div>
                <div>
                    <label for="recommendation3" class="block text-xs text-gray-500">3.</label>
                    <input type="text" wire:model="recommendations.2" id="recommendation3" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full text-sm border-gray-300 rounded-md">
                </div>
            </div>
        </div>

        <div>
            <label for="additionalNotes" class="block text-sm font-medium text-gray-700 mb-2">
                @if(session('locale') == 'sw')
                    Maelezo ya Ziada au Tahadhari kwa Kikosi Kazi (km maeneo yenye migogoro, maeneo ya dhahabu, ongezeko la maeneo yasiyo rasmi)
                @else
                    Additional Notes or Alerts for the Taskforce (e.g., conflict hotspots, gold rush zones, informal site surges)
                @endif
            </label>
            <textarea wire:model="additionalNotes" id="additionalNotes" rows="4" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full text-sm border-gray-300 rounded-md"></textarea>
        </div>
    </div>
</div>


    

<div class="px-2 sm:px-4 py-3 bg-gray-50 text-right sm:px-6">
    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
        @if(session('locale') == 'sw')
            Wasilisha Fomu
        @else
            Submit Form
        @endif
    </button>
</div>










{{-- If your happiness depends on money, you will never be happy with yourself. --}}
</div>
