@csrf

<input type="text" name="type" value="{{ old('type', $livestock->type ?? '') }}" placeholder="Type (e.g., Cow)" required class="form-input mb-4 w-full">
<input type="number" name="age" value="{{ old('age', $livestock->age ?? '') }}" placeholder="Age in months" required class="form-input mb-4 w-full">
<input type="text" name="location" value="{{ old('location', $livestock->location ?? '') }}" placeholder="Location" required class="form-input mb-4 w-full">
<input type="text" name="health_status" value="{{ old('health_status', $livestock->health_status ?? '') }}" placeholder="Health Status" required class="form-input mb-4 w-full">
<input type="text" name="feeding_schedule" value="{{ old('feeding_schedule', $livestock->feeding_schedule ?? '') }}" placeholder="Feeding Schedule" required class="form-input mb-4 w-full">

<button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    {{ isset($livestock) ? 'Update Livestock' : 'Save Livestock' }}
</button>
