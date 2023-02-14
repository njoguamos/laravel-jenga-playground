<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentCallbackController extends Controller
{
    public function __invoke(Request $request)
    {
        session()->flash('response', json_encode($request->all(), JSON_PRETTY_PRINT));
        return view('payment-callback');
    }
}
