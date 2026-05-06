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
                                        <h2 class="text-2xl font-bold">Permission Details</h2>
                                        <div>
                                            <a href="{{ route('admin.permissions.edit', $permission) }}" 
                                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2">
                                                Edit Permission
                                            </a>
                                            <a href="{{ route('admin.permissions.index') }}" 
                                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                                Back to Permissions
                                            </a>
                                        </div>
                                    </div>

                                    <div class="mb-6">
                                        <h3 class="text-lg font-semibold mb-2">Permission Information</h3>
                                        <div class="grid grid-cols-2 gap-4">
                                            <div>
                                                <strong>ID:</strong> {{ $permission->id }}
                                            </div>
                                            <div>
                                                <strong>Name:</strong> {{ $permission->name }}
                                            </div>
                                            <div>
                                                <strong>Guard Name:</strong> {{ $permission->guard_name }}
                                            </div>
                                            <div>
                                                <strong>Created At:</strong> {{ $permission->created_at->format('Y-m-d H:i:s') }}
                                            </div>
                                            <div>
                                                <strong>Updated At:</strong> {{ $permission->updated_at->format('Y-m-d H:i:s') }}
                                            </div>
                                        </div>
                                    </div>

                                    @if($roles->count() > 0)
                                    <div class="mb-6">
                                        <h3 class="text-lg font-semibold mb-2">Roles with this Permission</h3>
                                        <div class="flex flex-wrap gap-2">
                                            @foreach($roles as $role)
                                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">
                                                    {{ $role->name }}
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif

                                    @if($users->count() > 0)
                                    <div>
                                        <h3 class="text-lg font-semibold mb-2">Users with Direct Permission</h3>
                                        <div class="flex flex-wrap gap-2">
                                            @foreach($users as $user)
                                                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">
                                                    {{ $user->name }}
                                                </span>
                                            @endforeach
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
