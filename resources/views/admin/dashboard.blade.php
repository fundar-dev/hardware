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
                                    <h1 class="text-2xl mb-2">Welcome back, <strong>{{ $user->name }}</strong>!</h1>
                                    <p class="text-gray-600 dark:text-gray-400">Here's what's happening with your computer shop today.</p>
                                </div>
                            </div>

                            <!-- Stats Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                                <!-- Total Users -->
                                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6">
                                        <div class="flex items-center">
                                            <div class="p-3 bg-blue-100 dark:bg-blue-900 rounded-full">
                                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-4">
                                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Users</p>
                                                <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">24</p>
                                                <p class="text-xs text-green-600">+3 this month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Total Products -->
                                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6">
                                        <div class="flex items-center">
                                            <div class="p-3 bg-green-100 dark:bg-green-900 rounded-full">
                                                <svg class="w-6 h-6 text-green-600 dark:text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-4">
                                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Products</p>
                                                <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">156</p>
                                                <p class="text-xs text-green-600">+12 this week</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Total Sales -->
                                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6">
                                        <div class="flex items-center">
                                            <div class="p-3 bg-yellow-100 dark:bg-yellow-900 rounded-full">
                                                <svg class="w-6 h-6 text-yellow-600 dark:text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-4">
                                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Sales</p>
                                                <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">$45,231</p>
                                                <p class="text-xs text-green-600">+20.1% from last month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Low Stock Alert -->
                                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6">
                                        <div class="flex items-center">
                                            <div class="p-3 bg-red-100 dark:bg-red-900 rounded-full">
                                                <svg class="w-6 h-6 text-red-600 dark:text-red-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-4">
                                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Low Stock Items</p>
                                                <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">8</p>
                                                <p class="text-xs text-red-600">Need to reorder soon</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Charts and Recent Activity -->
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                <!-- Recent Sales -->
                                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Recent Sales</h3>
                                        <div class="space-y-4">
                                            @foreach([
                                                ['customer' => 'John Doe', 'product' => 'Gaming Laptop', 'amount' => '$1,299', 'status' => 'Completed'],
                                                ['customer' => 'Jane Smith', 'product' => 'Mechanical Keyboard', 'amount' => '$89', 'status' => 'Processing'],
                                                ['customer' => 'Mike Johnson', 'product' => '27" Monitor', 'amount' => '$249', 'status' => 'Completed'],
                                                ['customer' => 'Sarah Williams', 'product' => 'Wireless Mouse', 'amount' => '$35', 'status' => 'Shipped'],
                                            ] as $sale)
                                            <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-700 pb-3">
                                                <div>
                                                    <p class="font-medium text-gray-900 dark:text-gray-100">{{ $sale['customer'] }}</p>
                                                    <p class="text-sm text-gray-500 dark:text-gray-400">{{ $sale['product'] }}</p>
                                                </div>
                                                <div class="text-right">
                                                    <p class="font-medium text-gray-900 dark:text-gray-100">{{ $sale['amount'] }}</p>
                                                    <p class="text-xs @if($sale['status'] == 'Completed') text-green-600 @elseif($sale['status'] == 'Processing') text-yellow-600 @else text-blue-600 @endif">
                                                        {{ $sale['status'] }}
                                                    </p>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="mt-4 text-center">
                                            <a href="#" class="text-blue-600 hover:text-blue-900 text-sm">View all sales →</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Popular Products -->
                                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Popular Products</h3>
                                        <div class="space-y-4">
                                            @foreach([
                                                ['product' => 'Gaming Laptop RTX 4060', 'sales' => 45, 'stock' => 12],
                                                ['product' => 'Mechanical Keyboard RGB', 'sales' => 38, 'stock' => 25],
                                                ['product' => '27" 144Hz Monitor', 'sales' => 32, 'stock' => 8],
                                                ['product' => 'Wireless Gaming Mouse', 'sales' => 56, 'stock' => 30],
                                            ] as $product)
                                            <div>
                                                <div class="flex justify-between mb-1">
                                                    <span class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ $product['product'] }}</span>
                                                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ $product['sales'] }} sold</span>
                                                </div>
                                                <div class="w-full bg-gray-200 rounded-full h-2 dark:bg-gray-700">
                                                    <div class="bg-blue-600 h-2 rounded-full" style="width: {{ min(100, ($product['sales'] / 60) * 100) }}%"></div>
                                                </div>
                                                <p class="text-xs text-gray-500 mt-1">Stock: {{ $product['stock'] }} units left</p>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- System Info -->
                            <div class="mt-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">System Information</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <div>
                                            <p class="text-sm text-gray-500 dark:text-gray-400">Platform Version</p>
                                            <p class="font-medium text-gray-900 dark:text-gray-100">v2.0.0</p>
                                        </div>
                                        <div>
                                            <p class="text-sm text-gray-500 dark:text-gray-400">Last Backup</p>
                                            <p class="font-medium text-gray-900 dark:text-gray-100">{{ now()->format('Y-m-d H:i') }}</p>
                                        </div>
                                        <div>
                                            <p class="text-sm text-gray-500 dark:text-gray-400">Active Sessions</p>
                                            <p class="font-medium text-gray-900 dark:text-gray-100">3</p>
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
