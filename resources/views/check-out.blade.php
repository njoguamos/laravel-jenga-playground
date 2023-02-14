<x-app-layout :showBackUrl="true">
    <div class="h2 text-2xl font-bold mb-5">Payment Gateway Checkout</div>

    <p class="mb-5 text-gray-700">Note: These field should be hidden by default.</p>

    <form id="submitcheckout" class="bg-white rounded-lg grid md:grid-cols-4 gap-4 p-6" action="{{ $checkOutUrl }}" method="POST">
{{--        @csrf--}}

        <div class="mb-2 md:col-span-2">
            <label for="token" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Token</label>
            <input id="token" name="token" value="{{ $token }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('token')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2 md:col-span-2">
            <label for="merchantCode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Merchant Code</label>
            <input id="merchantCode" name="merchantCode" value="{{ $merchantCode }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('merchantCode')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2">
            <label for="wallet" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wallet</label>
            <input id="wallet" name="wallet" value="{{ $wallet }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('wallet')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2">
            <label for="orderAmount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Order Amount</label>
            <input id="orderAmount" name="orderAmount" autofocus value="{{ $orderAmount }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('orderAmount')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2">
            <label for="orderReference" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Order Reference</label>
            <input id="orderReference" name="orderReference" value="{{ $orderReference }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('orderReference')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2">
            <label for="productType" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product type</label>
            <input id="productType" name="productType" value="{{ $productType }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('productType')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2 md:col-span-2">
            <label for="productDescription" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
            <input id="productDescription" name="productDescription" value="{{ $productDescription }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('productDescription')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2">
            <label for="paymentTimeLimit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment Time Limit</label>
            <input id="paymentTimeLimit" name="paymentTimeLimit" value="{{ $paymentTimeLimit }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('paymentTimeLimit')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2">
            <label for="customerFirstName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customer First Name</label>
            <input id="customerFirstName" name="customerFirstName" value="{{ $customerFirstName }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('customerFirstName')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2  md:col-span-2">
            <label for="customerLastName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customer Last Name</label>
            <input id="customerLastName" name="customerLastName" value="{{ $customerLastName }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('customerLastName')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2 md:col-span-2">
            <label for="customerPostalCodeZip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customer Postal Code Zip</label>
            <input id="customerPostalCodeZip" name="customerPostalCodeZip" value="{{ $customerPostalCodeZip }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('customerPostalCodeZip')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2 md:col-span-2">
            <label for="customerAddress" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customer Address</label>
            <input id="customerAddress" name="customerAddress" value="{{ $customerAddress }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('customerAddress')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2 md:col-span-2">
            <label for="callbackUrl" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Callback</label>
            <input id="callbackUrl" name="callbackUrl" value="{{ $callbackUrl }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('callbackUrl')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2 md:col-span-4">
            <label for="extraData" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Extra Data</label>
            <input id="extraData" name="extraData" value="{{ $extraData }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('extraData')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
    </form>
</x-app-layout>
