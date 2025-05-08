<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        $reports = Report::all();
        return view('admin.reports.index', compact('reports'));
    }

    public function create()
    {
        return view('admin.reports.create');
    }

    public function store(Request $request)
{
        $request->validate([
            'title' => 'required|string',
            'content' => 'nullable|string',
            'type' => 'required|string',  // Validate that 'type' is provided
            'report_date' => 'required|date',
        ]);

        Report::create([
            'title' => $request->title,
            'content' => $request->content,
            'type' => $request->type,   // Ensure this is passed to the model
            'report_date' => $request->report_date,
        ]);

        return redirect()->route('reports.index');
    }

    public function show(Report $report)
    {
        return view('admin.reports.show', compact('report'));
    }

    public function edit(Report $report)
    {
        return view('admin.reports.edit', compact('report'));
    }

    public function update(Request $request, Report $report)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $report->update($request->all());

        return redirect()->route('reports.index');
    }

    public function destroy(Report $report)
    {
        $report->delete();
        return redirect()->route('reports.index');
    }
}
