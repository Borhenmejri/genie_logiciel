<x-app-layout>
    <h2 class="text-2xl font-bold mb-4">{{ isset($user) ? 'Edit User' : 'Add New User' }}</h2>
    @include('admin.users.form')
</x-app-layout>
