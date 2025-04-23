<div>
  
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            SECTION A: IDENTIFICATION AND PROFILE
        </h3>
    </div>

    @if (session()->has('message'))
        <div class="px-4 py-3 bg-green-100 text-green-800 text-sm">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="px-4 py-5 sm:p-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">

        <!-- Institution Name -->
        <div class="sm:col-span-3">
            <label for="institution_name" class="block text-sm font-medium text-gray-700">Name of Institution</label>
            <input type="text" id="institution_name" wire:model="institution_name"
                class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('institution_name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Institution Type -->
        <div class="sm:col-span-3">
            <label for="institution_type" class="block text-sm font-medium text-gray-700">Type of Institution</label>
            <select id="institution_type" wire:model="institution_type"
                class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                <option value="">Select Type</option>
                <option>Commercial Bank</option>
                <option>Community Bank</option>
                <option>Microfinance</option>
                <option>SACCO Apex Body</option>
                <option>Mobile Money/Fintech</option>
                <option>Other</option>
            </select>
            @error('institution_type') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Date of Registration -->
        <div class="sm:col-span-3">
            <label for="registration_date" class="block text-sm font-medium text-gray-700">Date of Registration</label>
            <input type="date" id="registration_date" wire:model="registration_date"
                class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('registration_date') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Head Office Location -->
        <div class="sm:col-span-3">
            <label for="head_office_location" class="block text-sm font-medium text-gray-700">Head Office Location</label>
            <input type="text" id="head_office_location" wire:model="head_office_location"
                class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('head_office_location') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Total Employees -->
        <div class="sm:col-span-3">
            <label for="total_employees" class="block text-sm font-medium text-gray-700">Total Employees in Tanzania</label>
            <input type="number" id="total_employees" wire:model="total_employees"
                class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('total_employees') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Total Loan Portfolio -->
        <div class="sm:col-span-3">
            <label for="total_loan_portfolio" class="block text-sm font-medium text-gray-700">Total Loan Portfolio (TZS)</label>
            <input type="text" id="total_loan_portfolio" wire:model="total_loan_portfolio"
                class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('total_loan_portfolio') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Loan Amount in Extractives -->
        <div class="sm:col-span-3">
            <label for="extractive_loan_amount" class="block text-sm font-medium text-gray-700">Loan Portfolio in Extractives - Amount</label>
            <input type="text" id="extractive_loan_amount" wire:model="extractive_loan_amount"
                class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('extractive_loan_amount') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Extractive Loan Percentage -->
        <div class="sm:col-span-3">
            <label for="extractive_loan_percentage" class="block text-sm font-medium text-gray-700">% of Total Loan Portfolio</label>
            <input type="text" id="extractive_loan_percentage" wire:model="extractive_loan_percentage"
                class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('extractive_loan_percentage') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Submit Button -->
        <div class="sm:col-span-6">
            <button type="submit"
                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                Submit
            </button>
        </div>
    </form>
</div>


</div>
