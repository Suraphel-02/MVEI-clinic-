<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="font-sans antialiased bg-gray-100">
    <div class="flex h-screen bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white">
        <!-- Sidebar -->
        <aside class="w-64 bg-white dark:bg-gray-800 shadow-md flex flex-col">
            <div class="p-6 border-b border-gray-200 dark:border-gray-700 flex items-center">
                <h1 class="text-2xl font-semibold text-gray-800 dark:text-white">MVEI Clinic</h1>
            </div>
            <nav class="flex-1 p-6 space-y-2">
                <a href="#" class="flex items-center py-2 px-4 text-blue-600 dark:text-blue-400 rounded-lg bg-blue-100 dark:bg-blue-900"><i class="fas fa-home mr-3"></i>Dashboard</a>
                <a href="#" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"><i class="fas fa-calendar-alt mr-3"></i>Appointments</a>
                <a href="#" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"><i class="fas fa-users mr-3"></i>Patients</a>
                <a href="#" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"><i class="fas fa-user-circle mr-3"></i>Profile</a>
                <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700 w-full text-left"><i class="fas fa-sign-out-alt mr-3"></i>Logout</button>
                    </form>
                </div>
            </nav>
        </aside>

        <!-- Content Area -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="w-full bg-white dark:bg-gray-800 shadow-md p-6 flex items-center justify-between">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Welcome, Doctor!</h2>
                <div class="flex items-center space-x-4">
                    <button class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white"><i class="fas fa-bell"></i></button>
                    <div class="relative">
                        <div class="absolute bottom-0 right-0 w-2 h-2 bg-green-500 rounded-full"></div>
                    </div>
                    <span class="text-gray-800 dark:text-white">Doctor Name</span>
                </div>
            </header>

            <!-- Main content -->
            <main class="flex-1 p-6 bg-gray-100 dark:bg-gray-800">
                <div class="flex items-center justify-between mb-6">
                    <h1 class="text-3xl font-semibold text-gray-900 dark:text-white">Dashboard</h1>
                    <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out">
                        <i class="fas fa-plus mr-2"></i> Add New Appointment
                    </button>
                </div>

                <!-- KPI Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6 flex items-center justify-between">
                        <div>
                            <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300">Total Patients</h2>
                            <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">1,234</p>
                        </div>
                        <i class="fas fa-users text-4xl text-blue-500"></i>
                    </div>
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6 flex items-center justify-between">
                        <div>
                            <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300">Appointments Today</h2>
                            <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">45</p>
                        </div>
                        <i class="fas fa-calendar-check text-4xl text-green-500"></i>
                    </div>
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6 flex items-center justify-between">
                        <div>
                            <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300">Completed Consultations</h2>
                            <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">876</p>
                        </div>
                        <i class="fas fa-notes-medical text-4xl text-purple-500"></i>
                    </div>
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6 flex items-center justify-between">
                        <div>
                            <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300">Pending Prescriptions</h2>
                            <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">23</p>
                        </div>
                        <i class="fas fa-prescription-bottle-alt text-4xl text-yellow-500"></i>
                    </div>
                </div>

                <!-- Charts -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
                        <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300 mb-4">Monthly Consultations</h2>
                        <canvas id="consultationsChart"></canvas>
                    </div>
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
                        <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300 mb-4">Patient Demographics</h2>
                        <canvas id="patientDemographicsChart"></canvas>
                    </div>
                </div>

                <!-- Recent Activity & Upcoming Appointments -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
                        <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300 mb-4">Recent Activity</h2>
                        <ul class="divide-y divide-gray-200 dark:divide-gray-600">
                            <li class="py-3 flex justify-between items-center">
                                <span class="text-gray-800 dark:text-gray-200">Consultation with John Doe</span>
                                <span class="text-sm text-gray-500 dark:text-gray-400">2 hours ago</span>
                            </li>
                            <li class="py-3 flex justify-between items-center">
                                <span class="text-gray-800 dark:text-gray-200">Prescription issued for Jane Smith</span>
                                <span class="text-sm text-gray-500 dark:text-gray-400">1 day ago</span>
                            </li>
                            <li class="py-3 flex justify-between items-center">
                                <span class="text-gray-800 dark:text-gray-200">New appointment request from Peter Jones</span>
                                <span class="text-sm text-gray-500 dark:text-gray-400">3 days ago</span>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
                        <h2 class="text-lg font-medium text-gray-600 dark:text-gray-300 mb-4">Upcoming Appointments</h2>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                <thead class="bg-gray-50 dark:bg-gray-600">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Patient Name</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Date</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Time</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-700 divide-y divide-gray-200 dark:divide-gray-600">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">John Doe</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">2023-10-27</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">09:00 AM</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Confirmed</span></td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">Jane Smith</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">2023-10-27</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">10:30 AM</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">Peter Jones</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">2023-10-28</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">02:00 PM</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Cancelled</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('consultationsChart').getContext('2d');
        const consultationsChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Consultations',
                    data: [12, 19, 3, 5, 2, 3, 7],
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Patient Demographics Chart
        const patientDemographicsCtx = document.getElementById('patientDemographicsChart').getContext('2d');
        new Chart(patientDemographicsCtx, {
            type: 'pie',
            data: {
                labels: ['18-24', '25-34', '35-44', '45-54', '55+'],
                datasets: [{
                    label: 'Patient Demographics',
                    data: [15, 30, 25, 20, 10],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
            }
        });
    </script>
</body>
</html>