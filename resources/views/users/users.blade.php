<x-layout>
    <x-slot:heading>
    Users Page
</x-slot:heading>
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="mb-8">
            <p class="text-gray-600 mt-2">A list of all the users in your account including their name, title, email and role.</p>
        </div>      
        <!-- Table Container -->
        <div class="bg-white shadow overflow-hidden border border-gray-200 rounded-lg">
            <!-- Responsive table wrapper -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <!-- Table Header -->
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Role
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                    </thead>     
                    
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($users as $user)
                        <!-- User 1 -->
                        <tr class="user-row">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $user->name }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $user->email }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $user->role }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="edit-btn text-blue-600 hover:text-blue-900 mr-4">
                                    <i class="fas fa-edit mr-1"></i> Edit
                                </button>
                                <button class="edit-btn text-blue-600 hover:text-blue-900 mr-4">
                                    <i class="fas fa-edit mr-1"></i> delite
                                </button>
                            </td>
                        @endforeach

</tbody>

{{ $users->links() }}
</x-layout>