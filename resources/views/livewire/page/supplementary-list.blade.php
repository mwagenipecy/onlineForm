<div>
    {{-- Care about people's approval and you will be their prisoner. --}}


    <!-- Summary Cards -->
<div class="grid grid-cols-1 mb-10 sm:grid-cols-2 lg:grid-cols-4 gap-4">
    <div class="bg-white p-4 shadow rounded-lg">
        <h3 class="text-sm text-gray-500 mb-1">Total Submissions</h3>
        <p class="text-2xl font-bold text-blue-600">{{ \App\Models\StakeholderSubmission::count() }}</p>
    </div>

    <div class=" p-4 bg-blue-100  shadow rounded-lg">
        <h3 class="text-sm text-gray-500 mb-1">Gov’t Institutions</h3>
        <p class="text-xl text-gray-800">
            {{ \App\Models\StakeholderSubmission::where('organization_type', 'government')->count() }}
        </p>
    </div>

    <div class="bg-green-100 p-4 shadow rounded-lg">
        <h3 class="text-sm text-gray-500 mb-1">NGOs/CSOs</h3>
        <p class="text-xl text-gray-800">
            {{ \App\Models\StakeholderSubmission::where('organization_type', 'ngo')->count() }}
        </p>
    </div>

    <div class="bg-yellow-100 p-4 shadow rounded-lg">
        <h3 class="text-sm text-gray-500 mb-1">Private Sector</h3>
        <p class="text-xl text-gray-800">
            {{ \App\Models\StakeholderSubmission::where('organization_type', 'private')->count() }}
        </p>
    </div>
</div>





    <div class="space-y-6 mt-6">

    <!-- Search + Pagination -->
    <div class="flex flex-wrap justify-between items-center gap-4">
        <input type="text" wire:model.debounce.500ms="search"
            placeholder="Search by institution..."
            class="border px-3 py-2 rounded-md shadow-sm w-full md:w-1/3 text-sm">

        <select wire:model="perPage" class="text-sm border rounded px-3 py-2 shadow-sm">
            <option value="10">10 per page</option>
            <option value="25">25 per page</option>
            <option value="50">50 per page</option>
        </select>
    </div>

    <!-- Table -->
    <div class="overflow-auto bg-white rounded shadow">
        <table class="min-w-full text-sm text-left text-gray-700">
            <thead class="bg-gray-100 text-xs text-gray-500 uppercase">
                <tr>
                    <th class="px-4 py-3">Institution</th>
                    <th>Type</th>
                    <th>Zone</th>
                    <th>Years in ASM</th>
                    <th class="text-right pr-4">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($submissions as $item)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $item->institution_name }}</td>
                    <td>{{ ucfirst($item->organization_type) }}</td>
                    <td>{{ $item->operation_regions }}</td>
                    <td>{{ $item->asm_years }}</td>
                    <td class="text-right pr-4">
                        <button wire:click="viewDetails({{ $item->id }})" class="text-blue-600 hover:underline">
                            View
                        </button>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" class="px-4 py-3 text-center text-gray-500">No results found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div>{{ $submissions->links() }}</div>

    <!-- Modal -->
    @if ($selected)
    <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" wire:click.self="closeModal">
        <div class="bg-white max-w-4xl w-full max-h-[90vh] overflow-y-auto p-6 rounded shadow-xl space-y-4">
            <div class="flex justify-between items-center border-b pb-3">
                <h2 class="text-lg font-bold">Submission Details</h2>
                <button wire:click="closeModal" class="text-sm text-gray-500 hover:text-gray-700">✕ Close</button>
            </div>

            <div class="space-y-4 text-sm text-gray-700">

                <!-- Section A -->
                <div>
                    <h3 class="text-md font-semibold text-blue-600">Section A: Identification</h3>
                    <p><strong>Institution:</strong> {{ $selected->institution_name }}</p>
                    <p><strong>Type:</strong> {{ $selected->organization_type }}</p>
                    <p><strong>Region:</strong> {{ $selected->operation_regions }}</p>
                    <p><strong>Focal Person:</strong> {{ $selected->focal_person }}</p>
                    <p><strong>Years in ASM:</strong> {{ $selected->asm_years }}</p>
                </div>

                <!-- Section B -->
                <div>
                    <h3 class="text-md font-semibold text-blue-600">Section B: Services</h3>
                    <p><strong>Mandate:</strong> {{ $selected->mandate }}</p>
                    <p><strong>Services:</strong> {{ $selected->services }}</p>
                    <p><strong>Target Groups:</strong> {{ $selected->target_groups }}</p>
                    <p><strong>Service Area:</strong> {{ $selected->service_area }}</p>
                </div>

                <!-- Add other sections here... -->
                <div>
                    <h3 class="text-md font-semibold text-blue-600">Section C–H: (You can continue rendering the rest…)</h3>
                    <p><strong>Challenges:</strong> {{ $selected->asm_challenges }}</p>
                    <p><strong>Comments:</strong> {{ $selected->final_comments }}</p>
                </div>

            </div>
        </div>
    </div>
    @endif

</div>




</div>
