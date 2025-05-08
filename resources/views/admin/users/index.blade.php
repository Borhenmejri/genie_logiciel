<x-app-layout>
    <h2 class="text-2xl font-bold mb-4">All Users</h2>

    <a href="{{ route('users.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded mb-4 inline-block">
        ➕ Add New User
    </a>

    <table class="w-full table-auto border-collapse bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-green-600 text-white">
            <tr>
                <th class="p-3 text-left">Name</th>
                <th class="p-3 text-left">Email</th>
                <th class="p-3 text-left">Role</th>
                <th class="p-3 text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr class="border-b hover:bg-gray-50">
                <td class="p-3">{{ $user->name }}</td>
                <td class="p-3">{{ $user->email }}</td>
                <td class="p-3 capitalize">{{ $user->role }}</td>
                <td class="p-3 space-x-2">
                    <a href="{{ route('users.show', $user) }}" class="text-blue-600 hover:underline">View</a>
                    <a href="{{ route('users.edit', $user) }}" class="text-yellow-600 hover:underline">Edit</a>
                    <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button class="text-red-600 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="p-4 text-center text-gray-500">No users found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</x-app-layout>
