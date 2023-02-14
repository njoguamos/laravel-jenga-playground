<?php

namespace App\Http\Controllers;

use NjoguAmos\Jenga\Models\JengaToken;

class CheckOutController extends Controller
{
    public function __invoke(){
        return view(view: 'check-out', data: [
            'token' => JengaToken::query()->latest()->first()?->access_token,
            'checkOutUrl' => config(key: 'jenga.checkout'),
            'callbackUrl' => route(name: 'payment-callback'),
            'merchantCode' => config(key: 'jenga.merchant'),
            'wallet' => config(key: 'jenga.wallet'),
            'orderAmount' => rand(min: 1, max: 5),
            'orderReference' => random_int(min: 100_001, max: 999_999),
            'productType' => 'Subscription',
            'productDescription' => 'Product for testing jenga api.',
            'paymentTimeLimit' => config(key: 'jenga.limit'),
            'customerFirstName' => 'Kamau',
            'customerLastName' => 'Otieno',
            'customerPostalCodeZip' => rand(min: 200, max: 999),
            'customerAddress' => 'Kilimani, Nairobi',
            'extraData' => 'No Extra Data'
        ]);
    }
}
