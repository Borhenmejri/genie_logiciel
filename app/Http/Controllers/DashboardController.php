<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livestock;
use App\Models\Financial;
use App\Models\Inventory;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Grouped livestock types and their total count
        $livestockStats = Livestock::select('type', DB::raw('COUNT(*) as total'))
            ->groupBy('type')
            ->get();

        // Grouped financial records by type (income/expense)
        $financialStats = Financial::select('type', DB::raw('SUM(amount) as total'))
            ->groupBy('type')
            ->get();

        // Inventory item names and quantity
        $inventoryStats = Inventory::select('item', 'quantity')->get();

        return view('dashboard', compact('livestockStats', 'financialStats', 'inventoryStats'));
    }
}
