<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function create()
    {
        return view('stock_form');
    }

    public function store(Request $request)
    {
        Stock::create($request->all());
        return redirect()->route('stock.index');
    }

    public function index()
    {
        $stocks = Stock::all();
        return view('stock-list', compact('stocks'));
    }
}
