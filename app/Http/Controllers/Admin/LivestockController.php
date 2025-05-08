<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Livestock;
use Illuminate\Http\Request;

class LivestockController extends Controller
{
    public function index()
    {
        $livestocks = Livestock::all();
        return view('admin.livestock.index', compact('livestocks'));
    }

    public function create()
    {
        return view('admin.livestock.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'age' => 'required|integer',
            'location' => 'required',
        ]);

        Livestock::create($request->all());
        return redirect()->route('livestock.index')->with('success', 'Livestock added successfully.');
    }

    public function edit(Livestock $livestock)
    {
        return view('admin.livestock.edit', compact('livestock'));
    }

    public function update(Request $request, Livestock $livestock)
    {
        $request->validate([
            'type' => 'required',
            'age' => 'required|integer',
            'location' => 'required',
        ]);

        $livestock->update($request->all());
        return redirect()->route('livestock.index')->with('success', 'Livestock updated successfully.');
    }

    public function destroy(Livestock $livestock)
    {
        $livestock->delete();
        return redirect()->route('livestock.index')->with('success', 'Livestock deleted.');
    }
    public function show(Livestock $livestock)
    {
        return view('admin.livestock.show', compact('livestock'));
    }
}
