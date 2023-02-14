<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NjoguAmos\Jenga\Api\GetForexExchangeRates;
use NjoguAmos\Jenga\Dto\ExchangeRatesDto;

class ForexRatesController extends Controller
{
    public function create(){
        return view(view: 'forex',data: [
            'account' => config(key: 'jenga.account')
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'amount' => ['required'],
            'currencyCode' => ['required'],
            'toCurrency' => ['required'],
            'accountNumber' => ['required'],
            'countryCode' => ['required'],
        ]);

        $data = new ExchangeRatesDto(
            amount: $validated['amount'],
            currencyCode: $validated['currencyCode'],
            toCurrency: $validated['toCurrency'],
            accountNumber: $validated['accountNumber'],
            countryCode: $validated['countryCode']
        );

        $response = (new GetForexExchangeRates())->convert($data);

        return back()
            ->withInput(input: $request->all())
            ->with(key: 'response', value: $response);
    }
}
