<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NjoguAmos\Jenga\ForexRates;

class ForexRatesController extends Controller
{
    public function create(){
        return view('forex');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'amount' => ['required'],
            'currencyCode' => ['required'],
            'toCurrency' => ['required'],
            'accountNumber' => ['required'],
            'countryCode' => ['required'],
        ]);

        $response = (new ForexRates())
            ->convert(
                amount: $validated['amount'],
                currencyCode: $validated['currencyCode'],
                toCurrency: $validated['toCurrency'],
                accountNumber: $validated['accountNumber'],
                countryCode: $validated['countryCode']
            );


        return back()
            ->withInput($request->all())
            ->with('response', $response);
    }
}
