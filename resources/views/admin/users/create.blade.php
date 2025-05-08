<x-app-layout>
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">➕ Add New User</h2>

        <form action="{{ route('users.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @include('admin.users.form') <!-- This should be safe now -->
        </form>
    </div>
</x-app-layout>
