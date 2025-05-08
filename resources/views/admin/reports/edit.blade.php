<x-app-layout>
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">✏️ Edit Report</h2>

        @include('admin.reports.form', ['action' => route('reports.update', $report)])
    </div>
</x-app-layout>
