<x-app-layout>
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">✏️ Edit Financial Record</h2>

        @include('admin.financial.form', ['action' => route('financial.update', $financial)])
    </div>
</x-app-layout>
