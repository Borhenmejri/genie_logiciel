<x-app-layout>
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">📦 Item Details</h2>

        <div class="bg-white shadow-md rounded px-8 py-6">
            <p><strong>Item:</strong> {{ $inventory->item }}</p>
            <p><strong>Quantity:</strong> {{ $inventory->quantity }}</p>
            <p><strong>Price:</strong> ${{ $inventory->price }}</p>
            <p><strong>Description:</strong> {{ $inventory->description }}</p>
            <p><strong>Created At:</strong> {{ $inventory->created_at->format('Y-m-d') }}</p>
        </div>

        <a href="{{ route('inventory.index') }}" class="mt-4 inline-block text-blue-600 hover:underline">← Back to Inventory</a>
    </div>
</x-app-layout>
