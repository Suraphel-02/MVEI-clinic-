@extends('doctor.dashboard')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-semibold text-gray-900 dark:text-white mb-6">Patients</h1>

    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
        <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300 mb-4">My Patients</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                <thead class="bg-gray-50 dark:bg-gray-600">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Name</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Email</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Phone</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Last Visit</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-700 divide-y divide-gray-200 dark:divide-gray-600">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">John Doe</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">john.doe@example.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">+1-555-123-4567</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">2023-10-26</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-blue-600 hover:text-blue-900 mr-3">View Profile</a>
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">View History</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">Jane Smith</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">jane.smith@example.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">+1-555-987-6543</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">2023-10-25</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-blue-600 hover:text-blue-900 mr-3">View Profile</a>
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">View History</a>
                        </td>
                    </tr>
                    <!-- More patients -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection