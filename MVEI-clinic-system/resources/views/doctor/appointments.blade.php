@extends('doctor.dashboard')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-semibold text-gray-900 dark:text-white mb-6">Appointments</h1>

    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6 mb-6">
        <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300 mb-4">Upcoming Appointments</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                <thead class="bg-gray-50 dark:bg-gray-600">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Patient Name</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Date</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Time</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-700 divide-y divide-gray-200 dark:divide-gray-600">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">John Doe</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">2023-10-27</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">09:00 AM</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Confirmed</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-blue-600 hover:text-blue-900 mr-3">View</a>
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Reschedule</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">Jane Smith</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">2023-10-27</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">10:30 AM</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span></td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-blue-600 hover:text-blue-900 mr-3">View</a>
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Reschedule</a>
                        </td>
                    </tr>
                    <!-- More appointments -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection