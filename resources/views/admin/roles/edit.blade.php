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
                                        <h2 class="text-2xl font-bold">Edit Role: {{ $role->name }}</h2>
                                        <a href="{{ route('admin.roles.index') }}" 
                                        class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                            Back to Roles
                                        </a>
                                    </div>

                                    <form action="{{ route('admin.roles.update', $role) }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="mb-4">
                                            <label for="name" class="block text-sm font-medium mb-2">Role Name</label>
                                            <input type="text" 
                                                name="name" 
                                                id="name" 
                                                value="{{ old('name', $role->name) }}"
                                                class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700"
                                                placeholder="e.g., manager, editor, viewer"
                                                required>
                                            @error('name')
                                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-4">
                                            <label for="guard_name" class="block text-sm font-medium mb-2">Guard Name</label>
                                            <select name="guard_name" 
                                                    id="guard_name" 
                                                    class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700">
                                                <option value="web" {{ $role->guard_name == 'web' ? 'selected' : '' }}>Web</option>
                                                <option value="api" {{ $role->guard_name == 'api' ? 'selected' : '' }}>API</option>
                                            </select>
                                            @error('guard_name')
                                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-4">
                                            <label class="block text-sm font-medium mb-2">Assign Permissions</label>
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
                                                Update Role
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
