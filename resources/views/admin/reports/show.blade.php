<x-app-layout>
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">📋 Report Details</h2>

        <div class="bg-white p-6 rounded shadow-md">
            <h3 class="text-xl font-bold">Title: {{ $report->title }}</h3>
            <p><strong>Description:</strong> {{ $report->description }}</p>
            <p><strong>Created At:</strong> {{ $report->created_at->format('d M Y') }}</p>
            <p><strong>Updated At:</strong> {{ $report->updated_at->format('d M Y') }}</p>
        </div>

        <div class="mt-4">
            <a href="{{ route('reports.index') }}" class="bg-blue-600 text-white font-bold py-2 px-4 rounded">Back to Reports List</a>
        </div>
    </div>
</x-app-layout>
