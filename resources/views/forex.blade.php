<x-app-layout :showBackUrl="true">
    <div class="text-xl font-bold mb-5">Forex conversion api</div>

    <form class="bg-white rounded-lg grid md:grid-cols-3 gap-6 p-6" action="{{ route('forex') }}" method="post">
        @csrf
        <div class="mb-2">
            <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount</label>
            <input type="number" id="amount" name="amount" value="{{ old('amount') ?: 1 }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('amount')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2 md:col-span-2">
            <label for="accountNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account Number</label>
            <input type="text" id="accountNumber" name="accountNumber" value="{{ old('accountNumber') ?: $account }} " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('accountNumber')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2">
            <label for="currencyCode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">From Currency</label>
            <select id="currencyCode" name="currencyCode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="KES">KES</option>
                <option value="YNG">YNG</option>
                <option value="SSP">SSP</option>
                <option value="RWF">RWF</option>
                <option value="JPY">JPY</option>
                <option value="USD" selected>USD</option>
                <option value="GBP">GBP</option>
                <option value="EUR">EUR</option>
                <option value="ZAR">ZAR</option>
                <option value="RUP">RUP</option>
            </select>
            @error('currencyCode')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-2">
            <label for="toCurrency" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">From Currency</label>
            <select id="toCurrency" name="toCurrency" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected value="KES">KES</option>
                <option value="YNG">YNG</option>
                <option value="SSP">SSP</option>
                <option value="RWF">RWF</option>
                <option value="JPY">JPY</option>
                <option value="USD">USD</option>
                <option value="GBP">GBP</option>
                <option value="EUR">EUR</option>
                <option value="ZAR">ZAR</option>
                <option value="RUP">RUP</option>
            </select>
            @error('toCurrency')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-2">
            <label for="countryCode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country Code</label>
            <select id="countryCode" name="countryCode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>KE</option>
                <option>TZ</option>
                <option>UG</option>
                <option>RW</option>
            </select>
            @error('countryCode')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
    </form>

    <x-response/>
</x-app-layout>
