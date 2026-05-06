<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Login with role name -->
                    <p class="mb-4">You are logged in as: <strong>{{ Auth::user()->roles->pluck('name')->join(', ') }}</strong></p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
