<div>


    <div class="max-w-6xl mx-auto p-6 sm:p-8 bg-white rounded-lg shadow space-y-8">
    <h2 class="text-2xl font-bold text-center text-indigo-700">
        @if(session('locale') == 'sw')
            Fomu ya Kukusanya Taarifa za Taasisi za Kifedha
        @else
            Financial Institution Data Collection Form
        @endif
    </h2>



    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative space-y-1">
        <strong class="font-bold">
            @if(session('locale') == 'sw')
                Tafadhali rekebisha makosa yafuatayo:
            @else
                Please fix the following errors:
            @endif
        </strong>

        <ul class="list-disc list-inside text-sm mt-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif




    {{-- 🟩 SECTION A: INSTITUTIONAL INFORMATION --}}
    <section class="space-y-6">
        <h3 class="text-xl font-semibold text-green-700">
            🟩 
            @if(session('locale') == 'sw')
                SEHEMU A: TAARIFA ZA TAASISI
            @else
                SECTION A: INSTITUTIONAL INFORMATION
            @endif
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Name of Institution --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    @if(session('locale') == 'sw')
                        Jina la Taasisi
                    @else
                        Name of Institution
                    @endif
                </label>
                <input type="text" wire:model.defer="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>

            {{-- Institution Type --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    @if(session('locale') == 'sw')
                        Aina ya Taasisi
                    @else
                        Institution Type
                    @endif
                </label>
                <select wire:model.defer="type" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                    <option value="">-- @if(session('locale') == 'sw') Chagua -- @else Select -- @endif</option>
                    <option>Commercial Bank</option>
                    <option>Community Bank</option>
                    <option>Microfinance</option>
                    <option>SACCO Apex Body</option>
                    <option>Mobile Money/Fintech</option>
                    <option>Other</option>
                </select>
            </div>

            {{-- Date of Registration --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    @if(session('locale') == 'sw')
                        Tarehe ya Usajili Tanzania
                    @else
                        Date of Registration in Tanzania
                    @endif
                </label>
                <input type="date" wire:model.defer="registration_date" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>

            {{-- Head Office Location --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    @if(session('locale') == 'sw')
                        Makao Makuu
                    @else
                        Head Office Location
                    @endif
                </label>
                <input type="text" wire:model.defer="head_office" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>

            {{-- Total Employees --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    @if(session('locale') == 'sw')
                        Jumla ya Wafanyakazi Tanzania
                    @else
                        Total Employees in Tanzania
                    @endif
                </label>
                <input type="number" wire:model.defer="employee_count" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>

            {{-- Total Loan Portfolio --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    @if(session('locale') == 'sw')
                        Jumla ya Mikopo (TZS)
                    @else
                        Total Loan Portfolio (TZS)
                    @endif
                </label>
                <input type="number" wire:model.defer="loan_portfolio" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>

            {{-- Extractives Loan Amount --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    @if(session('locale') == 'sw')
                        Kiasi cha Mikopo Sekta ya Madini (TZS)
                    @else
                        Loan Portfolio in Extractives (Amount)
                    @endif
                </label>
                <input type="number" wire:model.defer="extractives_amount" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>

            {{-- % of Extractives Loan --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    @if(session('locale') == 'sw')
                        Asilimia ya Jumla (Sekta ya Madini)
                    @else
                        % of Total in Extractives
                    @endif
                </label>
                <input type="number" step="0.01" wire:model.defer="extractives_percent" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>
        </div>
    </section>

   





    {{-- 🟦 SECTION B: OPERATIONAL FOOTPRINT --}}
<section class="space-y-6">
    <h3 class="text-xl font-semibold text-blue-700">
        🟦 
        @if(session('locale') == 'sw')
            SEHEMU B: MAENEO YA UTEKELEZAJI
        @else
            SECTION B: OPERATIONAL FOOTPRINT
        @endif
    </h3>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        {{-- Mining Regions --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                @if(session('locale') == 'sw')
                    Mikoa ya Madini Unayofanya Kazi
                @else
                    Mining Regions Your Institution Operates In
                @endif
            </label>
            <div class="flex flex-wrap gap-3">
                @foreach(['Lake Zone', 'Central Zone', 'Northern Zone', 'Southern Highlands', 'Coastal & South-East', 'National Coverage'] as $region)
                    <label class="inline-flex items-center space-x-2">
                        <input type="checkbox" wire:model.defer="mining_regions" value="{{ $region }}" class="text-blue-600 rounded">
                        <span class="text-sm">{{ $region }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        {{-- ASM Target Groups --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                @if(session('locale') == 'sw')
                    Ni Aina Gani ya Wadau wa Madini Unalenga?
                @else
                    Which ASM Categories Do You Target?
                @endif
            </label>
            <div class="flex flex-wrap gap-3">
                @foreach(['Individual miners', 'Cooperatives', 'Women miners', 'Youth', 'Processors', 'Equipment suppliers', 'Service providers'] as $target)
                    <label class="inline-flex items-center space-x-2">
                        <input type="checkbox" wire:model.defer="asm_targets" value="{{ $target }}" class="text-blue-600 rounded">
                        <span class="text-sm">{{ $target }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        {{-- Intermediaries --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                @if(session('locale') == 'sw')
                    Je, Unashirikiana na Wadau Wengine?
                @else
                    Do You Work with Any of the Following Intermediaries?
                @endif
            </label>
            <div class="flex flex-wrap gap-3">
                @foreach(['NGOs', 'RMOs', 'Service Providers', 'Digital Platforms', 'Cooperatives', 'None'] as $partner)
                    <label class="inline-flex items-center space-x-2">
                        <input type="checkbox" wire:model.defer="intermediaries" value="{{ $partner }}" class="text-blue-600 rounded">
                        <span class="text-sm">{{ $partner }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        {{-- Dedicated ASM Staff --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                @if(session('locale') == 'sw')
                    Je, Una Wafanyakazi Maalum kwa Ajili ya Wateja wa Sekta ya Madini?
                @else
                    Do You Have Dedicated Staff for ASM Clients?
                @endif
            </label>
            <div class="flex items-center gap-4 mt-1">
                <label class="inline-flex items-center space-x-2">
                    <input type="radio" wire:model.defer="has_dedicated_staff" value="1" class="text-blue-600 rounded">
                    <span>@if(session('locale') == 'sw') Ndio @else Yes @endif</span>
                </label>
                <label class="inline-flex items-center space-x-2">
                    <input type="radio" wire:model.defer="has_dedicated_staff" value="0" class="text-blue-600 rounded">
                    <span>@if(session('locale') == 'sw') Hapana @else No @endif</span>
                </label>
            </div>
        </div>

        {{-- Dedicated Staff Details (only show if has_dedicated_staff is true) --}}
        @if($has_dedicated_staff)
        <div class="grid grid-cols-1 gap-4 md:col-span-2">
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    @if(session('locale') == 'sw')
                        Idadi ya Wafanyakazi
                    @else
                        Number of Dedicated Staff
                    @endif
                </label>
                <input type="number" wire:model.defer="dedicated_staff_count" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    @if(session('locale') == 'sw')
                        Majukumu Yao
                    @else
                        Roles
                    @endif
                </label>
                <input type="text" wire:model.defer="dedicated_staff_roles" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        @if(session('locale') == 'sw')
                            Wanaume (%)
                        @else
                            Male (%)
                        @endif
                    </label>
                    <input type="number" wire:model.defer="gender_split_male" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        @if(session('locale') == 'sw')
                            Wanawake (%)
                        @else
                            Female (%)
                        @endif
                    </label>
                    <input type="number" wire:model.defer="gender_split_female" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                </div>
            </div>
        </div>
        @endif
    </div>
</section>





{{-- 🟨 SECTION C: PRODUCT SUITE AND CREDIT OPERATIONS --}}
<section class="space-y-6">
    <h3 class="text-xl font-semibold text-yellow-600">
        🟨 
        @if(session('locale') == 'sw')
            SEHEMU C: HUDUMA ZA KIFEDHA NA UTOAJI MIKOPO
        @else
            SECTION C: PRODUCT SUITE AND CREDIT OPERATIONS
        @endif
    </h3>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        {{-- Services Offered --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                @if(session('locale') == 'sw')
                    Huduma Unazotoa kwa Sekta ya Madini
                @else
                    Services Offered to ASM Clients
                @endif
            </label>
            <div class="flex flex-wrap gap-3">
                @foreach(['Working capital', 'Leasing', 'Savings', 'Insurance', 'Mobile services'] as $service)
                    <label class="inline-flex items-center space-x-2">
                        <input type="checkbox" wire:model.defer="services_offered" value="{{ $service }}" class="text-yellow-500 rounded">
                        <span class="text-sm">{{ $service }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        {{-- Loan Count --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw')
                    Idadi ya Mikopo (Miezi 12 Iliyopita)
                @else
                    Number of Loans (Last 12 Months)
                @endif
            </label>
            <input type="number" wire:model.defer="loan_count" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>

        {{-- Total Disbursed --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw')
                    Jumla ya Fedha Zilizotolewa (TZS)
                @else
                    Total Disbursed (TZS)
                @endif
            </label>
            <input type="number" wire:model.defer="total_disbursed" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>

        {{-- Average Loan Size --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw')
                    Kiasi cha Wastani cha Mkopo (TZS)
                @else
                    Average Loan Size (TZS)
                @endif
            </label>
            <input type="number" wire:model.defer="average_loan_size" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>

        {{-- Repayment Rate --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw')
                    Kiwango cha Marejesho (%)
                @else
                    Repayment Rate (%)
                @endif
            </label>
            <input type="number" step="0.01" wire:model.defer="repayment_rate" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>

        {{-- Default Rate --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw')
                    Kiwango cha Kutolipa (%)
                @else
                    Default Rate (%)
                @endif
            </label>
            <input type="number" step="0.01" wire:model.defer="default_rate" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>

        {{-- Repayment Term --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw')
                    Kipindi cha Marejesho (Miezi)
                @else
                    Repayment Term (Months)
                @endif
            </label>
            <input type="number" wire:model.defer="repayment_term" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>

        {{-- % of Female Borrowers --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw')
                    Asilimia ya Wanawake Waliochukua Mikopo
                @else
                    % of Female Borrowers
                @endif
            </label>
            <input type="number" step="0.01" wire:model.defer="female_borrowers_percent" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>

        {{-- Group vs Individual --}}
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw')
                    Uwiano wa Mikopo ya Kundi dhidi ya ya Mtu Binafsi
                @else
                    Group vs. Individual (e.g. 70 / 30)
                @endif
            </label>
            <input type="text" wire:model.defer="group_vs_individual" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        </div>
    </div>

    {{-- Collateral Accepted --}}
    <div class="mt-6">
        <label class="block text-sm font-medium text-gray-700 mb-1">
            @if(session('locale') == 'sw')
                Aina ya Dhamana Inayokubaliwa
            @else
                Collateral Accepted
            @endif
        </label>
        <div class="flex flex-wrap gap-3">
            @foreach(['Land', 'License', 'Assets', 'Group guarantee', 'Gold', 'Output pledge'] as $item)
                <label class="inline-flex items-center space-x-2">
                    <input type="checkbox" wire:model.defer="collateral" value="{{ $item }}" class="text-yellow-600 rounded">
                    <span class="text-sm">{{ $item }}</span>
                </label>
            @endforeach
        </div>
    </div>

    {{-- Rejection Reasons --}}
    <div class="mt-6">
        <label class="block text-sm font-medium text-gray-700">
            @if(session('locale') == 'sw')
                Sababu 3 Kuu za Kukataliwa kwa Mikopo
            @else
                Top 3 Reasons Loans Are Rejected
            @endif
        </label>
        <div class="space-y-2 mt-2">
            <input type="text" wire:model.defer="loan_rejection_reasons.0" class="block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="1.">
            <input type="text" wire:model.defer="loan_rejection_reasons.1" class="block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="2.">
            <input type="text" wire:model.defer="loan_rejection_reasons.2" class="block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="3.">
        </div>
    </div>
</section>




{{-- 🟧 SECTION D: RISK, READINESS & INNOVATION --}}
<section class="space-y-6">
    <h3 class="text-xl font-semibold text-orange-600">
        🟧 
        @if(session('locale') == 'sw')
            SEHEMU D: HATARI, UWEZO NA UBUNIFU
        @else
            SECTION D: RISK, READINESS & INNOVATION
        @endif
    </h3>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        {{-- Internal Policies --}}
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw')
                    Sera za Ndani kuhusu Ufadhili kwa Sekta ya Madini
                @else
                    Internal Policies for ASM Financing
                @endif
            </label>
            <textarea wire:model.defer="asm_policies" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2"></textarea>
        </div>

        {{-- Alternative Data Sources --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                @if(session('locale') == 'sw')
                    Taarifa Mbadala kwa Ajili ya Upimaji wa Mikopo
                @else
                    Alternative Data Used for Credit Scoring Miners
                @endif
            </label>
            <div class="flex flex-wrap gap-3">
                @foreach(['Mobile', 'Production', 'Community reference'] as $source)
                    <label class="inline-flex items-center space-x-2">
                        <input type="checkbox" wire:model.defer="credit_scoring_data" value="{{ $source }}" class="text-orange-500 rounded">
                        <span class="text-sm">{{ $source }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        {{-- Risk-Sharing Pilots --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw')
                    Miradi au Mipango ya Kushirikiana Hatari (kama ipo)
                @else
                    Risk-Sharing Pilots or Programs (if any)
                @endif
            </label>
            <textarea wire:model.defer="risk_sharing" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2"></textarea>
        </div>

        {{-- Value Chain Linked Products --}}
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700 mb-1">
                @if(session('locale') == 'sw')
                    Je, Bidhaa Zako Zinahusiana na Mnyororo wa Thamani wa Sekta ya Madini?
                @else
                    Are Any of Your Products Linked to the ASM Value Chain?
                @endif
            </label>
            <div class="flex items-center gap-6 mt-1">
                <label class="inline-flex items-center space-x-2">
                    <input type="radio" wire:model.defer="linked_value_chain" value="1" class="text-orange-600 rounded">
                    <span>@if(session('locale') == 'sw') Ndio @else Yes @endif</span>
                </label>
                <label class="inline-flex items-center space-x-2">
                    <input type="radio" wire:model.defer="linked_value_chain" value="0" class="text-orange-600 rounded">
                    <span>@if(session('locale') == 'sw') Hapana @else No @endif</span>
                </label>
            </div>
        </div>

        {{-- Description if linked --}}
        @if($linked_value_chain)
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw')
                    Tafadhali Eleza Bidhaa Hizo
                @else
                    Please Describe the Linked Products
                @endif
            </label>
            <textarea wire:model.defer="value_chain_desc" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2"></textarea>
        </div>
        @endif

        {{-- Embedded Finance Option --}}
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw')
                    Je, Uko Tayari kwa Fedha Zilizowekwa Moja kwa Moja (mfano vifaa au dhahabu)?
                @else
                    Are You Open to Embedded Finance (e.g., tied to equipment or gold)?
                @endif
            </label>
            <select wire:model.defer="open_to_embedded_finance" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                <option value="">-- @if(session('locale') == 'sw') Chagua -- @else Select -- @endif</option>
                <option>Yes</option>
                <option>No</option>
                <option>Under discussion</option>
            </select>
        </div>
    </div>
</section>



{{-- 🟪 SECTION E: DIGITAL ACCESS & GENDER DATA --}}
<section class="space-y-6">
    <h3 class="text-xl font-semibold text-purple-700">
        🟪 
        @if(session('locale') == 'sw')
            SEHEMU E: TEHAMA NA TAKWIMU ZA JINSIA
        @else
            SECTION E: DIGITAL ACCESS & GENDER DATA
        @endif
    </h3>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        {{-- Gender-Disaggregated Data --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw')
                    Je, Unafuatilia Takwimu kwa Kulingana na Jinsia?
                @else
                    Do You Track Gender-Disaggregated Data?
                @endif
            </label>
            <select wire:model.defer="gender_data_tracking" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                <option value="">-- @if(session('locale') == 'sw') Chagua -- @else Select -- @endif</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
                <option value="Planning to">Planning to</option>
            </select>
        </div>

        {{-- Digital Tools Deployed --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                @if(session('locale') == 'sw')
                    Vifaa vya Kidijitali Ulivyoweka kwa Sekta ya Madini
                @else
                    Digital Tools Deployed for ASM
                @endif
            </label>
            <div class="flex flex-wrap gap-3">
                @foreach(['Mobile onboarding', 'Credit apps', 'Profiling platforms'] as $tool)
                    <label class="inline-flex items-center space-x-2">
                        <input type="checkbox" wire:model.defer="digital_tools" value="{{ $tool }}" class="text-purple-600 rounded">
                        <span class="text-sm">{{ $tool }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        {{-- Agent Use of Mobile Tools --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw')
                    Je, Mawakala Wako Wanatumia Vifaa vya Kidijitali Kuwafikia Wachimbaji?
                @else
                    Do Your Agents Use Mobile Tools for Miner Engagement?
                @endif
            </label>
            <select wire:model.defer="agent_mobile_use" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                <option value="">-- @if(session('locale') == 'sw') Chagua -- @else Select -- @endif</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
                <option value="Developing">Developing</option>
            </select>
        </div>

        {{-- Digital Gaps --}}
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw')
                    Ni Mapungufu Gani ya Kidijitali Yanayokwamisha Upatikanaji wa Huduma?
                @else
                    What Digital Gaps Block Financial Access for ASM?
                @endif
            </label>
            <div class="space-y-2 mt-2">
                <input type="text" wire:model.defer="digital_gaps.0" class="block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="1.">
                <input type="text" wire:model.defer="digital_gaps.1" class="block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="2.">
            </div>
        </div>
    </div>
</section>




{{-- 🟥 SECTION F: POLICY INPUTS & SOVEREIGN FUND --}}
<section class="space-y-6">
    <h3 class="text-xl font-semibold text-red-600">
        🟥 
        @if(session('locale') == 'sw')
            SEHEMU F: MAPENDEKEZO YA SERA NA MFUKO WA KITAIFA
        @else
            SECTION F: POLICY INPUTS & SOVEREIGN FUND
        @endif
    </h3>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        {{-- Support for Sovereign Fund --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw')
                    Je, Unaunga Mkono Benki ya Wachimbaji/Mfuko wa Kitaifa?
                @else
                    Do You Support a Miners' Bank or Sovereign Fund?
                @endif
            </label>
            <select wire:model.defer="support_miners_bank" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                <option value="">-- @if(session('locale') == 'sw') Chagua -- @else Select -- @endif</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
                <option value="Neutral">Neutral</option>
            </select>
        </div>

        {{-- Roles of Sovereign Fund --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                @if(session('locale') == 'sw')
                    Mapendekezo 3 ya Juu kwa Mchango wa Mfuko wa Kitaifa
                @else
                    Top 3 Roles the Sovereign Fund Should Serve
                @endif
            </label>
            <div class="flex flex-wrap gap-3">
                @foreach(['Lending', 'Guarantees', 'Coop support', 'Infra', 'Training', 'Refinance'] as $role)
                    <label class="inline-flex items-center space-x-2">
                        <input type="checkbox" wire:model.defer="sovereign_roles" value="{{ $role }}" class="text-red-600 rounded">
                        <span class="text-sm">{{ $role }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        {{-- Willingness to Partner --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw')
                    Je, Uko Tayari Kushirikiana au Kugharamia Kupitia Mfuko Huo?
                @else
                    Would You Partner or Co-finance via the Sovereign Facility?
                @endif
            </label>
            <select wire:model.defer="partner_cofinance" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                <option value="">-- @if(session('locale') == 'sw') Chagua -- @else Select -- @endif</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
                <option value="Depends on structure">Depends on structure</option>
            </select>
        </div>

        {{-- Regulatory/Fiscal Reforms --}}
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw')
                    Mapendekezo ya Marekebisho ya Kifisikali au Kisheria
                @else
                    Key Fiscal or Regulatory Reforms Needed
                @endif
            </label>
            <div class="space-y-2 mt-2">
                <input type="text" wire:model.defer="fiscal_reforms.0" class="block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="1.">
                <input type="text" wire:model.defer="fiscal_reforms.1" class="block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="2.">
            </div>
        </div>
    </div>
</section>



{{-- 🟦 SECTION G: LESSONS & CASE STUDIES --}}
<section class="space-y-6">
    <h3 class="text-xl font-semibold text-blue-800">
        🟦 
        @if(session('locale') == 'sw')
            SEHEMU G: MAFUNZO NA MIFANO HALISI
        @else
            SECTION G: LESSONS & CASE STUDIES
        @endif
    </h3>

    <div class="grid grid-cols-1 gap-6">
        {{-- Successful Programs --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw')
                    Mifano ya Mafanikio ya Fedha kwa Sekta ya Madini
                @else
                    Successful Programs or Models for ASM Finance
                @endif
            </label>
            <div class="space-y-2 mt-2">
                <input type="text" wire:model.defer="successful_models.0" class="block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="1.">
                <input type="text" wire:model.defer="successful_models.1" class="block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="2.">
            </div>
        </div>

        {{-- Final Policy Suggestions --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">
                @if(session('locale') == 'sw')
                    Mapendekezo ya Mwisho kwa BoT au Kikosi Kazi
                @else
                    Final Policy Suggestions to BoT or the Taskforce
                @endif
            </label>
            <div class="space-y-2 mt-2">
                <input type="text" wire:model.defer="final_policy_suggestions.0" class="block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="1.">
                <input type="text" wire:model.defer="final_policy_suggestions.1" class="block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="2.">
            </div>
        </div>
    </div>
</section>



{{-- SUBMIT BUTTON --}}
<div class="pt-6 border-t border-gray-200 text-center">
    <button wire:click="submitForm"
        class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded font-semibold shadow transition duration-200">
        @if(session('locale') == 'sw')
            Wasilisha Fomu
        @else
            Submit Form
        @endif
    </button>

    @if (session()->has('message'))
        <div class="mt-4 text-green-600 font-medium">
            {{ session('message') }}
        </div>
    @endif
</div>
















    </div>




</div>
