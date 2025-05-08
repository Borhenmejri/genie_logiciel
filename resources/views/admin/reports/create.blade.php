<x-app-layout>
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">➕ Create New Report</h2>

        @include('admin.reports.form', ['action' => route('reports.store')])
    </div>
</x-app-layout>
