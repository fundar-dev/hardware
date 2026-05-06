<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900 dark:text-gray-100">
                                    <div class="flex justify-between items-center mb-6">
                                        <h2 class="text-2xl font-bold">Create New Permission</h2>
                                        <a href="{{ route('admin.permissions.index') }}" 
                                        class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                            Back to Permissions
                                        </a>
                                    </div>

                                    <form action="{{ route('admin.permissions.store') }}" method="POST">
                                        @csrf

                                        <div class="mb-4">
                                            <label for="name" class="block text-sm font-medium mb-2">Permission Name</label>
                                            <input type="text" 
                                                name="name" 
                                                id="name" 
                                                value="{{ old('name') }}"
                                                class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700"
                                                placeholder="e.g., edit articles, delete users, view reports"
                                                required>
                                            @error('name')
                                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                            <p class="text-gray-500 text-xs mt-1">Use lowercase and separate words with spaces or underscores</p>
                                        </div>

                                        <div class="mb-4">
                                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                Create Permission
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
