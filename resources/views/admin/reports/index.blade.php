<x-app-layout>
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">📊 Reports</h2>

        <a href="{{ route('reports.create') }}" class="bg-green-600 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
            ➕ Create New Report
        </a>

        <table class="min-w-full bg-white border border-gray-300 rounded shadow-md">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b text-left">Title</th>
                    <th class="py-2 px-4 border-b text-left">Created At</th>
                    <th class="py-2 px-4 border-b text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $report)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $report->title }}</td>
                    <td class="py-2 px-4 border-b">{{ $report->created_at->format('d M Y') }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('reports.show', $report->id) }}" class="text-blue-600 hover:underline">View</a> |
                        <a href="{{ route('reports.edit', $report->id) }}" class="text-yellow-600 hover:underline">Edit</a> |
                        <form action="{{ route('reports.destroy', $report->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
