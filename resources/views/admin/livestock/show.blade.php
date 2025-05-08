<x-app-layout>
    <div class="container mx-auto p-4">
    <h2 class="text-2xl font-bold">🐑🌿 Livestock  Details</h2>

        <div class="bg-white shadow-md rounded px-8 py-6">
            <p><strong>Type:</strong> {{ $livestock->type }}</p>
            <p><strong>Age:</strong> {{ $livestock->age }} months</p>
            <p><strong>Location:</strong> {{ $livestock->location }}</p>
            <p><strong>Health:</strong> {{ $livestock->health_status }}</p>
            <p><strong>Feeding:</strong> {{ $livestock->feeding_schedule }}</p>
            <p><strong>Created At:</strong> {{ $livestock->created_at ? $livestock->created_at->format('Y-m-d') : 'Not Available' }}</p>

        </div>

        <a href="{{ route('livestock.index') }}" class="mt-4 inline-block text-blue-600 hover:underline">← Back to Livestock</a>
    </div>
</x-app-layout>
