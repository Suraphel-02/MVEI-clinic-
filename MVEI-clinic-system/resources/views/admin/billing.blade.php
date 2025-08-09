<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Billing</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

</head>
<body class="flex h-screen bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white">
    <!-- Sidebar -->
    <aside class="w-64 bg-white dark:bg-gray-800 shadow-md flex flex-col">
            <div class="p-6 border-b border-gray-200 dark:border-gray-700 flex items-center">
                <h1 class="text-2xl font-semibold text-gray-800 dark:text-white">MVEI Clinic</h1>
            </div>
            <nav class="flex-1 p-6 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"><i class="fas fa-home mr-3"></i>Dashboard</a>
                <a href="{{ route('admin.patients') }}" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"><i class="fas fa-users mr-3"></i>Patients</a>
                <a href="{{ route('admin.doctors') }}" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"><i class="fas fa-user-md mr-3"></i>Doctors</a>
                <a href="{{ route('admin.appointments') }}" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"><i class="fas fa-calendar-alt mr-3"></i>Appointments</a>
                <a href="{{ route('admin.billing') }}" class="flex items-center py-2 px-4 text-blue-600 dark:text-blue-400 rounded-lg bg-blue-100 dark:bg-blue-900"><i class="fas fa-file-invoice-dollar mr-3"></i>Billing</a>
                <a href="{{ route('admin.settings') }}" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"><i class="fas fa-cogs mr-3"></i>Settings</a>
            </nav>
            <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                <a href="#" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"><i class="fas fa-sign-out-alt mr-3"></i>Logout</a>
            </div>
        </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="w-full bg-white dark:bg-gray-800 shadow-md p-6 flex items-center justify-between">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Billing Management</h2>
                <div class="flex items-center space-x-4">
                    <button class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white"><i class="fas fa-bell"></i></button>
                    <div class="relative">
                        <!-- <img src="https://via.placeholder.com/32" alt="Admin Avatar" class="rounded-full w-8 h-8"> -->
                        <div class="absolute bottom-0 right-0 w-2 h-2 bg-green-500 rounded-full"></div>
                    </div>
                    <span class="text-gray-800 dark:text-white">Admin Name</span>
                </div>
        </header>

        <!-- Main content -->
        <main class="flex-1 p-6 bg-gray-100 dark:bg-gray-800">
                <div class="flex items-center justify-between mb-6">
                    <h1 class="text-3xl font-semibold text-gray-900 dark:text-white">Billing</h1>
                    <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out">
                        <i class="fas fa-plus mr-2"></i> Generate New Invoice
                    </button>
                </div>

                <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300 mb-4">Recent Transactions</h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                            <thead>
                                <thead class="bg-gray-50 dark:bg-gray-600">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Invoice ID</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Patient Name</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Amount</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Date</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-700 divide-y divide-gray-200 dark:divide-gray-600">
                                    <!-- Example Transaction Row -->
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">INV001</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">Jane Doe</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">$150.00</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">2023-10-25</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">Paid</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-600 mr-3">Edit</a>
                                            <a href="#" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-600">Print</a>
                                        </td>
                                    </tr>
                                    <!-- More rows can be added here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
            </div>
        </body>
        </html>
</body>
</html>