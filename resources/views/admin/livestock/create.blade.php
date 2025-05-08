<x-app-layout>
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">➕ Add New livestock</h2>

        <form action="{{ route('livestock.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @include('admin.livestock.form')  <!-- Include the shared form -->
        </form>
    </div>
</x-app-layout>
