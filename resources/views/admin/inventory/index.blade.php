<x-app-layout>
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">📦 Inventory List</h2>

        <a href="{{ route('inventory.create') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
            ➕ Add New Item
        </a>

        <table class="min-w-full bg-white shadow-md rounded">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="py-2 px-4">Item</th>
                    <th class="py-2 px-4">Quantity</th>
                    <th class="py-2 px-4">Price</th>
                    <th class="py-2 px-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr class="border-t">
                    <td class="py-2 px-4">{{ $item->item }}</td>
                    <td class="py-2 px-4">{{ $item->quantity }}</td>
                    <td class="py-2 px-4">${{ $item->price }}</td>
                    <td class="py-2 px-4 space-x-2">
                        <a href="{{ route('inventory.show', $item) }}" class="text-blue-600 hover:underline">View</a>
                        <a href="{{ route('inventory.edit', $item) }}" class="text-yellow-600 hover:underline">Edit</a>
                        <form action="{{ route('inventory.destroy', $item) }}" method="POST" class="inline">
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
