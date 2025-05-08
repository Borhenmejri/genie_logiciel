<?php

namespace App\Http\Controllers\Admin;

use App\Models\Financial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FinancialController extends Controller
{
    public function index()
    {
        $financialRecords = Financial::all();
        return view('admin.financial.index', compact('financialRecords'));
    }

    public function create()
    {
        return view('admin.financial.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'type' => 'required|in:Income,Expense',
            'amount' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        Financial::create([
            'date' => $request->date,
            'type' => $request->type,
            'amount' => $request->amount,
            'description' => $request->description,
        ]);

        return redirect()->route('financial.index')->with('success', 'Financial record added successfully.');
    }


    public function show(Financial $financial)
    {
        return view('admin.financial.show', compact('financial'));
    }

    public function edit(Financial $financial)
    {
        return view('admin.financial.edit', compact('financial'));
    }

    public function update(Request $request, Financial $financial)
    {
        $request->validate([
            'type' => 'required',
            'amount' => 'required|numeric',
            'description' => 'nullable',
        ]);

        $financial->update($request->all());

        return redirect()->route('financial.index');
    }

    public function destroy(Financial $financial)
    {
        $financial->delete();
        return redirect()->route('financial.index');
    }
}
