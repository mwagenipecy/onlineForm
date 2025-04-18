<div>


<div class="bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-10 text-center">
            <h1 class="text-3xl font-bold text-gray-900 sm:text-4xl">PROFILING TOOL BRIEF (Miner’s)</h1>
            <p class="mt-3 text-xl text-gray-500">Special Taskforce on Empowering Local Miners in Tanzania</p>
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
    <h3 class="text-lg font-semibold text-gray-800 mb-4">SECTION A: ENUMERATION DETAILS</h3>

    <div class="space-y-6">
        <div>
            <label for="interviewerName" class="block text-sm font-medium text-gray-700">Interviewer Name</label>
            <input id="interviewerName" wire:model="enumeration.interviewerName" type="text"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="interviewDate" class="block text-sm font-medium text-gray-700">Date of Interview</label>
                <input id="interviewDate" wire:model="enumeration.date" type="date"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div>
                <label for="region" class="block text-sm font-medium text-gray-700">Region</label>
                <input id="region" wire:model="enumeration.region" type="text"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="district" class="block text-sm font-medium text-gray-700">District</label>
                <input id="district" wire:model="enumeration.district" type="text"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div>
                <label for="ward" class="block text-sm font-medium text-gray-700">Ward/Village</label>
                <input id="ward" wire:model="enumeration.ward" type="text"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Interview Type:</label>
            <div class="flex flex-wrap gap-4">
                <label class="flex items-center space-x-2">
                    <input type="checkbox" wire:model="enumeration.interviewType.inPerson" value="inPerson"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <span>In-person</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="checkbox" wire:model="enumeration.interviewType.phone" value="phone"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <span>Phone</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="checkbox" wire:model="enumeration.interviewType.radioFeedback" value="radioFeedback"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <span>Radio Feedback</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="checkbox" wire:model="enumeration.interviewType.communityForum" value="communityForum"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <span>Community Forum</span>
                </label>
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Interview Medium:</label>
            <div class="flex flex-wrap gap-4">
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="enumeration.interviewMedium" value="individual"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>Individual</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="enumeration.interviewMedium" value="group"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>Group (FGD)</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="enumeration.interviewMedium" value="kII"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>Key Informant Interview</span>
                </label>
            </div>
        </div>
    </div>
</div>




