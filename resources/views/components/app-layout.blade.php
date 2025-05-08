<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AgriFlow - {{ $title ?? 'Admin Panel' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-300 to-green-800 min-h-screen text-gray-800">

    <!-- Navigation -->
    <nav class="bg-green-800 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-semibold tracking-wide">🌱 AgriFlow</div>
            <div class="space-x-4 text-sm md:text-base">
                <a href="{{ route('dashboard') }}" class="hover:underline">Dashboard</a>
                <a href="{{ route('users.index') }}" class="hover:underline">Users</a>
                <a href="{{ route('livestock.index') }}" class="hover:underline">Livestock</a>
                <a href="{{ route('inventory.index') }}" class="hover:underline">Inventory</a>
                <a href="{{ route('financial.index') }}" class="hover:underline">Finance</a>
                <a href="{{ route('reports.index') }}" class="hover:underline">Reports</a>
                <a href="{{ route('logout') }}" class="text-red-300 hover:text-red-500">Logout</a>
                <a href="{{ route('login') }}" class="bg-white text-green-800 px-2 py-1 rounded hover:bg-green-100">Login</a>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <main class="container mx-auto mt-10 px-6 py-8 bg-white shadow-xl rounded-2xl">
        {{ $slot }}
    </main>

</body>
</html>
