<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index()
    {
        $currencies = Currency::all();
        return view('admin.currencies.index', compact('currencies'));
    }

    public function create()
    {
        return view('admin.currencies.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'symbol' => 'required|string|max:255',
            'label' => 'required|string|max:255',
            'code' => 'required|string|max:10|unique:currencies',
            'status' => 'required|boolean',
        ]);

        Currency::create($validated);
        return redirect()->route('currency.view');
    }

    public function edit(Currency $currency)
    {
        return view('admin.currencies.edit', compact('currency'));
    }

    public function update(Request $request, Currency $currency)
    {
        $validated = $request->validate([
            'symbol' => 'required|string|max:255',
            'label' => 'required|string|max:255',
            'code' => 'required|string|max:10|unique:currencies,code,' . $currency->id,
            'status' => 'required|boolean',
        ]);

        $currency->update($validated);
        return redirect()->route('currency.view');
    }

    public function destroy(Currency $currency)
    {
        $currency->delete();
        return redirect()->route('currency.view');
    }
}
