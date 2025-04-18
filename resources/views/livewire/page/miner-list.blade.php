<div>
    {{-- The Master doesn't talk, he acts. --}}

    <div class="py-8 px-4 sm:px-6 lg:px-8">
    <!-- Static Header -->
    <div class="mb-6 text-center">
        <h2 class="text-2xl font-bold text-gray-800">List of Submitted Miner Profiles</h2>
        <p class="text-sm text-gray-500 mt-1">Special Taskforce on Empowering Local Miners in Tanzania</p>
    </div>

    <!-- Search Bar -->
    <div class="mb-4 flex items-center justify-between">
        <input
            wire:model.debounce.500ms="search"
            type="text"
            placeholder="Search by name, region, district..."
            class="w-full md:w-1/3 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
        />
    </div>

    <!-- Table -->
    <div class="overflow-x-auto bg-white rounded-lg shadow-md">
        <table class="min-w-full table-auto text-sm text-left text-gray-700">
            <thead class="bg-gray-100 text-xs font-semibold uppercase tracking-wider text-gray-600">
                <tr>
                    <th class="px-4 py-3">#</th>
                    <th class="px-4 py-3">Interviewer</th>
                    <th class="px-4 py-3">Date</th>
                    <th class="px-4 py-3">Region</th>
                    <th class="px-4 py-3">District</th>
                    <th class="px-4 py-3">Ward</th>
                    <th class="px-4 py-3">Respondent</th>
                    <th class="px-4 py-3">Gender</th>
                    <th class="px-4 py-3">Primary Role</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($profiles as $index => $profile)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $profiles->firstItem() + $index }}</td>
                        <td class="px-4 py-2">{{ $profile->interviewer_name }}</td>
                        <td class="px-4 py-2">{{ $profile->interview_date }}</td>
                        <td class="px-4 py-2">{{ $profile->region }}</td>
                        <td class="px-4 py-2">{{ $profile->district }}</td>
                        <td class="px-4 py-2">{{ $profile->ward }}</td>
                        <td class="px-4 py-2">{{ $profile->respondent_name ?? '-' }}</td>
                        <td class="px-4 py-2 capitalize">{{ $profile->gender }}</td>
                        <td class="px-4 py-2">{{ $profile->primary_role }}</td>
                       
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" class="text-center text-gray-500 px-4 py-4">No results found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $profiles->links() }}
    </div>
</div>




</div>
