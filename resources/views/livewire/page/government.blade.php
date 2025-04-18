<div>
   

{{-- resources/views/livewire/government-data-form.blade.php --}}
<div class="bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-10 text-center">
            <h1 class="text-3xl font-bold text-gray-900 sm:text-4xl">Government Data Profiling Tool</h1>
            <p class="mt-3 text-xl text-gray-500">Special Taskforce on Empowering Local Miners in Tanzania</p>
        </div>

        @if (session()->has('message'))
            <div class="mb-8 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('message') }}</span>
            </div>
        @endif

        <form wire:submit.prevent="submit" class="space-y-12">
            <!-- Section A: Official Identification -->
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">SECTION A: OFFICIAL IDENTIFICATION</h3>
                </div>
                <div class="px-4 py-5 sm:p-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="fullName" class="block text-sm font-medium text-gray-700">Full Name of Official</label>
                        <div class="mt-1">
                            <input type="text" wire:model="fullName" id="fullName" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            @error('fullName') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="position" class="block text-sm font-medium text-gray-700">Position/Title</label>
                        <div class="mt-1">
                            <input type="text" wire:model="position" id="position" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            @error('position') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="institution" class="block text-sm font-medium text-gray-700">Institution/Department</label>
                        <div class="mt-1">
                            <input type="text" wire:model="institution" id="institution" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            @error('institution') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="region" class="block text-sm font-medium text-gray-700">Region</label>
                        <div class="mt-1">
                            <input type="text" wire:model="region" id="region" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            @error('region') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="districts" class="block text-sm font-medium text-gray-700">District(s) Covered</label>
                        <div class="mt-1">
                            <input type="text" wire:model="districts" id="districts" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label class="block text-sm font-medium text-gray-700">Ward-Level Data Available?</label>
                        <div class="mt-1 flex items-center">
                            <div class="flex items-center">
                                <input id="wardYes" wire:model="wardLevelDataAvailable" type="radio" value="1" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                <label for="wardYes" class="ml-2 block text-sm text-gray-700">Yes</label>
                            </div>
                            <div class="flex items-center ml-6">
                                <input id="wardNo" wire:model="wardLevelDataAvailable" type="radio" value="0" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                <label for="wardNo" class="ml-2 block text-sm text-gray-700">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="contactInfo" class="block text-sm font-medium text-gray-700">Email / Phone Contact</label>
                        <div class="mt-1">
                            <input type="text" wire:model="contactInfo" id="contactInfo" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="submissionDate" class="block text-sm font-medium text-gray-700">Date of Submission</label>
                        <div class="mt-1">
                            <input type="date" wire:model="submissionDate" id="submissionDate" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section B: Quantitative Stakeholder Enumeration -->
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">SECTION B: QUANTITATIVE STAKEHOLDER ENUMERATION</h3>
                    <p class="mt-1 text-sm text-gray-500">Provide counts and characteristics for each stakeholder group. Indicate if figures are approximate or based on records.</p>
                </div>
                <div class="px-4 py-5 sm:p-6 overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stakeholder Category</th>
                                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Count</th>
                                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">% Licensed</th>
                                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">% Women-Led</th>
                                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">% Youth-Led</th>
                                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">% Active</th>
                                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ward Coverage (#)</th>
                                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Data Source</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <!-- Individual Small-Scale Miners -->
                            <tr>
                                <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Individual Small-Scale Miners</td>
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
                                    <input type="text" wire:model="stakeholders.individualMiners.dataSource" placeholder="e.g. registry, estimate" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </td>
                            </tr>
                            
                            <!-- Mining Cooperatives -->
                            <tr>
                                <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Mining Cooperatives</td>
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
                                    <input type="text" wire:model="stakeholders.miningCooperatives.dataSource" placeholder="e.g. registry, estimate" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </td>
                            </tr>
                            
                            <!-- Template for other stakeholders - add similar rows for each stakeholder type -->
                            <!-- For brevity, I'm showing just two examples. You would repeat this pattern for all stakeholder types -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Section C: Mining Operational Characteristics -->
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">SECTION C: MINING OPERATIONAL CHARACTERISTICS</h3>
                </div>
                <div class="px-4 py-5 sm:p-6">
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Main Minerals Extracted (tick all that apply):</label>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div class="flex items-center">
                                <input id="mineralGold" wire:model="mineralsExtracted.gold" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <label for="mineralGold" class="ml-2 block text-sm text-gray-700">Gold</label>
                            </div>
                            <div class="flex items-center">
                                <input id="mineralTanzanite" wire:model="mineralsExtracted.tanzanite" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <label for="mineralTanzanite" class="ml-2 block text-sm text-gray-700">Tanzanite</label>
                            </div>
                            <div class="flex items-center">
                                <input id="mineralGemstones" wire:model="mineralsExtracted.gemstones" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <label for="mineralGemstones" class="ml-2 block text-sm text-gray-700">Gemstones</label>
                            </div>
                            <div class="flex items-center">
                                <input id="mineralSalt" wire:model="mineralsExtracted.salt" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <label for="mineralSalt" class="ml-2 block text-sm text-gray-700">Salt</label>
                            </div>
                            <div class="flex items-center">
                                <input id="mineralIndustrial" wire:model="mineralsExtracted.industrialMinerals" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <label for="mineralIndustrial" class="ml-2 block text-sm text-gray-700">Industrial Minerals</label>
                            </div>
                            <div class="flex items-center">
                                <input id="mineralConstruction" wire:model="mineralsExtracted.constructionMaterials" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <label for="mineralConstruction" class="ml-2 block text-sm text-gray-700">Construction Materials</label>
                            </div>
                            <div class="flex items-center">
                                <input id="mineralOther" wire:model="mineralsExtracted.other" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <label for="mineralOther" class="ml-2 block text-sm text-gray-700">Other</label>
                            </div>
                            @if($mineralsExtracted['other'])
                                <div>
                                    <input type="text" wire:model="otherMineralType" placeholder="Specify other" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Estimated Share of Mining Operation Types:</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="operationIndividual" class="block text-sm text-gray-700">Individual Miners (%)</label>
                                <input type="number" min="0" max="100" wire:model="operationTypes.individualMiners" id="operationIndividual" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div>
                                <label for="operationCooperatives" class="block text-sm text-gray-700">Cooperatives (%)</label>
                                <input type="number" min="0" max="100" wire:model="operationTypes.cooperatives" id="operationCooperatives" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div>
                                <label for="operationInformal" class="block text-sm text-gray-700">Informal Groups (%)</label>
                                <input type="number" min="0" max="100" wire:model="operationTypes.informalGroups" id="operationInformal" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div>
                                <label for="operationJointVentures" class="block text-sm text-gray-700">Joint Ventures (%)</label>
                                

                                <input type="number" min="0" max="100" wire:model="operationTypes.jointVentures" id="operationJointVentures" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div>
                                <label for="operationLargeScale" class="block text-sm text-gray-700">Large-Scale Partnerships (%)</label>
                                <input type="number" min="0" max="100" wire:model="operationTypes.largeScalePartnerships" id="operationLargeScale" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Common Tools/Technologies Used (tick all that apply):</label>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                            <div class="flex items-center">
                                <input id="toolManual" wire:model="toolsUsed.manualTools" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <label for="toolManual" class="ml-2 block text-sm text-gray-700">Manual Tools</label>
                            </div>
                            <div class="flex items-center">
                                <input id="toolCrushers" wire:model="toolsUsed.poweredCrushers" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <label for="toolCrushers" class="ml-2 block text-sm text-gray-700">Powered Crushers</label>
                            </div>
                            <div class="flex items-center">
                                <input id="toolBallMills" wire:model="toolsUsed.ballMills" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <label for="toolBallMills" class="ml-2 block text-sm text-gray-700">Ball Mills</label>
                            </div>
                            <div class="flex items-center">
                                <input id="toolMercury" wire:model="toolsUsed.mercury" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <label for="toolMercury" class="ml-2 block text-sm text-gray-700">Mercury</label>
                            </div>
                            <div class="flex items-center">
                                <input id="toolCyanide" wire:model="toolsUsed.cyanide" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <label for="toolCyanide" class="ml-2 block text-sm text-gray-700">Cyanide</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Safety Equipment Used:</label>
                        <div class="flex flex-wrap space-x-6">
                            <div class="flex items-center">
                                <input id="safetyYes" wire:model="safetyEquipmentUsed" type="radio" value="yes" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                <label for="safetyYes" class="ml-2 block text-sm text-gray-700">Yes</label>
                            </div>
                            <div class="flex items-center">
                                <input id="safetyNo" wire:model="safetyEquipmentUsed" type="radio" value="no" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                <label for="safetyNo" class="ml-2 block text-sm text-gray-700">No</label>
                            </div>
                            <div class="flex items-center">
                                <input id="safetyRarely" wire:model="safetyEquipmentUsed" type="radio" value="rarely" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                <label for="safetyRarely" class="ml-2 block text-sm text-gray-700">Rarely</label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Support Services Present in Region (tick all that apply):</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex items-center">
                                <input id="serviceVicoba" wire:model="supportServices.vicoba" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <label for="serviceVicoba" class="ml-2 block text-sm text-gray-700">VICOBA / Savings Groups</label>
                            </div>
                            <div class="flex items-center">
                                <input id="serviceMobile" wire:model="supportServices.mobileMoneyAgents" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <label for="serviceMobile" class="ml-2 block text-sm text-gray-700">Mobile Money Agents</label>
                            </div>
                            <div class="flex items-center">
                                <input id="serviceGovt" wire:model="supportServices.governmentExtensionOfficers" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <label for="serviceGovt" class="ml-2 block text-sm text-gray-700">Government Extension Officers</label>
                            </div>
                            <div class="flex items-center">
                                <input id="serviceEnv" wire:model="supportServices.environmentalInspectors" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <label for="serviceEnv" class="ml-2 block text-sm text-gray-700">Environmental Inspectors</label>
                            </div>
                            <div class="flex items-center">
                                <input id="serviceLegal" wire:model="supportServices.legalAidServices" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <label for="serviceLegal" class="ml-2 block text-sm text-gray-700">Legal Aid Services</label>
                            </div>
                            <div class="flex items-center">
                                <input id="serviceGeo" wire:model="supportServices.geologicalSurveySupport" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <label for="serviceGeo" class="ml-2 block text-sm text-gray-700">Geological Survey Support</label>
                            </div>
                            <div class="flex items-center">
                                <input id="serviceFinancial" wire:model="supportServices.financialLiteracyPrograms" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <label for="serviceFinancial" class="ml-2 block text-sm text-gray-700">Financial Literacy Programs</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section D: Stakeholder Organization & Coordination -->
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">SECTION D: STAKEHOLDER ORGANIZATION & COORDINATION</h3>
                </div>
                <div class="px-4 py-5 sm:p-6">
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Do stakeholders meet in structured forums?</label>
                        <div class="flex flex-wrap space-x-6">
                            <div class="flex items-center">
                                <input id="forumYes" wire:model="structuredForumsExist" type="radio" value="yes" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                <label for="forumYes" class="ml-2 block text-sm text-gray-700">Yes</label>
                            </div>
                            <div class="flex items-center">
                                <input id="forumOccasionally" wire:model="structuredForumsExist" type="radio" value="occasionally" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                <label for="forumOccasionally" class="ml-2 block text-sm text-gray-700">Occasionally</label>
                            </div>
                            <div class="flex items-center">
                                <input id="forumNo" wire:model="structuredForumsExist" type="radio" value="no" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                <label for="forumNo" class="ml-2 block text-sm text-gray-700">No formal platform exists</label>
                            </div>
                        </div>

                        @if($structuredForumsExist === 'yes')
                            <div class="mt-3">
                                <label for="forumCoordinator" class="block text-sm text-gray-700">Coordinated by:</label>
                                <input type="text" wire:model="forumCoordinator" id="forumCoordinator" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                        @endif
                    </div>

                    <div class="mb-8">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Are FEMATA chapters or cooperatives active regionally?</label>
                        <div class="flex flex-wrap space-x-6">
                            <div class="flex items-center">
                                <input id="femataYes" wire:model="femataActive" type="radio" value="yes" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                <label for="femataYes" class="ml-2 block text-sm text-gray-700">Yes</label>
                            </div>
                            <div class="flex items-center">
                                <input id="femataNo" wire:model="femataActive" type="radio" value="no" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                <label for="femataNo" class="ml-2 block text-sm text-gray-700">No</label>
                            </div>
                            <div class="flex items-center">
                                <input id="femataUnknown" wire:model="femataActive" type="radio" value="unknown" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                <label for="femataUnknown" class="ml-2 block text-sm text-gray-700">Unknown</label>
                            </div>
                        </div>

                        @if($femataActive === 'yes')
                            <div class="mt-3">
                                <label for="femataChapters" class="block text-sm text-gray-700">Number:</label>
                                <input type="number" wire:model="femataChapters" id="femataChapters" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                        @endif
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Coordination Mechanisms:</label>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mechanism</th>
                                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Exists?</th>
                                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Frequency</th>
                                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Challenges</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">ASM Forum / Stakeholder Dialogue</td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <input type="checkbox" wire:model="coordinationMechanisms.asmForum.exists" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                        </td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <input type="text" wire:model="coordinationMechanisms.asmForum.frequency" placeholder="e.g. monthly" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <input type="text" wire:model="coordinationMechanisms.asmForum.challenges" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Conflict Mediation Platforms</td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <input type="checkbox" wire:model="coordinationMechanisms.conflictMediation.exists" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                        </td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <input type="text" wire:model="coordinationMechanisms.conflictMediation.frequency" placeholder="e.g. monthly" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <input type="text" wire:model="coordinationMechanisms.conflictMediation.challenges" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">LGA–Miner Liaison Committee</td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <input type="checkbox" wire:model="coordinationMechanisms.lgaLiaison.exists" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                        </td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <input type="text" wire:model="coordinationMechanisms.lgaLiaison.frequency" placeholder="e.g. monthly" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <input type="text" wire:model="coordinationMechanisms.lgaLiaison.challenges" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Women-in-Mining Coordination Groups</td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <input type="checkbox" wire:model="coordinationMechanisms.womenGroups.exists" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                        </td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <input type="text" wire:model="coordinationMechanisms.womenGroups.frequency" placeholder="e.g. monthly" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <input type="text" wire:model="coordinationMechanisms.womenGroups.challenges" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section E: Policy Priorities & Reform Awareness -->
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">SECTION E: POLICY PRIORITIES & REFORM AWARENESS</h3>
                </div>
                <div class="px-4 py-5 sm:p-6">
                    <div class="mb-8">
                        <label class="block text-sm font-medium text-gray-700 mb-3">Top 3 Recurring Issues Raised by Stakeholders:</label>
                        <div class="space-y-3">
                            <div>
                                <label for="issue1" class="block text-xs text-gray-500">1.</label>
                                <input type="text" wire:model="recurringIssues.0" id="issue1" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div>
                                <label for="issue2" class="block text-xs text-gray-500">2.</label>
                                <input type="text" wire:model="recurringIssues.1" id="issue2" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div>
                                <label for="issue3" class="block text-xs text-gray-500">3.</label>
                                <input type="text" wire:model="recurringIssues.2" id="issue3" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-8">
                        <label class="block text-sm font-medium text-gray-700 mb-3">Rank Policy Areas by Priority (1 = highest, 5 = lowest):</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="policyLicensing" class="block text-sm text-gray-700">Licensing Efficiency</label>
                                <input type="number" min="1" max="5" wire:model="policyPriorities.licensingEfficiency" id="policyLicensing" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div>
                                <label for="policyFinance" class="block text-sm text-gray-700">Access to Finance</label>
                                <input type="number" min="1" max="5" wire:model="policyPriorities.accessToFinance" id="policyFinance" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div>
                                <label for="policyEnvironmental" class="block text-sm text-gray-700">Environmental Enforcement</label>
                                <input type="number" min="1" max="5" wire:model="policyPriorities.environmentalEnforcement" id="policyEnvironmental" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div>
                                <label for="policyMarket" class="block text-sm text-gray-700">Market Access & Pricing</label>
                                <input type="number" min="1" max="5" wire:model="policyPriorities.marketAccess" id="policyMarket" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div>
                                <label for="policyEquipment" class="block text-sm text-gray-700">Equipment/Technical Skills</label>
                                <input type="number" min="1" max="5" wire:model="policyPriorities.equipmentTechnicalSkills" id="policyEquipment" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-3">Awareness and Support for Key Reforms:</label>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reform Proposal</th>
                                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Awareness Level</th>
                                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Support Level</th>
                                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Comments</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Miners' Bank</td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <select wire:model="reformAwareness.minersBank.awareness" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                <option value="">Select level</option>
                                                <option value="high">High</option>
                                                <option value="moderate">Moderate</option>
                                                <option value="low">Low</option>
                                            </select>
                                        </td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <select wire:model="reformAwareness.minersBank.support" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                <option value="">Select level</option>
                                                <option value="strong">Strong</option>
                                                <option value="mixed">Mixed</option>
                                                <option value="low">Low</option>
                                            </select>
                                        </td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <input type="text" wire:model="reformAwareness.minersBank.comments" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Sovereign Mineral Fund</td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <select wire:model="reformAwareness.sovereignMineralFund.awareness" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                <option value="">Select level</option>
                                                <option value="high">High</option>
                                                <option value="moderate">Moderate</option>
                                                <option value="low">Low</option>
                                            </select>
                                        </td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <select wire:model="reformAwareness.sovereignMineralFund.support" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                <option value="">Select level</option>
                                                <option value="strong">Strong</option>
                                                <option value="mixed">Mixed</option>
                                                <option value="low">Low</option>
                                            </select>
                                        </td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <input type="text" wire:model="reformAwareness.sovereignMineralFund.comments" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Local Content Regulations</td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <select wire:model="reformAwareness.localContentRegulations.awareness" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                <option value="">Select level</option>
                                                <option value="high">High</option>
                                                <option value="moderate">Moderate</option>
                                                <option value="low">Low</option>
                                            </select>
                                        </td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <select wire:model="reformAwareness.localContentRegulations.support" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                <option value="">Select level</option>
                                                <option value="strong">Strong</option>
                                                <option value="mixed">Mixed</option>
                                                <option value="low">Low</option>
                                            </select>
                                        </td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <input type="text" wire:model="reformAwareness.localContentRegulations.comments" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                     </div>


                 </div>

            </div>




            <div class="bg-white shadow overflow-hidden sm:rounded-lg max-w-full">
    <!-- SECTION F: GENDER & YOUTH PARTICIPATION -->
    <div class="px-2 sm:px-4 py-3 sm:py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
        <h3 class="text-base sm:text-lg leading-6 font-medium text-gray-900">SECTION F: GENDER & YOUTH PARTICIPATION</h3>
    </div>
    <div class="px-2 sm:px-4 py-3 sm:py-5 sm:p-6">
        <div class="mb-4 sm:mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Are women miners organized?</label>
            <div class="flex flex-wrap items-center gap-2 sm:gap-4">
                <div class="flex items-center">
                    <input id="women-org-yes" wire:model="womenMinersOrganized" type="radio" value="yes" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="women-org-yes" class="ml-2 block text-sm text-gray-700">Yes</label>
                </div>
                <div class="flex items-center">
                    <input id="women-org-informal" wire:model="womenMinersOrganized" type="radio" value="informal" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="women-org-informal" class="ml-2 block text-sm text-gray-700">Informal Groups Exist</label>
                </div>
                <div class="flex items-center">
                    <input id="women-org-no" wire:model="womenMinersOrganized" type="radio" value="no" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="women-org-no" class="ml-2 block text-sm text-gray-700">No Known Groups</label>
                </div>
            </div>
            <div class="mt-2" x-show="womenMinersOrganized === 'yes'">
                <label for="womenGroupCount" class="block text-sm text-gray-700">No. of Groups:</label>
                <input type="number" wire:model="womenGroupCount" id="womenGroupCount" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-24 sm:w-32 text-sm border-gray-300 rounded-md">
            </div>
        </div>

        <div class="mb-4 sm:mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Barriers to Women's Participation (tick all):</label>
            <div class="grid grid-cols-1 xs:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 sm:gap-3">
                <div class="flex items-center">
                    <input id="barrier-land" wire:model="womenBarriers" type="checkbox" value="landAccess" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="barrier-land" class="ml-2 block text-sm text-gray-700">Land Access</label>
                </div>
                <div class="flex items-center">
                    <input id="barrier-licensing" wire:model="womenBarriers" type="checkbox" value="licensingRestrictions" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="barrier-licensing" class="ml-2 block text-sm text-gray-700">Licensing Restrictions</label>
                </div>
                <div class="flex items-center">
                    <input id="barrier-tools" wire:model="womenBarriers" type="checkbox" value="toolAccess" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="barrier-tools" class="ml-2 block text-sm text-gray-700">Tool Access</label>
                </div>
                <div class="flex items-center">
                    <input id="barrier-credit" wire:model="womenBarriers" type="checkbox" value="creditAccess" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="barrier-credit" class="ml-2 block text-sm text-gray-700">Credit Access</label>
                </div>
                <div class="flex items-center">
                    <input id="barrier-social" wire:model="womenBarriers" type="checkbox" value="socialNorms" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="barrier-social" class="ml-2 block text-sm text-gray-700">Social Norms</label>
                </div>
                <div class="flex items-center">
                    <input id="barrier-childcare" wire:model="womenBarriers" type="checkbox" value="childcareResponsibilities" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="barrier-childcare" class="ml-2 block text-sm text-gray-700">Childcare Responsibilities</label>
                </div>
                <div class="flex items-center">
                    <input id="barrier-other" wire:model="womenBarriersOther.exists" type="checkbox" value="true" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="barrier-other" class="ml-2 block text-sm text-gray-700">Other</label>
                </div>
                <div class="col-span-1 xs:col-span-2 md:col-span-3 lg:col-span-4" x-show="womenBarriersOther.exists">
                    <input type="text" wire:model="womenBarriersOther.value" placeholder="Specify other barriers" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full text-sm border-gray-300 rounded-md">
                </div>
            </div>
        </div>

        <div class="mb-4 sm:mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Youth Involvement in Mining Activities:</label>
            <div class="flex flex-wrap items-center gap-2 sm:gap-4">
                <div class="flex items-center">
                    <input id="youth-high" wire:model="youthInvolvement" type="radio" value="high" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="youth-high" class="ml-2 block text-sm text-gray-700">High</label>
                </div>
                <div class="flex items-center">
                    <input id="youth-moderate" wire:model="youthInvolvement" type="radio" value="moderate" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="youth-moderate" class="ml-2 block text-sm text-gray-700">Moderate</label>
                </div>
                <div class="flex items-center">
                    <input id="youth-low" wire:model="youthInvolvement" type="radio" value="low" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="youth-low" class="ml-2 block text-sm text-gray-700">Low</label>
                </div>
            </div>
        </div>

        <div class="mb-4 sm:mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Youth-Specific Support Programs Present?</label>
            <div class="flex flex-wrap items-center gap-2 sm:gap-4">
                <div class="flex items-center">
                    <input id="youth-programs-yes" wire:model="youthPrograms" type="radio" value="yes" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="youth-programs-yes" class="ml-2 block text-sm text-gray-700">Yes</label>
                </div>
                <div class="flex items-center">
                    <input id="youth-programs-no" wire:model="youthPrograms" type="radio" value="no" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="youth-programs-no" class="ml-2 block text-sm text-gray-700">No</label>
                </div>
            </div>
        </div>
    </div>


    </div>



    <div class="bg-white shadow overflow-hidden sm:rounded-lg max-w-full">
    <!-- SECTION G: REGULATORY & SUPPORT INFRASTRUCTURE -->
    <div class="px-2 sm:px-4 py-3 sm:py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
        <h3 class="text-base sm:text-lg leading-6 font-medium text-gray-900">SECTION G: REGULATORY & SUPPORT INFRASTRUCTURE</h3>
    </div>
    <div class="px-2 sm:px-4 py-3 sm:py-5 sm:p-6">
        <div class="mb-4 sm:mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Does your office maintain a stakeholder registry?</label>
            <div class="flex flex-wrap items-center gap-2 sm:gap-4">
                <div class="flex items-center">
                    <input id="registry-digital" wire:model="stakeholderRegistry" type="radio" value="digital" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="registry-digital" class="ml-2 block text-sm text-gray-700">Yes – Digital</label>
                </div>
                <div class="flex items-center">
                    <input id="registry-paper" wire:model="stakeholderRegistry" type="radio" value="paper" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="registry-paper" class="ml-2 block text-sm text-gray-700">Yes – Paper</label>
                </div>
                <div class="flex items-center">
                    <input id="registry-no" wire:model="stakeholderRegistry" type="radio" value="no" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="registry-no" class="ml-2 block text-sm text-gray-700">No Registry</label>
                </div>
                <div class="flex items-center">
                    <input id="registry-unknown" wire:model="stakeholderRegistry" type="radio" value="unknown" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="registry-unknown" class="ml-2 block text-sm text-gray-700">Unknown</label>
                </div>
            </div>
        </div>

        <div class="mb-4 sm:mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Are Training/Extension Programs Offered?</label>
            <div class="flex flex-wrap items-center gap-2 sm:gap-4">
                <div class="flex items-center">
                    <input id="training-yes" wire:model="trainingPrograms" type="radio" value="yes" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="training-yes" class="ml-2 block text-sm text-gray-700">Yes</label>
                </div>
                <div class="flex items-center">
                    <input id="training-no" wire:model="trainingPrograms" type="radio" value="no" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="training-no" class="ml-2 block text-sm text-gray-700">No</label>
                </div>
                <div class="flex items-center">
                    <input id="training-planned" wire:model="trainingPrograms" type="radio" value="planned" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                    <label for="training-planned" class="ml-2 block text-sm text-gray-700">Planned but not launched</label>
                </div>
            </div>
            <div class="mt-2" x-show="trainingPrograms === 'yes'">
                <label for="trainingProvider" class="block text-sm text-gray-700">Provider:</label>
                <input type="text" wire:model="trainingProvider" id="trainingProvider" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full text-sm border-gray-300 rounded-md">
            </div>
        </div>

        <div class="mb-4 sm:mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2 sm:mb-3">Annual Environmental Monitoring:</label>
            <div class="space-y-3 sm:space-y-4">
                <div>
                    <label for="asmSiteCount" class="block text-sm text-gray-700">Estimated Number of ASM Sites</label>
                    <input type="number" wire:model="environmentalMonitoring.siteCount" id="asmSiteCount" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full text-sm border-gray-300 rounded-md">
                </div>
                <div>
                    <label for="sitesMonitored" class="block text-sm text-gray-700">Sites Monitored Annually</label>
                    <input type="number" wire:model="environmentalMonitoring.monitored" id="sitesMonitored" class="mt-1 shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full text-sm border-gray-300 rounded-md">
                </div>
                <div>
                    <label class="block text-sm text-gray-700 mb-2">Frequency of Inspections</label>
                    <div class="flex flex-wrap items-center gap-2 sm:gap-4">
                        <div class="flex items-center">
                            <input id="inspection-frequent" wire:model="environmentalMonitoring.frequency" type="radio" value="frequent" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                            <label for="inspection-frequent" class="ml-2 block text-sm text-gray-700">Frequent</label>
                        </div>
                        <div class="flex items-center">
                            <input id="inspection-occasional" wire:model="environmentalMonitoring.frequency" type="radio" value="occasional" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                            <label for="inspection-occasional" class="ml-2 block text-sm text-gray-700">Occasional</label>
                        </div>
                        <div class="flex items-center">
                            <input id="inspection-rare" wire:model="environmentalMonitoring.frequency" type="radio" value="rare" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                            <label for="inspection-rare" class="ml-2 block text-sm text-gray-700">Rare</label>
                        </div>
                        <div class="flex items-center">
                            <input id="inspection-none" wire:model="environmentalMonitoring.frequency" type="radio" value="none" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                            <label for="inspection-none" class="ml-2 block text-sm text-gray-700">None</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>




    <div class="bg-white shadow overflow-hidden sm:rounded-lg max-w-full">
    <!-- SECTION H: FINAL RECOMMENDATIONS & INSIGHTS -->
    <div class="px-2 sm:px-4 py-3 sm:py-5 border-b border-gray-200 sm:px-6 bg-blue-50">
        <h3 class="text-base sm:text-lg leading-6 font-medium text-gray-900">SECTION H: FINAL RECOMMENDATIONS & INSIGHTS</h3>
    </div>
    <div class="px-2 sm:px-4 py-3 sm:py-5 sm:p-6">
        <div class="mb-4 sm:mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2 sm:mb-3">Top 3 Recommendations for Improving Stakeholder Support:</label>
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
            <label for="additionalNotes" class="block text-sm font-medium text-gray-700 mb-2">Additional Notes or Alerts for the Taskforce (e.g., conflict hotspots, gold rush zones, informal site surges)</label>
            <textarea wire:model="additionalNotes" id="additionalNotes" rows="4" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full text-sm border-gray-300 rounded-md"></textarea>
        </div>
    </div>

    </div>

    

    <div class="px-2 sm:px-4 py-3 bg-gray-50 text-right sm:px-6">
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Submit Form
        </button>
    </div>









{{-- If your happiness depends on money, you will never be happy with yourself. --}}
</div>
