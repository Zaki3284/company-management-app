<x-layout>
    <x-slot:heading>
    Projects Page
</x-slot:heading>
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="mb-8">
            <p class="text-gray-600 mt-2">A list of all the project details in your account including their Taskes.</p>
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
                                Company
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Taskes
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                deadline
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    
                    <!-- Table Body -->
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- User 1 -->
                        <tr class="user-row">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    {{-- <div class="flex-shrink-0 h-10 w-10 bg-blue-100 rounded-full flex items-center justify-center">
                                        <span class="text-blue-800 font-medium">LW</span>
                                    </div> --}}
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Lindsay Walton</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Front-end Developer</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">lindsay.walton@example.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="role-badge px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Member
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="edit-btn text-blue-600 hover:text-blue-900 mr-4">
                                    <i class="fas fa-edit mr-1"></i> Edit
                                </button>
                                <button class="edit-btn text-blue-600 hover:text-blue-900 mr-4">
                                    <i class="fas fa-edit mr-1"></i> delite
                                </button>
                            </td>
                        </tr>                           
</x-layout>