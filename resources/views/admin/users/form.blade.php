<form 
    action="{{ isset($user) ? route('users.update', $user) : route('users.store') }}" 
    method="POST"
    class="space-y-6 bg-white p-6 shadow-md rounded-lg"
>
    @csrf
    @if(isset($user)) @method('PUT') @endif

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Name</label>
        <input type="text" name="name" value="{{ old('name', $user->name ?? '') }}"
           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>


    <div>
        <label class="block text-gray-700 font-semibold mb-1">Email</label>
        <input type="email" name="email" class="w-full p-2 border rounded" value="{{ old('email', $user->email ?? '') }}" placeholder="Email" required>
    </div>

    @if(!isset($user))
    <div>
        <label class="block text-gray-700 font-semibold mb-1">Password</label>
        <input type="password" name="password" class="w-full p-2 border rounded" placeholder="Password" required>
    </div>
    @endif

    <div>
        <label class="block text-gray-700 font-semibold mb-1">Role</label>
        <select name="role" class="w-full p-2 border rounded" required>
            <option value="">Select Role</option>
            <option value="admin" @selected(old('role', $user->role ?? '') === 'admin')>Admin</option>
            <option value="worker" @selected(old('role', $user->role ?? '') === 'worker')>Worker</option>
        </select>
    </div>

    <div>
        <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">
            {{ isset($user) ? 'Update User' : 'Create User' }}
        </button>
    </div>
</form>
