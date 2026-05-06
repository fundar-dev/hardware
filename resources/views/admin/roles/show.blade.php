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
                                        <h2 class="text-2xl font-bold">Role Details: {{ $role->name }}</h2>
                                        <div>
                                            <a href="{{ route('admin.roles.edit', $role) }}" 
                                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2">
                                                Edit Role
                                            </a>
                                            <a href="{{ route('admin.roles.index') }}" 
                                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                                Back to Roles
                                            </a>
                                        </div>
                                    </div>

                                    <div class="mb-6">
                                        <h3 class="text-lg font-semibold mb-2">Role Information</h3>
                                        <div class="grid grid-cols-2 gap-4 bg-gray-50 dark:bg-gray-700 p-4 rounded">
                                            <div>
                                                <strong>ID:</strong> {{ $role->id }}
                                            </div>
                                            <div>
                                                <strong>Name:</strong> {{ $role->name }}
                                            </div>
                                            <div>
                                                <strong>Guard Name:</strong> {{ $role->guard_name }}
                                            </div>
                                            <div>
                                                <strong>Created At:</strong> {{ $role->created_at->format('Y-m-d H:i:s') }}
                                            </div>
                                            <div>
                                                <strong>Updated At:</strong> {{ $role->updated_at->format('Y-m-d H:i:s') }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-6">
                                        <h3 class="text-lg font-semibold mb-2">Permissions Assigned ({{ $role->permissions->count() }})</h3>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded">
                                            @if($role->permissions->count() > 0)
                                                <div class="flex flex-wrap gap-2">
                                                    @foreach($role->permissions->groupBy(function($permission) {
                                                        return explode(' ', $permission->name)[0];
                                                    }) as $group => $permissions)
                                                        <div class="w-full mb-3">
                                                            <h4 class="font-semibold text-md capitalize mb-2">{{ $group }}</h4>
                                                            <div class="flex flex-wrap gap-2 ml-4">
                                                                @foreach($permissions as $permission)
                                                                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">
                                                                        {{ $permission->name }}
                                                                    </span>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @else
                                                <p class="text-gray-500">No permissions assigned to this role.</p>
                                            @endif
                                        </div>
                                    </div>

                                    @if($users->count() > 0)
                                    <div>
                                        <h3 class="text-lg font-semibold mb-2">Users with this Role ({{ $role->users()->count() }})</h3>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded">
                                            <div class="overflow-x-auto">
                                                <table class="min-w-full">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-left py-2">ID</th>
                                                            <th class="text-left py-2">Name</th>
                                                            <th class="text-left py-2">Email</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($users as $user)
                                                        <tr>
                                                            <td class="py-1">{{ $user->id }}</td>
                                                            <td class="py-1">{{ $user->name }}</td>
                                                            <td class="py-1">{{ $user->email }}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                @if($role->users()->count() > 10)
                                                    <p class="text-sm text-gray-500 mt-2">And {{ $role->users()->count() - 10 }} more users...</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
