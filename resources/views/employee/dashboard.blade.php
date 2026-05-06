<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <!-- Welcome Section -->
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                                <div class="p-6 text-gray-900 dark:text-gray-100">
                                    <h1 class="text-2xl mb-2">Welcome to Your Shop, <strong>{{ $user->name }}</strong>!</h1>
                                    <p class="text-gray-600 dark:text-gray-400">Ready to serve our customers today?</p>
                                </div>
                            </div>

                            <!-- Today's Tasks -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                                <!-- Today's Schedule -->
                                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6">
                                        <div class="flex items-center mb-4">
                                            <div class="p-2 bg-blue-100 dark:bg-blue-900 rounded-full">
                                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                </svg>
                                            </div>
                                            <h3 class="ml-2 text-lg font-semibold text-gray-900 dark:text-gray-100">Today's Schedule</h3>
                                        </div>
                                        <div class="space-y-3">
                                            <div class="flex justify-between">
                                                <span class="text-sm text-gray-600 dark:text-gray-400">Shift Start</span>
                                                <span class="font-medium">9:00 AM</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span class="text-sm text-gray-600 dark:text-gray-400">Lunch Break</span>
                                                <span class="font-medium">1:00 PM - 2:00 PM</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span class="text-sm text-gray-600 dark:text-gray-400">Shift End</span>
                                                <span class="font-medium">6:00 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Today's Sales Target -->
                                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6">
                                        <div class="flex items-center mb-4">
                                            <div class="p-2 bg-green-100 dark:bg-green-900 rounded-full">
                                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                            <h3 class="ml-2 text-lg font-semibold text-gray-900 dark:text-gray-100">Today's Target</h3>
                                        </div>
                                        <div class="text-center">
                                            <p class="text-3xl font-bold text-gray-900 dark:text-gray-100">$1,500</p>
                                            <div class="mt-2 w-full bg-gray-200 rounded-full h-2 dark:bg-gray-700">
                                                <div class="bg-green-600 h-2 rounded-full" style="width: 65%"></div>
                                            </div>
                                            <p class="text-sm text-gray-600 mt-2">$975 achieved • 65%</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pending Tasks -->
                                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6">
                                        <div class="flex items-center mb-4">
                                            <div class="p-2 bg-yellow-100 dark:bg-yellow-900 rounded-full">
                                                <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                                </svg>
                                            </div>
                                            <h3 class="ml-2 text-lg font-semibold text-gray-900 dark:text-gray-100">Pending Tasks</h3>
                                        </div>
                                        <div class="space-y-2">
                                            <div class="flex items-center">
                                                <input type="checkbox" class="mr-2">
                                                <span class="text-sm">Process online orders (3)</span>
                                            </div>
                                            <div class="flex items-center">
                                                <input type="checkbox" class="mr-2">
                                                <span class="text-sm">Restock display items</span>
                                            </div>
                                            <div class="flex items-center">
                                                <input type="checkbox" class="mr-2">
                                                <span class="text-sm">Update price tags</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Actions and Recent Activity -->
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                <!-- Quick Actions -->
                                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Quick Actions</h3>
                                        <div class="grid grid-cols-2 gap-4">
                                            <a href="#" class="text-center p-4 bg-blue-50 dark:bg-blue-900/20 rounded-lg hover:bg-blue-100 transition">
                                                <svg class="w-8 h-8 text-blue-600 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1.5 6M18 13l1.5 6M9 21h6M12 18v3"></path>
                                                </svg>
                                                <span class="text-sm font-medium">New Sale</span>
                                            </a>
                                            <a href="#" class="text-center p-4 bg-green-50 dark:bg-green-900/20 rounded-lg hover:bg-green-100 transition">
                                                <svg class="w-8 h-8 text-green-600 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                                </svg>
                                                <span class="text-sm font-medium">Check Inventory</span>
                                            </a>
                                            <a href="#" class="text-center p-4 bg-purple-50 dark:bg-purple-900/20 rounded-lg hover:bg-purple-100 transition">
                                                <svg class="w-8 h-8 text-purple-600 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                                </svg>
                                                <span class="text-sm font-medium">Customer Lookup</span>
                                            </a>
                                            <a href="#" class="text-center p-4 bg-yellow-50 dark:bg-yellow-900/20 rounded-lg hover:bg-yellow-100 transition">
                                                <svg class="w-8 h-8 text-yellow-600 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                </svg>
                                                <span class="text-sm font-medium">Create Ticket</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Recent Activity Feed -->
                                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Recent Activity</h3>
                                        <div class="space-y-4">
                                            @foreach([
                                                ['action' => 'Processed sale #1001', 'time' => '10 minutes ago', 'icon' => 'cart'],
                                                ['action' => 'Updated product pricing', 'time' => '1 hour ago', 'icon' => 'tag'],
                                                ['action' => 'Restocked gaming mice', 'time' => '3 hours ago', 'icon' => 'box'],
                                                ['action' => 'Helped customer with laptop selection', 'time' => '5 hours ago', 'icon' => 'user'],
                                            ] as $activity)
                                            <div class="flex items-start space-x-3">
                                                <div class="flex-shrink-0">
                                                    @if($activity['icon'] == 'cart')
                                                        <div class="p-1 bg-blue-100 rounded-full">
                                                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1.5 6M18 13l1.5 6M9 21h6M12 18v3"></path>
                                                            </svg>
                                                        </div>
                                                    @elseif($activity['icon'] == 'tag')
                                                        <div class="p-1 bg-green-100 rounded-full">
                                                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l5 5a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-5-5A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                                            </svg>
                                                        </div>
                                                    @else
                                                        <div class="p-1 bg-gray-100 rounded-full">
                                                            <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                            </svg>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="flex-1">
                                                    <p class="text-sm text-gray-900 dark:text-gray-100">{{ $activity['action'] }}</p>
                                                    <p class="text-xs text-gray-500">{{ $activity['time'] }}</p>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
