<x-app-layout>
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">🐄 users Details</h2>

        <div class="bg-white shadow-md rounded px-8 py-6">
            <p><strong>name:</strong> {{ $user->name }}</p>
            <p><strong>email:</strong> {{ $user->email }}</p>
            <p><strong>password:</strong> {{ $user->password }}</p>
            <p><strong>role:</strong> {{ $user->role }}</p>
        </div>

        <a href="{{ route('users.index') }}" class="mt-4 inline-block text-blue-600 hover:underline">← Back to users</a>
    </div>
</x-app-layout>
