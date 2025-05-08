{{-- resources/views/dashboard.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Card -->
            <div class="bg-blue-100 overflow-hidden shadow-xl sm:rounded-lg p-6 mb-8">
                <h3 class="text-lg font-semibold mb-2">Welcome to AgriFlow Dashboard</h3>
                <p>You're logged in! Here's your farm at a glance.</p>
            </div>

            <!-- Stats Overview Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Farm Assets Summary -->
                <div class="bg-white overflow-hidden shadow sm:rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Farm Assets</h3>
                            <p class="mt-1 text-sm text-gray-500">Animals: 20</p>
                            <p class="text-sm text-gray-500">Crops: 10</p>
                            <p class="text-sm text-gray-500">Total: 30</p>
                        </div>
                    </div>
                </div>

                <!-- Inventory Summary -->
                <div class="bg-white overflow-hidden shadow sm:rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-blue-100 text-blue-600 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Inventory</h3>
                            <p class="mt-1 text-sm text-gray-500">Total items: 27</p>
                            <p class="text-sm text-gray-500">Total value: $38,000+</p>
                        </div>
                    </div>
                </div>

                <!-- Financial Summary -->
                <div class="bg-white overflow-hidden shadow sm:rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-purple-100 text-purple-600 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Finance</h3>
                            <p class="mt-1 text-sm text-gray-500">Income: $72,000+</p>
                            <p class="text-sm text-gray-500">Expenses: $25,000+</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Farm Distribution Section -->
            <div class="bg-white p-6 rounded-lg shadow mb-8">
                <h3 class="text-lg font-semibold mb-4">Farm Distribution</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Animals Chart -->
                    <div>
                        <h4 class="text-md font-medium mb-2 text-center">Livestock Animals</h4>
                        <div class="h-64">
                            <img src="https://quickchart.io/chart?c=%7Btype%3A%27bar%27%2Cdata%3A%7Blabels%3A%5B%27Cow%27%2C%27Goat%27%2C%27Sheep%27%2C%27Chicken%27%5D%2Cdatasets%3A%5B%7Blabel%3A%27Count%27%2Cdata%3A%5B5%2C6%2C5%2C4%5D%2CbackgroundColor%3A%5B%27%234CAF50%27%2C%27%238BC34A%27%2C%27%23CDDC39%27%2C%27%23FFEB3B%27%5D%7D%5D%7D%7D" 
                                 alt="Livestock Animals Chart" 
                                 class="w-full h-full object-contain">
                        </div>
                    </div>
                    
                    <!-- Plants Chart -->
                    <div>
                        <h4 class="text-md font-medium mb-2 text-center">Crops & Plants</h4>
                        <div class="h-64">
                            <img src="https://quickchart.io/chart?c=%7Btype%3A%27pie%27%2Cdata%3A%7Blabels%3A%5B%27Wheat%27%2C%27Corn%27%2C%27Rice%27%2C%27Tomato%27%2C%27Sunflower%27%2C%27Potato%27%2C%27Strawberry%27%2C%27Sugarcane%27%2C%27Lettuce%27%2C%27Carrot%27%5D%2Cdatasets%3A%5B%7Bdata%3A%5B1%2C1%2C1%2C1%2C1%2C1%2C1%2C1%2C1%2C1%5D%2CbackgroundColor%3A%5B%27%23795548%27%2C%27%235D4037%27%2C%27%234E342E%27%2C%27%23D84315%27%2C%27%23E65100%27%2C%27%23F57C00%27%2C%27%23E64A19%27%2C%27%23BF360C%27%2C%27%232E7D32%27%2C%27%23388E3C%27%5D%7D%5D%7D%7D" 
                                 alt="Crops Chart" 
                                 class="w-full h-full object-contain">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Financial Charts Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                <!-- Financial Overview -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-lg font-semibold mb-4">Income vs Expenses</h3>
                    <div class="h-64">
                        <img src="https://quickchart.io/chart?c=%7Btype%3A%27doughnut%27%2Cdata%3A%7Blabels%3A%5B%27Income%27%2C%27Expenses%27%5D%2Cdatasets%3A%5B%7Bdata%3A%5B72277.1%2C25464.3%5D%2CbackgroundColor%3A%5B%27%234CAF50%27%2C%27%23F44336%27%5D%7D%5D%7D%7D" 
                             alt="Financial Chart" 
                             class="w-full h-full object-contain">
                    </div>
                </div>

                <!-- Inventory Value -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-lg font-semibold mb-4">Top Inventory Items by Value</h3>
                    <div class="h-64">
                        <img src="https://quickchart.io/chart?c=%7Btype%3A%27horizontalBar%27%2Cdata%3A%7Blabels%3A%5B%27Tractor%20Engine%27%2C%27Solar%20Panels%27%2C%27Plough%27%2C%27Chainsaw%27%2C%27Veterinary%20Kit%27%5D%2Cdatasets%3A%5B%7Blabel%3A%27Value%20(%24)%27%2Cdata%3A%5B12000.5%2C1600%2C4680%2C700%2C1084.5%5D%2CbackgroundColor%3A%27%232196F3%27%7D%5D%7D%7D" 
                             alt="Inventory Chart" 
                             class="w-full h-full object-contain">
                    </div>
                </div>
            </div>

            <!-- Recent Activity Section -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-4">Recent Financial Activity</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600 font-medium">Income</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">$8,900.80</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">Grain sale</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Today</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600 font-medium">Expense</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">$4,120.00</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">Irrigation equipment</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Yesterday</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600 font-medium">Income</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">$7,750.00</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">Lease income</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2 days ago</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>