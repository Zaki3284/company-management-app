<x-layout>
    <x-slot:heading>
        Companies Management
    </x-slot:heading>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="mb-10">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex-1 min-w-0">
                    <p class="mt-2 text-sm text-gray-600">
                        A list of all companies in your account including their name, Projects and Employees.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Table Container -->
        <div class="bg-white shadow-lg border border-gray-100 rounded-xl overflow-hidden">
            <!-- Responsive table wrapper -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <!-- Table Header -->
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-8 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col" class="px-8 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Email
                            </th>
                            <th scope="col" class="px-8 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Projects
                            </th>
                            <th scope="col" class="px-8 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Employees
                            </th>
                            <th scope="col" class="px-8 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    
                    <!-- Table Body -->
                    <tbody class="bg-white divide-y divide-gray-100">
                        @foreach($companies as $company)
                        <tr class="hover:bg-gray-50 transition-colors duration-150 ease-in-out">
                            <td class="px-8 py-5 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 bg-gradient-to-br from-blue-100 to-blue-50 rounded-lg flex items-center justify-center">
                                        <span class="text-blue-600 font-medium text-lg">
                                            {{ strtoupper(substr($company->owner->name, 0, 1)) }}
                                        </span>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">{{ $company->owner->name }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-8 py-5 whitespace-nowrap">
                                <div class="text-sm text-gray-800">{{ $company->owner->email }}</div>
                            </td>
                            <td class="px-8 py-5 whitespace-nowrap">
                                <!-- Projects count or info should go here -->
                                <div class="text-sm text-gray-800">{{ $company->projects_count ?? 0 }}</div>
                            </td>
                            <td class="px-8 py-5 whitespace-nowrap">
                                <!-- Employees count or info should go here -->
                                <div class="text-sm text-gray-800">{{ $company->employees_count ?? 0 }}</div>
                            </td>
                            <td class="px-8 py-5 whitespace-nowrap text-sm font-medium">
                                <div class="flex items-center space-x-3">
                                    <button class="edit-btn inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-blue-700 bg-blue-50 hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                                        <i class="fas fa-edit mr-1.5 text-xs"></i> Edit
                                    </button>
                                    <button class="delete-btn inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-red-700 bg-red-50 hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-200">
                                        <i class="fas fa-trash-alt mr-1.5 text-xs"></i> Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="bg-gray-50 px-8 py-4 border-t border-gray-100">
                {{ $companies->links() }}
            </div>
        </div>
    </div>
</x-layout>