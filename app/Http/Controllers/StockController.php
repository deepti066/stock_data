<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stock;

class StockController extends Controller
{
    public function create()
    {
        return view('pages.stock-form');
    }

    public function store(Request $request)
    {
        Stock::create($request->all());
        return redirect()->route('stock.index');
    }

    public function index()
    {
        $stocks = Stock::all();
        return view('pages.stock-list', compact('stocks'));
    }
}
