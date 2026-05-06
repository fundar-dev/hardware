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
                                        <h2 class="text-2xl font-bold">Manage Permissions for: {{ $role->name }}</h2>
                                        <a href="{{ route('admin.roles.show', $role) }}" 
                                        class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                            Back to Role
                                        </a>
                                    </div>

                                    <form action="{{ route('admin.roles.sync-permissions', $role) }}" method="POST">
                                        @csrf
                                        
                                        <div class="mb-4">
                                            <div class="border border-gray-300 dark:border-gray-600 rounded-md p-4 max-h-96 overflow-y-auto">
                                                @php
                                                    $groupedPermissions = $permissions->groupBy(function($permission) {
                                                        return explode(' ', $permission->name)[0];
                                                    });
                                                @endphp
                                                
                                                @foreach($groupedPermissions as $group => $perms)
                                                    <div class="mb-4">
                                                        <h3 class="font-semibold text-md mb-2 capitalize">{{ $group }} Permissions</h3>
                                                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 ml-4">
                                                            @foreach($perms as $permission)
                                                                <label class="inline-flex items-center">
                                                                    <input type="checkbox" 
                                                                        name="permissions[]" 
                                                                        value="{{ $permission->id }}"
                                                                        {{ in_array($permission->id, $rolePermissions) ? 'checked' : '' }}
                                                                        class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                                                    <span class="ml-2 text-sm">{{ $permission->name }}</span>
                                                                </label>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                Update Permissions
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
