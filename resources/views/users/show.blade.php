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
                                        <h2 class="text-2xl font-bold">User Details</h2>
                                        <div>
                                            <a href="{{ route('users.edit', $user) }}" 
                                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2">
                                                Edit User
                                            </a>
                                            <a href="{{ route('users.index') }}" 
                                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                                Back to Users
                                            </a>
                                        </div>
                                    </div>

                                    <div class="mb-6">
                                        <h3 class="text-lg font-semibold mb-2">User Information</h3>
                                        <div class="grid grid-cols-2 gap-4 bg-gray-50 dark:bg-gray-700 p-4 rounded">
                                            <div>
                                                <strong>ID:</strong> {{ $user->id }}
                                            </div>
                                            <div>
                                                <strong>Name:</strong> {{ $user->name }}
                                            </div>
                                            <div>
                                                <strong>Email:</strong> {{ $user->email }}
                                            </div>
                                            <div>
                                                <strong>Role:</strong>
                                                @foreach($user->roles as $role)
                                                    <span class="px-2 py-1 text-xs rounded-full 
                                                        @if($role->name === 'admin') bg-red-100 text-red-800
                                                        @elseif($role->name === 'shop-owner') bg-purple-100 text-purple-800
                                                        @else bg-blue-100 text-blue-800
                                                        @endif">
                                                        {{ ucfirst($role->name) }}
                                                    </span>
                                                @endforeach
                                            </div>
                                            <div>
                                                <strong>Email Verified:</strong> 
                                                {{ $user->email_verified_at ? $user->email_verified_at->format('Y-m-d H:i:s') : 'Not verified' }}
                                            </div>
                                            <div>
                                                <strong>Created At:</strong> {{ $user->created_at->format('Y-m-d H:i:s') }}
                                            </div>
                                            <div>
                                                <strong>Updated At:</strong> {{ $user->updated_at->format('Y-m-d H:i:s') }}
                                            </div>
                                        </div>
                                    </div>

                                    @if($user->permissions->count() > 0)
                                    <div>
                                        <h3 class="text-lg font-semibold mb-2">Direct Permissions (if any)</h3>
                                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded">
                                            <div class="flex flex-wrap gap-2">
                                                @foreach($user->permissions as $permission)
                                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">
                                                        {{ $permission->name }}
                                                    </span>
                                                @endforeach
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
