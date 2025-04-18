<div>
    {{-- In work, do what you enjoy. --}}
    <div class="p-6">
    <!-- User Stats -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
        <div class="bg-yellow-100 shadow rounded p-4">
            <div class="text-gray-600 text-sm">Total Users</div>
            <div class="text-2xl font-bold text-gray-800">{{ $stats['total'] }}</div>
        </div>
      
        <div class="bg-blue-100 shadow rounded p-4">
            <div class="text-gray-600 text-sm">Regular Users</div>
            <div class="text-2xl font-bold text-green-600">{{ $stats['users'] }}</div>
        </div>
    </div>

    <!-- Actions -->
    <div class="flex justify-between items-center mb-4">
        <input wire:model.debounce.500ms="search" type="text" placeholder="Search users..."
               class="w-1/3 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300">
        <button wire:click="openModal"
                class="px-4 py-2 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700">
            + Create User
        </button>
    </div>

    <!-- User Table -->
    <div class="bg-white shadow rounded-lg overflow-x-auto">
        <table class="min-w-full table-auto text-sm text-left">
            <thead class="bg-gray-100 text-gray-700 uppercase text-xs font-semibold">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Created</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $i => $user)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $users->firstItem() + $i }}</td>
                        <td class="px-4 py-2">{{ $user->name }}</td>
                        <td class="px-4 py-2">{{ $user->email }}</td>
                        <td class="px-4 py-2 text-sm text-gray-500">{{ $user->created_at->format('d M Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-4 text-center text-gray-500">No users found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="p-4">
            {{ $users->links() }}
        </div>
    </div>

    <!-- Modal -->
    @if ($showModal)
        <div class="fixed inset-0 bg-black bg-opacity-40 z-40 flex items-center justify-center">
            <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-6 z-50">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Create New User</h3>

                @if (session()->has('message'))
                    <div class="text-green-600 mb-2">{{ session('message') }}</div>
                @endif

                <form wire:submit.prevent="createUser" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium">Name</label>
                        <input wire:model="name" type="text" class="w-full border-gray-300 rounded shadow-sm">
                        @error('name') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium">Email</label>
                        <input wire:model="email" type="email" class="w-full border-gray-300 rounded shadow-sm">
                        @error('email') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium">Password</label>
                        <input wire:model="password" type="password" class="w-full border-gray-300 rounded shadow-sm">
                        @error('password') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium">Role</label>
                        <select wire:model="role" class="w-full border-gray-300 rounded shadow-sm">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                        @error('role') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex justify-end space-x-4 pt-4">
                        <button type="button" wire:click="closeModal"
                                class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>


</div>
