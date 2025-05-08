<x-app-layout>
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">🐑🌿 Livestock  List</h2>

        <a href="{{ route('livestock.create') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
            ➕ Add New Livestock
        </a>

        <table class="min-w-full bg-white shadow-md rounded">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="py-2 px-4">Type</th>
                    <th class="py-2 px-4">Age</th>
                    <th class="py-2 px-4">Location</th>
                    <th class="py-2 px-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($livestocks as $item)
                <tr class="border-t">
                    <td class="py-2 px-4">{{ $item->type }}</td>
                    <td class="py-2 px-4">{{ $item->age }} months</td>
                    <td class="py-2 px-4">{{ $item->location }}</td>
                    <td class="py-2 px-4 space-x-2">
                        <a href="{{ route('livestock.show', $item) }}" class="text-blue-600 hover:underline">View</a>
                        <a href="{{ route('livestock.edit', $item) }}" class="text-yellow-600 hover:underline">Edit</a>
                        <form action="{{ route('livestock.destroy', $item) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button class="text-red-600 hover:underline" onclick="return confirm('Delete this item?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
