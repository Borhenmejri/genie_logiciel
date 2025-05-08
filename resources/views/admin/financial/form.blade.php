<form method="POST" action="{{ $action }}">
    @csrf

    <div class="mb-4">
        <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
        <input type="date" name="date" id="date" value="{{ old('date') }}"
               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
    </div>

    <div class="mb-4">
        <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
        <select name="type" id="type"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            <option value="Income" {{ old('type') == 'Income' ? 'selected' : '' }}>Income</option>
            <option value="Expense" {{ old('type') == 'Expense' ? 'selected' : '' }}>Expense</option>
        </select>
    </div>

    <div class="mb-4">
        <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
        <input type="number" name="amount" id="amount" value="{{ old('amount') }}"
               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
    </div>

    <div class="mb-4">
        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
        <textarea name="description" id="description"
                  class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('description') }}</textarea>
    </div>

    <button type="submit"
            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Save Record
    </button>
</form>
