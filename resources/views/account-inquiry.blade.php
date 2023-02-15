<x-app-layout :showBackUrl="true">
    <div class="text-xl font-bold mb-5">Account Inquiry - Bank Accounts</div>

    <form class="bg-white rounded-lg grid md:grid-cols-3 gap-6 p-6" action="{{ route('account-inquiry') }}" method="post">
        @csrf

        <div class="mb-2 md:col-span-2">
            <label for="accountNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account Number</label>
            <input type="text" id="accountNumber" name="accountNumber" value="{{ old('accountNumber') ?: $accountNumber }} " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('accountNumber')
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
