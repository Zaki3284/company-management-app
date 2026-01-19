<x-layout>
    <x-slot:heading>
        Edit User
    </x-slot:heading>
    
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-10 flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">Edit User</h2>
                <p class="mt-2 text-sm text-gray-600">
                    Update user account information below.
                </p>
            </div>
            <a href="{{ route('users.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                <i class="fas fa-arrow-left mr-2"></i> Back to Users
            </a>
        </div>

        <div class="bg-white shadow-lg border border-gray-100 rounded-xl overflow-hidden p-8">
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name *</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                               class="mt-1 block w-full border-gray-300 rounded-md p-3 border @error('name') border-red-500 @enderror" required>
                        @error('name') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email *</label>
                        <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}"
                               class="mt-1 block w-full border-gray-300 rounded-md p-3 border @error('email') border-red-500 @enderror" required>
                        @error('email') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="role" class="block text-sm font-medium text-gray-700">Role *</label>
                        <select name="role" id="role" class="mt-1 block w-full border-gray-300 rounded-md p-3 border @error('role') border-red-500 @enderror" required>
                            <option value="admin" {{ $user->role=='admin' ? 'selected' : '' }}>Admin</option>
                            <option value="company" {{ $user->role=='company' ? 'selected' : '' }}>Company</option>
                            <option value="employer" {{ $user->role=='employer' ? 'selected' : '' }}>Employer</option>
                        </select>
                        @error('role') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="pt-6 border-t border-gray-200 flex justify-end space-x-3">
                        <a href="{{ route('users.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 bg-white hover:bg-gray-50">Cancel</a>
                        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">
                            <i class="fas fa-save mr-2"></i> Update User
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>
