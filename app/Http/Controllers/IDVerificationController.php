<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NjoguAmos\Jenga\Api\IDVerification;
use NjoguAmos\Jenga\Dto\IDVerificationDto;

class IDVerificationController extends Controller
{
    public function create()
    {
        return view(view: 'identity', data: [
            'country' => config(key: 'jenga.country'),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'documentNumber' => ['required'],
            'firstName' => ['required'],
            'lastName' => ['required'],
            'dateOfBirth' => ['required'],
            'documentType' => ['required'],
            'countryCode' => ['required'],
        ]);

        $data = new IDVerificationDto(
            documentNumber: $validated['documentNumber'],
            firstName: $validated['firstName'],
            lastName: $validated['lastName'],
            dateOfBirth: $validated['dateOfBirth'],
            documentType: $validated['documentType'],
            countryCode: $validated['countryCode'],
        );

        $response = (new IDVerification())->search($data);

        return back()
            ->withInput(input: $request->all())
            ->with(key: 'response', value: $response);
    }
}
