<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use NjoguAmos\Jenga\Api\AccountInquiry;
use NjoguAmos\Jenga\JengaSignature;
use NjoguAmos\Jenga\Models\JengaToken;

class AccountInquiryController extends Controller
{
    public function create()
    {
        return view('account-inquiry',[
            'countryCode' => config('jenga.country'),
            'accountNumber' => config('jenga.account')
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'countryCode' => ['required'],
            'accountNumber' => ['required'],
        ]);

        $response = (new AccountInquiry())
            ->search(
                countryCode: $validated['countryCode'],
                accountNumber: $validated['accountNumber']
            );

        return back()
            ->withInput(input: $request->all())
            ->with(key: 'response', value: $response);
    }
}
