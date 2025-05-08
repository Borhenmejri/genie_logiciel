<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <form action="{{ $action }}" method="POST">
        @csrf
        @if(isset($inventory)) @method('PUT') @endif

        <input type="text" name="item" value="{{ old('item', $inventory->item ?? '') }}" placeholder="Item Name" class="form-input mb-4 w-full" required>
        <input type="number" name="quantity" value="{{ old('quantity', $inventory->quantity ?? '') }}" placeholder="Quantity" class="form-input mb-4 w-full" required>
        <input type="number" name="price" value="{{ old('price', $inventory->price ?? '') }}" placeholder="Price" class="form-input mb-4 w-full" required>
        <input type="text" name="description" value="{{ old('description', $inventory->description ?? '') }}" placeholder="Description" class="form-input mb-4 w-full">
        
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            {{ isset($inventory) ? 'Update' : 'Create' }} Item
        </button>
    </form>
</div>
