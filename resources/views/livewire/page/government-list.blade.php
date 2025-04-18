<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}


    <div class="max-w-7xl mx-auto p-6 space-y-6">
    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-blue-100 p-4 rounded shadow">
            <p class="text-gray-600 text-sm">Total Submissions</p>
            <p class="text-2xl font-bold text-blue-800">{{ $summary['total'] }}</p>
        </div>
        <div class="bg-green-100 p-4 rounded shadow">
            <p class="text-gray-600 text-sm">Unique Regions</p>
            <p class="text-2xl font-bold text-green-800">{{ $summary['unique_regions'] }}</p>
        </div>
        <div class="bg-yellow-100 p-4 rounded shadow">
            <p class="text-gray-600 text-sm">Licensed Miners</p>
            <p class="text-2xl font-bold text-yellow-800">{{ number_format($summary['licensed_miners']) }}</p>
        </div>
    </div>

    <!-- Search -->
    <div class="flex justify-end">
        <input type="text" wire:model.debounce.300ms="search" placeholder="Search region, institution, district"
            class="border border-gray-300 rounded px-4 py-2 w-full md:w-1/3 focus:outline-none focus:ring focus:ring-blue-200">
    </div>

    <!-- Table -->
    <div class="bg-white shadow overflow-x-auto rounded">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Region</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">District</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Official</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Institution</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Licensed Miners</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Submitted</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($submissions as $data)
                    <tr>
                        <td class="px-4 py-2 text-sm text-gray-900">{{ $data->region }}</td>
                        <td class="px-4 py-2 text-sm text-gray-900">{{ $data->districts }}</td>
                        <td class="px-4 py-2 text-sm text-gray-900">{{ $data->full_name }}</td>
                        <td class="px-4 py-2 text-sm text-gray-900">{{ $data->institution }}</td>
                        <td class="px-4 py-2 text-sm text-gray-900">{{ $data->individual_miners_licensed }}</td>
                        <td class="px-4 py-2 text-sm text-gray-500">{{ $data->created_at->format('Y-m-d') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-4 text-center text-gray-500">No records found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="p-4">
            {{ $submissions->links() }}
        </div>
    </div>
</div>




</div>
