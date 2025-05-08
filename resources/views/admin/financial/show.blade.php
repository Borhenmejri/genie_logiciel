<x-app-layout>
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">📋 Financial Record Details</h2>

        <div class="bg-white p-6 rounded shadow-md">
            <h3 class="text-xl font-bold">Transaction Type: {{ $financial->type }}</h3>
            <p><strong>Amount:</strong> {{ number_format($financial->amount, 2) }}</p>
            <p><strong>Description:</strong> {{ $financial->description ?? 'No description available' }}</p>
            <p><strong>Created At:</strong> {{ $financial->created_at ? $financial->created_at->format('Y-m-d') : 'Not Available' }}</p>
            <p><strong>Updated At:</strong> {{ $financial->created_at ? $financial->updated_at->format('Y-m-d') : 'Not Available' }}</p>

        </div>

        <div class="mt-4">
            <a href="{{ route('financial.index') }}" class="bg-blue-600 text-white font-bold py-2 px-4 rounded">Back to List</a>
        </div>
    </div>
</x-app-layout>
