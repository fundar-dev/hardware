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
                                        <h2 class="text-2xl font-bold">Permission Management</h2>
                                        <a href="{{ route('admin.permissions.create') }}" 
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            + Create New Permission
                                        </a>
                                    </div>

                                    @if(session('success'))
                                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    @if(session('error'))
                                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                                            {{ session('error') }}
                                        </div>
                                    @endif

                                        <div class="overflow-x-auto">
                                            <table class="min-w-full bg-white dark:bg-gray-800 border">
                                                <thead>
                                                    <tr>
                                                        <th class="px-6 py-3 border-b-2 border-gray-300 dark:border-gray-600 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                                                            ID
                                                        </th>
                                                        <th class="px-6 py-3 border-b-2 border-gray-300 dark:border-gray-600 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                                                            Permission Name
                                                        </th>
                                                        <th class="px-6 py-3 border-b-2 border-gray-300 dark:border-gray-600 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                                                            Guard Name
                                                        </th>
                                                        <th class="px-6 py-3 border-b-2 border-gray-300 dark:border-gray-600 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                                                            Created At
                                                        </th>
                                                        <th class="px-6 py-3 border-b-2 border-gray-300 dark:border-gray-600 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                                                            Actions
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse($permissions as $permission)
                                                    <tr>
                                                        <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                                            {{ $permission->id }}
                                                        </td>
                                                        <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                                            {{ $permission->name }}
                                                        </td>
                                                        <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                                            {{ $permission->guard_name }}
                                                        </td>
                                                        <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                                            {{ $permission->created_at->format('Y-m-d H:i') }}
                                                        </td>
                                                        <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                                            <a href="{{ route('admin.permissions.show', $permission) }}" 
                                                            class="text-blue-600 hover:text-blue-900 mr-3">View</a>
                                                            <a href="{{ route('admin.permissions.edit', $permission) }}" 
                                                            class="text-green-600 hover:text-green-900 mr-3">Edit</a>
                                                            <form action="{{ route('admin.permissions.destroy', $permission) }}" 
                                                                method="POST" 
                                                                class="inline-block"
                                                                onsubmit="return confirm('Are you sure you want to delete this permission?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="6" class="px-6 py-4 text-center">No permissions found.</td>
                                                    </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="mt-4">
                                            {{ $permissions->links() }}
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
