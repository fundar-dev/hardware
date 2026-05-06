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
                                    <p class="text-gray-600 dark:text-gray-400">Here's your shop's performance overview.</p>
                                </div>
                            </div>

                            <!-- Stats Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                                <!-- Today's Sales -->
                                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6">
                                        <div class="flex items-center">
                                            <div class="p-3 bg-green-100 dark:bg-green-900 rounded-full">
                                                <svg class="w-6 h-6 text-green-600 dark:text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-4">
                                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Today's Sales</p>
                                                <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">$1,234</p>
                                                <p class="text-xs text-green-600">+15% from yesterday</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Monthly Revenue -->
                                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6">
                                        <div class="flex items-center">
                                            <div class="p-3 bg-blue-100 dark:bg-blue-900 rounded-full">
                                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-4">
                                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Monthly Revenue</p>
                                                <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">$18,342</p>
                                                <p class="text-xs text-green-600">+8% from last month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Total Orders -->
                                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6">
                                        <div class="flex items-center">
                                            <div class="p-3 bg-purple-100 dark:bg-purple-900 rounded-full">
                                                <svg class="w-6 h-6 text-purple-600 dark:text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-4">
                                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Orders</p>
                                                <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">342</p>
                                                <p class="text-xs text-green-600">+23 this month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Customer Rating -->
                                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6">
                                        <div class="flex items-center">
                                            <div class="p-3 bg-yellow-100 dark:bg-yellow-900 rounded-full">
                                                <svg class="w-6 h-6 text-yellow-600 dark:text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-4">
                                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Customer Rating</p>
                                                <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">4.8 ★</p>
                                                <p class="text-xs text-green-600">Based on 128 reviews</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Recent Orders and Low Stock -->
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                                <!-- Recent Orders -->
                                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Recent Orders</h3>
                                        <div class="space-y-4">
                                            @foreach([
                                                ['id' => '#1001', 'customer' => 'John Doe', 'items' => 3, 'total' => '$459', 'status' => 'Delivered'],
                                                ['id' => '#1002', 'customer' => 'Jane Smith', 'items' => 2, 'total' => '$189', 'status' => 'Processing'],
                                                ['id' => '#1003', 'customer' => 'Mike Johnson', 'items' => 1, 'total' => '$899', 'status' => 'Shipped'],
                                                ['id' => '#1004', 'customer' => 'Sarah Williams', 'items' => 4, 'total' => '$234', 'status' => 'Pending'],
                                            ] as $order)
                                            <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-700 pb-3">
                                                <div>
                                                    <p class="font-medium text-gray-900 dark:text-gray-100">{{ $order['id'] }}</p>
                                                    <p class="text-sm text-gray-500 dark:text-gray-400">{{ $order['customer'] }} • {{ $order['items'] }} items</p>
                                                </div>
                                                <div class="text-right">
                                                    <p class="font-medium text-gray-900 dark:text-gray-100">{{ $order['total'] }}</p>
                                                    <p class="text-xs @if($order['status'] == 'Delivered') text-green-600 @elseif($order['status'] == 'Processing') text-yellow-600 @elseif($order['status'] == 'Shipped') text-blue-600 @else text-gray-600 @endif">
                                                        {{ $order['status'] }}
                                                    </p>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="mt-4 text-center">
                                            <a href="#" class="text-blue-600 hover:text-blue-900 text-sm">View all orders →</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Low Stock Alerts -->
                                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Low Stock Alerts</h3>
                                        <div class="space-y-4">
                                            @foreach([
                                                ['product' => 'RTX 4070 Graphics Card', 'stock' => 3, 'threshold' => 5],
                                                ['product' => 'Gaming Mouse Pad XXL', 'stock' => 2, 'threshold' => 10],
                                                ['product' => 'USB-C Hub 7-in-1', 'stock' => 4, 'threshold' => 8],
                                                ['product' => 'Mechanical Keyboard Switches', 'stock' => 1, 'threshold' => 15],
                                            ] as $item)
                                            <div>
                                                <div class="flex justify-between mb-1">
                                                    <span class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ $item['product'] }}</span>
                                                    <span class="text-sm text-red-600">Stock: {{ $item['stock'] }}</span>
                                                </div>
                                                <div class="w-full bg-gray-200 rounded-full h-2 dark:bg-gray-700">
                                                    <div class="bg-red-600 h-2 rounded-full" style="width: {{ ($item['stock'] / $item['threshold']) * 100 }}%"></div>
                                                </div>
                                                <button class="mt-2 text-xs text-blue-600 hover:text-blue-900">Reorder now →</button>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Actions -->
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Quick Actions</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                        <a href="#" class="text-center p-4 bg-blue-50 dark:bg-blue-900/20 rounded-lg hover:bg-blue-100 transition">
                                            <svg class="w-8 h-8 text-blue-600 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                            </svg>
                                            <span class="text-sm font-medium">Add Product</span>
                                        </a>
                                        <a href="#" class="text-center p-4 bg-green-50 dark:bg-green-900/20 rounded-lg hover:bg-green-100 transition">
                                            <svg class="w-8 h-8 text-green-600 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1.5 6M18 13l1.5 6M9 21h6M12 18v3"></path>
                                            </svg>
                                            <span class="text-sm font-medium">New Order</span>
                                        </a>
                                        <a href="#" class="text-center p-4 bg-purple-50 dark:bg-purple-900/20 rounded-lg hover:bg-purple-100 transition">
                                            <svg class="w-8 h-8 text-purple-600 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                            </svg>
                                            <span class="text-sm font-medium">Manage Inventory</span>
                                        </a>
                                        <a href="#" class="text-center p-4 bg-yellow-50 dark:bg-yellow-900/20 rounded-lg hover:bg-yellow-100 transition">
                                            <svg class="w-8 h-8 text-yellow-600 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                            </svg>
                                            <span class="text-sm font-medium">View Reports</span>
                                        </a>
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
