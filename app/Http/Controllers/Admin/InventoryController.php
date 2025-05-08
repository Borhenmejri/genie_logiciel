<?php

namespace App\Http\Controllers\Admin;

use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InventoryController extends Controller
{
    public function index()
    {
        $items = Inventory::all();
        return view('admin.inventory.index', compact('items'));
    }

    public function create()
    {
        return view('admin.inventory.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'item' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'nullable',
        ]);

        Inventory::create($request->all());

        return redirect()->route('inventory.index');
    }

    public function show(Inventory $inventory)
    {
        return view('admin.inventory.show', compact('inventory'));
    }

    public function edit(Inventory $inventory)
    {
        return view('admin.inventory.edit', compact('inventory'));
    }

    public function update(Request $request, Inventory $inventory)
    {
        $request->validate([
            'item' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'nullable',
        ]);

        $inventory->update($request->all());

        return redirect()->route('inventory.index');
    }

    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect()->route('inventory.index');
    }
}