<div class="bg-white shadow rounded-lg p-6 mt-8">
    <h3 class="text-lg font-semibold text-gray-800 mb-4">SECTION B: RESPONDENT PROFILE & SOCIO-ECONOMIC CONTEXT</h3>

    <div class="space-y-6">
        <div>
            <label for="respondentName" class="block text-sm font-medium text-gray-700">Respondent Name (Optional)</label>
            <input id="respondentName" wire:model="profile.name" type="text"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                <input id="age" wire:model="profile.age" type="number"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Gender</label>
                <div class="flex flex-wrap gap-4">
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="profile.gender" value="male"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>Male</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="profile.gender" value="female"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>Female</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="profile.gender" value="other"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>Other</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="profile.gender" value="prefer_not_to_say"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>Prefer not to say</span>
                    </label>
                </div>
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Primary Role</label>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach (['Miner', 'Processor', 'Trader', 'Association Leader', 'Government Official', 'Community Member', 'Financial Institution'] as $role)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="profile.role" value="{{ $role }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ $role }}</span>
                    </label>
                @endforeach
                <div class="flex items-center space-x-2">
                    <input type="radio" wire:model="profile.role" value="Other"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>Other:</span>
                    <input type="text" wire:model="profile.roleOther"
                           class="ml-2 block w-1/2 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Education Level</label>
            <div class="flex flex-wrap gap-4">
                @foreach (['Primary', "O'Level", "A'Level", 'Bachelors', 'Masters', 'PhD'] as $level)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="profile.education" value="{{ $level }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ $level }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="dependents" class="block text-sm font-medium text-gray-700">Number of Dependents</label>
                <input id="dependents" wire:model="profile.dependents" type="number"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div>
                <label for="householdExpenditure" class="block text-sm font-medium text-gray-700">Average Monthly Household Expenditure (TZS)</label>
                <input id="householdExpenditure" wire:model="profile.householdExpenditure" type="number"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Other Sources of Household Income</label>
            <div class="flex flex-wrap gap-4">
                @foreach (['Agriculture', 'Livestock', 'Informal business', 'Employment', 'None'] as $source)
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" wire:model="profile.incomeSources.{{ Str::slug($source) }}" value="{{ $source }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span>{{ $source }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Do you or any household member have a disability?</label>
            <div class="flex flex-wrap gap-4">
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="profile.hasDisability" value="yes"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>Yes</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="profile.hasDisability" value="no"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>No</span>
                </label>
            </div>

            @if ($profile['hasDisability'] === 'yes')
                <div class="mt-2">
                    <label for="disabilityDetail" class="block text-sm font-medium text-gray-700">If yes, specify</label>
                    <input id="disabilityDetail" wire:model="profile.disabilityDetail" type="text"
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            @endif
        </div>
    </div>
</div>





<div class="bg-white shadow rounded-lg p-6 mt-8">
    <h3 class="text-lg font-semibold text-gray-800 mb-4">SECTION C: OPERATIONAL STATUS OF MINING ACTIVITY</h3>

    <div class="space-y-6">
        <!-- Nature of Mining Work -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Nature of Mining Work</label>
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
                    <span>Other:</span>
                    <input type="text" wire:model="miningActivity.nature.other"
                           class="ml-2 block w-1/2 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            </div>
        </div>

        <!-- License Ownership and Status -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">License Ownership and Status</label>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">Type</label>
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
                    <label class="block text-sm font-medium text-gray-600 mb-1">Status</label>
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
            <label for="yearsOperation" class="block text-sm font-medium text-gray-700">Years in Operation</label>
            <input id="yearsOperation" wire:model="miningActivity.yearsInOperation" type="number"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <!-- Number of Workers -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="maleWorkers" class="block text-sm font-medium text-gray-700">Number of Male Workers</label>
                <input id="maleWorkers" wire:model="miningActivity.workers.male" type="number"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div>
                <label for="femaleWorkers" class="block text-sm font-medium text-gray-700">Number of Female Workers</label>
                <input id="femaleWorkers" wire:model="miningActivity.workers.female" type="number"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
        </div>

        <!-- Ownership Structure -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Ownership Structure</label>
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
            <label class="block text-sm font-medium text-gray-700 mb-2">Main Tools Used</label>
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
                    <span>Other:</span>
                    <input type="text" wire:model="miningActivity.tools.other"
                           class="ml-2 block w-1/2 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            </div>
        </div>

        <!-- Production Output -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Production Output (Estimated)</label>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="outputKg" class="block text-sm text-gray-600">Kg per month</label>
                    <input id="outputKg" wire:model="miningActivity.outputKg" type="number"
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div>
                    <label for="outputTons" class="block text-sm text-gray-600">Tons per month</label>
                    <input id="outputTons" wire:model="miningActivity.outputTons" type="number"
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            </div>
        </div>
    </div>
</div>





<div class="bg-white shadow rounded-lg p-6 mt-8">
    <h3 class="text-lg font-semibold text-gray-800 mb-4">SECTION D: FINANCIAL ACCESS, CREDITWORTHINESS & RISK PERCEPTION</h3>

    <div class="space-y-6">
        <!-- Main Capital Sources -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Main Capital Sources (tick all that apply)</label>
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
            <label class="block text-sm font-medium text-gray-700 mb-2">Have you ever applied for a loan from a financial institution?</label>
            <div class="flex gap-6">
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="finance.appliedForLoan" value="yes"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>Yes</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="finance.appliedForLoan" value="no"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>No</span>
                </label>
            </div>
        </div>

        <!-- Loan Application Outcome -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">If applied, what was the outcome?</label>
            <div class="flex gap-6">
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
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Barriers to Accessing Bank Loan (tick all)</label>
            <div class="flex flex-wrap gap-4">
                @foreach (['Collateral', 'Documentation', 'Interest Rates', 'Lack of Trust', 'Poor Credit History', 'Awareness'] as $barrier)
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" wire:model="finance.loanBarriers.{{ Str::slug($barrier) }}" value="{{ $barrier }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span>{{ $barrier }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Bank Account -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Do you have an active bank account?</label>
            <div class="flex gap-6">
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="finance.hasBankAccount" value="yes"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>Yes</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="finance.hasBankAccount" value="no"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>No</span>
                </label>
            </div>
        </div>

        <!-- Financial Document Handling -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Can you manage financial documents (e.g. loan forms)?</label>
            <div class="flex gap-6">
                @foreach (['Yes', 'No', 'Somewhat'] as $answer)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="finance.manageDocs" value="{{ strtolower($answer) }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ $answer }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Loan Access Suggestions -->
        <div>
            <label for="loanSuggestions" class="block text-sm font-medium text-gray-700">Suggestions for improving access to loans</label>
            <textarea id="loanSuggestions" wire:model="finance.loanSuggestions"
                      class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                      rows="3"></textarea>
        </div>

        <!-- Creditworthiness -->
        <div class="border-t pt-4 mt-4">
            <h4 class="text-md font-semibold text-gray-800 mb-2">Creditworthiness</h4>

            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Outstanding debts/loans?</label>
                    <div class="flex gap-6">
                        <label class="flex items-center space-x-2">
                            <input type="radio" wire:model="finance.hasDebt" value="yes"
                                   class="text-blue-600 focus:ring-blue-500 border-gray-300">
                            <span>Yes</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" wire:model="finance.hasDebt" value="no"
                                   class="text-blue-600 focus:ring-blue-500 border-gray-300">
                            <span>No</span>
                        </label>
                    </div>
                    @if ($finance['hasDebt'] === 'yes')
                        <div class="mt-2">
                            <label for="debtSource" class="block text-sm font-medium text-gray-700">Source</label>
                            <input id="debtSource" wire:model="finance.debtSource" type="text"
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                    @endif
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Do you keep written records of income/sales?</label>
                    <div class="flex gap-6">
                        <label class="flex items-center space-x-2">
                            <input type="radio" wire:model="finance.keepRecords" value="yes"
                                   class="text-blue-600 focus:ring-blue-500 border-gray-300">
                            <span>Yes</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" wire:model="finance.keepRecords" value="no"
                                   class="text-blue-600 focus:ring-blue-500 border-gray-300">
                            <span>No</span>
                        </label>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Update frequency:</label>
                    <div class="flex gap-4">
                        @foreach (['Daily', 'Weekly', 'Monthly', 'Rarely'] as $freq)
                            <label class="flex items-center space-x-2">
                                <input type="radio" wire:model="finance.recordFrequency" value="{{ strtolower($freq) }}"
                                       class="text-blue-600 focus:ring-blue-500 border-gray-300">
                                <span>{{ $freq }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <label for="miningIncome" class="block text-sm font-medium text-gray-700">Estimated monthly mining income (TZS)</label>
                    <input id="miningIncome" wire:model="finance.monthlyIncome" type="number"
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Assets usable as collateral (tick all)</label>
                    <div class="flex flex-wrap gap-4">
                        @foreach (['Land', 'Equipment', 'Vehicles', 'Savings', 'Minerals', 'None'] as $asset)
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" wire:model="finance.collateral.{{ Str::slug($asset) }}" value="{{ $asset }}"
                                       class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <span>{{ $asset }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Loan repayment history</label>
                    <div class="flex gap-6">
                        @foreach (['Fully repaid', 'Partially', 'Never', 'Not applicable'] as $repay)
                            <label class="flex items-center space-x-2">
                                <input type="radio" wire:model="finance.repaymentHistory" value="{{ $repay }}"
                                       class="text-blue-600 focus:ring-blue-500 border-gray-300">
                                <span>{{ $repay }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Willing to join a peer-guaranteed loan group?</label>
                    <div class="flex gap-6">
                        @foreach (['Yes', 'No', 'Maybe'] as $response)
                            <label class="flex items-center space-x-2">
                                <input type="radio" wire:model="finance.peerLoanGroup" value="{{ strtolower($response) }}"
                                       class="text-blue-600 focus:ring-blue-500 border-gray-300">
                                <span>{{ $response }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Member of savings/loan group (e.g. VICOBA)?</label>
                    <div class="flex items-center space-x-4">
                        <label class="flex items-center space-x-2">
                            <input type="radio" wire:model="finance.savingsGroupMember" value="yes"
                                   class="text-blue-600 focus:ring-blue-500 border-gray-300">
                            <span>Yes</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" wire:model="finance.savingsGroupMember" value="no"
                                   class="text-blue-600 focus:ring-blue-500 border-gray-300">
                            <span>No</span>
                        </label>
                        @if ($finance['savingsGroupMember'] === 'yes')
                            <input type="text" wire:model="finance.savingsGroupName"
                                   class="ml-4 block w-1/2 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                   placeholder="Group name/type">
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Financial Behavior & Risk Perception -->
        <div class="border-t pt-4 mt-4">
            <h4 class="text-md font-semibold text-gray-800 mb-2">Financial Behavior & Risk Perception</h4>

            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">How often do you save income?</label>
                    <div class="flex flex-wrap gap-4">
                        @foreach (['Daily', 'Weekly', 'Monthly', 'Rarely', 'Never'] as $freq)
                            <label class="flex items-center space-x-2">
                                <input type="radio" wire:model="finance.savingFrequency" value="{{ strtolower($freq) }}"
                                       class="text-blue-600 focus:ring-blue-500 border-gray-300">
                                <span>{{ $freq }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Do you use a budget?</label>
                    <div class="flex gap-6">
                        @foreach (['Yes', 'No', 'Sometimes'] as $option)
                            <label class="flex items-center space-x-2">
                                <input type="radio" wire:model="finance.useBudget" value="{{ strtolower($option) }}"
                                       class="text-blue-600 focus:ring-blue-500 border-gray-300">
                                <span>{{ $option }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Do you use digital financial tools (apps, mobile banking)?</label>
                    <div class="flex gap-6">
                        <label class="flex items-center space-x-2">
                            <input type="radio" wire:model="finance.useDigitalTools" value="yes"
                                   class="text-blue-600 focus:ring-blue-500 border-gray-300">
                            <span>Yes</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" wire:model="finance.useDigitalTools" value="no"
                                   class="text-blue-600 focus:ring-blue-500 border-gray-300">
                            <span>No</span>
                        </label>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">What financial risks concern you most?</label>
                    <div class="flex flex-wrap gap-4">
                        @foreach (['Mineral price drops', 'Equipment failure', 'Theft', 'Loan repayment difficulty', 'Market access'] as $risk)
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" wire:model="finance.risks.{{ Str::slug($risk) }}" value="{{ $risk }}"
                                       class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <span>{{ $risk }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <label for="debtPercent" class="block text-sm font-medium text-gray-700">Percentage of income spent on debt repayment (%)</label>
                    <input id="debtPercent" wire:model="finance.debtRepaymentPercent" type="number" min="0" max="100"
                           class="mt-1 block w-1/2 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            </div>
        </div>
    </div>
</div>



<div class="bg-white shadow rounded-lg p-6 mt-8">
    <h3 class="text-lg font-semibold text-gray-800 mb-4">SECTION E: TECHNICAL CAPACITY AND SUPPORT NEEDS</h3>

    <div class="space-y-6">
        <!-- Training Received -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Training Received in the past 3 years (tick all that apply)</label>
            <div class="flex flex-wrap gap-4">
                @foreach (['Mining methods', 'Safety', 'Environment', 'Business skills', 'Legal literacy', 'None'] as $training)
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" wire:model="technical.trainingReceived.{{ Str::slug($training) }}" value="{{ $training }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <span>{{ $training }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Training Needs (priority 1–5) -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Training Needs (rate each from 1–5)</label>
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
                        <label class="w-56 text-sm text-gray-700">{{ $label }}</label>
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
            <label class="block text-sm font-medium text-gray-700 mb-2">Can you operate or repair mining tools yourself?</label>
            <div class="flex gap-6">
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="technical.toolOperation" value="yes"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>Yes</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="technical.toolOperation" value="no"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>No</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="technical.toolOperation" value="partially"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>Partially</span>
                </label>
            </div>
        </div>

        <!-- Tool Upgrades -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Have you upgraded any tools in the last 2 years?</label>
            <div class="flex gap-6">
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="technical.toolUpgrade" value="yes"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>Yes</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="technical.toolUpgrade" value="no"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>No</span>
                </label>
            </div>

            @if ($technical['toolUpgrade'] === 'no')
                <div class="mt-2">
                    <label for="noUpgradeReason" class="block text-sm font-medium text-gray-700">If no, why?</label>
                    <input id="noUpgradeReason" wire:model="technical.noUpgradeReason" type="text"
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            @endif
        </div>

        <!-- Technical Support Received -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Have you received technical support before?</label>
            <div class="flex gap-6">
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="technical.receivedSupport" value="yes"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>Yes</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="technical.receivedSupport" value="no"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>No</span>
                </label>
            </div>

            @if ($technical['receivedSupport'] === 'yes')
                <div class="mt-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">From:</label>
                    <div class="flex flex-wrap gap-4">
                        @foreach (['Government', 'NGO', 'Private Sector', 'Other'] as $source)
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" wire:model="technical.supportFrom.{{ Str::slug($source) }}" value="{{ $source }}"
                                       class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <span>{{ $source }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>








<div class="bg-white shadow rounded-lg p-6 mt-8">
    <h3 class="text-lg font-semibold text-gray-800 mb-4">SECTION F: ENVIRONMENTAL PRACTICES & COMPLIANCE</h3>

    <div class="space-y-6">
        <!-- Awareness of Guidelines -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Are you aware of environmental guidelines for miners?</label>
            <div class="flex gap-6">
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="environmental.awareness" value="yes"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>Yes</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="environmental.awareness" value="no"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>No</span>
                </label>
            </div>
        </div>

        <!-- Practices Followed -->
        <div>
            <label for="practicesFollowed" class="block text-sm font-medium text-gray-700">What practices do you follow?</label>
            <textarea id="practicesFollowed" wire:model="environmental.practices"
                      class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                      rows="3"></textarea>
        </div>

        <!-- Use of Mercury/Cyanide -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Do you use mercury or cyanide?</label>
            <div class="flex flex-wrap gap-6">
                <label class="flex items-center space-x-2">
                    <input type="checkbox" wire:model="environmental.chemicals.mercury" value="Mercury"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <span>Mercury</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="checkbox" wire:model="environmental.chemicals.cyanide" value="Cyanide"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <span>Cyanide</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="checkbox" wire:model="environmental.chemicals.none" value="None"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <span>None</span>
                </label>
            </div>
        </div>

        <!-- Inspection History -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Ever been inspected by a government environmental officer?</label>
            <div class="flex gap-6">
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="environmental.inspected" value="yes"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>Yes</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="environmental.inspected" value="no"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>No</span>
                </label>
            </div>
        </div>

        <!-- Restoration Efforts -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Do you restore mined land after use?</label>
            <div class="flex gap-6">
                @foreach (['Yes', 'No', 'Sometimes'] as $option)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="environmental.landRestoration" value="{{ strtolower($option) }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ $option }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Climate Impacts -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Experienced climate-related impacts (e.g. floods)?</label>
            <div class="flex gap-6">
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="environmental.climateImpact" value="yes"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>Yes</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="environmental.climateImpact" value="no"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>No</span>
                </label>
            </div>

            @if ($environmental['climateImpact'] === 'yes')
                <div class="mt-2">
                    <label for="climateType" class="block text-sm font-medium text-gray-700">Type</label>
                    <input id="climateType" wire:model="environmental.climateType" type="text"
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            @endif
        </div>
    </div>
</div>





<div class="bg-white shadow rounded-lg p-6 mt-8">
    <h3 class="text-lg font-semibold text-gray-800 mb-4">SECTION G: COMMUNITY & GENDER DYNAMICS</h3>

    <div class="space-y-6">
        <!-- Community Impact -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">How does mining affect your community?</label>
            <div class="flex gap-6">
                @foreach (['Positively', 'Negatively', 'Mixed'] as $impact)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="community.impact" value="{{ strtolower($impact) }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ $impact }}</span>
                    </label>
                @endforeach
            </div>

            <div class="mt-2">
                <label for="impactExplain" class="block text-sm font-medium text-gray-700">Explain</label>
                <textarea id="impactExplain" wire:model="community.impactExplanation"
                          class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                          rows="2"></textarea>
            </div>
        </div>

        <!-- Women Involvement -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Are women involved in mining here?</label>
            <div class="flex gap-6">
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="community.womenInvolved" value="yes"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>Yes</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="community.womenInvolved" value="no"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>No</span>
                </label>
            </div>

            @if ($community['womenInvolved'] === 'yes')
                <div class="mt-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Roles (tick all that apply)</label>
                    <div class="flex flex-wrap gap-4">
                        @foreach (['Digging', 'Processing', 'Sorting', 'Trading', 'Admin'] as $role)
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" wire:model="community.womenRoles.{{ Str::slug($role) }}" value="{{ $role }}"
                                       class="text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <span>{{ $role }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>

        <!-- Conflict Existence -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Conflicts related to mining in the area?</label>
            <div class="flex gap-6">
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="community.hasConflict" value="yes"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>Yes</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="community.hasConflict" value="no"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>No</span>
                </label>
            </div>

            @if ($community['hasConflict'] === 'yes')
                <div class="mt-2">
                    <label for="conflictNature" class="block text-sm font-medium text-gray-700">Nature of conflict</label>
                    <input id="conflictNature" wire:model="community.conflictNature" type="text"
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            @endif
        </div>

        <!-- Inclusiveness & Peace -->
        <div>
            <label for="inclusivenessSuggestions" class="block text-sm font-medium text-gray-700">How can mining be more inclusive and peaceful?</label>
            <textarea id="inclusivenessSuggestions" wire:model="community.inclusivenessSuggestions"
                      class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                      rows="3"></textarea>
        </div>
    </div>
</div>





<div class="bg-white shadow rounded-lg p-6 mt-8">
    <h3 class="text-lg font-semibold text-gray-800 mb-4">SECTION H: POLICY INSIGHT, TRUST & REFORM READINESS</h3>

    <div class="space-y-6">
        <!-- Trust Rating -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Do you trust these institutions? (Rate 1–5)</label>
            <div class="space-y-3">
                @foreach ([
                    'Mining Commission' => 'miningCommission',
                    'Local Government' => 'localGovernment',
                    'Banks/Financial Institutions' => 'banks',
                    'Large-scale Miners' => 'largeMiners',
                    'Miners’ Associations' => 'minersAssociations'
                ] as $label => $field)
                    <div class="flex items-center gap-4">
                        <label class="w-56 text-sm text-gray-700">{{ $label }}</label>
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
            <label class="block text-sm font-medium text-gray-700 mb-2">Are you aware of government support programs for miners?</label>
            <div class="flex gap-6">
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="policy.govSupportAwareness" value="yes"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>Yes</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="policy.govSupportAwareness" value="no"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>No</span>
                </label>
            </div>

            @if ($policy['govSupportAwareness'] === 'yes')
                <div class="mt-2">
                    <label for="govSupportExamples" class="block text-sm font-medium text-gray-700">Examples</label>
                    <input id="govSupportExamples" wire:model="policy.govSupportExamples" type="text"
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            @endif
        </div>

        <!-- Policy Bias Perception -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Do you think policies favor large-scale miners over small ones?</label>
            <div class="flex gap-6">
                @foreach (['Yes', 'No', 'Not sure'] as $option)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="policy.policyBias" value="{{ strtolower($option) }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ $option }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Willingness to Pay Tax -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Would you support paying formal tax if linked to better services?</label>
            <div class="flex gap-6">
                @foreach (['Yes', 'No', 'Maybe'] as $option)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="policy.payTaxForServices" value="{{ strtolower($option) }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ $option }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Reform Suggestions -->
        <div>
            <label for="reformSuggestions" class="block text-sm font-medium text-gray-700">What reforms or changes would improve the mining sector?</label>
            <textarea id="reformSuggestions" wire:model="policy.reformSuggestions"
                      class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                      rows="3"></textarea>
        </div>
    </div>
</div>




<div class="bg-white shadow rounded-lg p-6 mt-8">
    <h3 class="text-lg font-semibold text-gray-800 mb-4">SECTION I: FEEDBACK ON PROPOSED REFORMS</h3>

    <div class="space-y-6">
        <!-- Awareness of Reforms -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Have you heard about the proposed Miners’ Bank or Sovereign Fund?</label>
            <div class="flex gap-6">
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="reformFeedback.heardOfProposals" value="yes"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>Yes</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" wire:model="reformFeedback.heardOfProposals" value="no"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                    <span>No</span>
                </label>
            </div>
        </div>

        <!-- Support Level -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Do you support these proposals?</label>
            <div class="flex flex-wrap gap-4">
                @foreach (['Strongly Support', 'Support', 'Neutral', 'Oppose'] as $option)
                    <label class="flex items-center space-x-2">
                        <input type="radio" wire:model="reformFeedback.supportLevel" value="{{ strtolower(str_replace(' ', '_', $option)) }}"
                               class="text-blue-600 focus:ring-blue-500 border-gray-300">
                        <span>{{ $option }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Why or Why Not -->
        <div>
            <label for="reformReason" class="block text-sm font-medium text-gray-700">Why or why not?</label>
            <textarea id="reformReason" wire:model="reformFeedback.reasons"
                      class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                      rows="3"></textarea>
        </div>

        <!-- Suggestions -->
        <div>
            <label for="policySuggestions" class="block text-sm font-medium text-gray-700">Suggestions for better policies or services for small miners</label>
            <textarea id="policySuggestions" wire:model="reformFeedback.policySuggestions"
                      class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                      rows="3"></textarea>
        </div>

        <!-- Enumerator Observations -->
        <div>
            <label for="enumeratorObservations" class="block text-sm font-medium text-gray-700">Enumerator Observations (Optional)</label>
            <textarea id="enumeratorObservations" wire:model="reformFeedback.enumeratorNotes"
                      class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                      rows="3"></textarea>
        </div>
    </div>
</div>




<div class="mt-8 flex justify-end">
    <button wire:click="save"
            class="px-6 py-2 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
        Submit Form
    </button>

    @if (session()->has('success'))
        <p class="mt-2 text-green-600 text-sm">{{ session('success') }}</p>
    @endif
</div>









</div>

</div>



</div>
