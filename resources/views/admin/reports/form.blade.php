<form method="POST" action="{{ $action }}">
    @csrf

    <div class="mb-4">
        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}"
               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
    </div>

    <div class="mb-4">
        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
        <textarea name="content" id="content" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('content') }}</textarea>
    </div>

    <!-- Report Type Section (e.g., Livestock, Inventory, Finance) -->
    <div class="mb-4">
        <label for="type" class="block text-sm font-medium text-gray-700">Report Type</label>
        <select name="type" id="type"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            <option value="Livestock" {{ old('type') == 'Livestock' ? 'selected' : '' }}>Livestock</option>
            <option value="Inventory" {{ old('type') == 'Inventory' ? 'selected' : '' }}>Inventory</option>
            <option value="Finance" {{ old('type') == 'Finance' ? 'selected' : '' }}>Finance</option>
        </select>
    </div>

    <!-- Report Date Section -->
    <div class="mb-4">
        <label for="report_date" class="block text-sm font-medium text-gray-700">Report Date</label>
        <input type="date" name="report_date" id="report_date" value="{{ old('report_date') }}"
               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Save Report
    </button>
</form>
