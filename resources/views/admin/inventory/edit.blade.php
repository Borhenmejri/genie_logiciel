<x-app-layout>
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">✏️ Edit Inventory Item</h2>

        @include('admin.inventory.form', ['action' => route('inventory.update', $inventory)])
    </div>
</x-app-layout>
