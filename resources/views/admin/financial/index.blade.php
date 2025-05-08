<x-app-layout>
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">📊 Financial Records</h2>

        <a href="{{ route('financial.create') }}" class="bg-green-600 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
            ➕ Add New Financial Record
        </a>

        <table class="min-w-full bg-white border border-gray-300 rounded shadow-md">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b text-left">Type</th>
                    <th class="py-2 px-4 border-b text-left">Amount</th>
                    <th class="py-2 px-4 border-b text-left">Description</th>
                    <th class="py-2 px-4 border-b text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($financialRecords as $record)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $record->type }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($record->amount, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ $record->description }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('financial.show', $record->id) }}" class="text-blue-600 hover:underline">View</a> |
                        <a href="{{ route('financial.edit', $record->id) }}" class="text-yellow-600 hover:underline">Edit</a> |
                        <form action="{{ route('financial.destroy', $record->id) }}" method="POST" class="inline">
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
