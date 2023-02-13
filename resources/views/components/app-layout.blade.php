<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Jenga API Playground</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="antialiased font-sans bg-gray-100 grid md:grid-cols-12 gap-6 min-h-screen w-full">

<div class="md:col-span-4 bg-white flex flex-col space-y-6 w-full py-10 px-12">
        <h1 class="text-5xl font-bold">
            Laravel Jenga Playground
        </h1>

    <p class="text-gray-600">
        Your configuration
    </p>

        <div class="flex flex-col space-y-3 bg-white rounded-lg">
            <div>
                <label for="host" class="block mb-2 text-sm font-bold text-gray-900">Host</label>
                <input value="{{ $host }}" type="text" id="host" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
            </div>
            <div>
                <label for="merchantCode" class="block mb-2 text-sm font-bold text-gray-900">Merchant Code</label>
                <input value="{{ $merchantCode }}" type="text" id="merchantCode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
            </div>
            <div>
                <label for="key" class="block mb-2 text-sm font-bold text-gray-900">Api Key</label>
                <input value="{{ $key }}" type="text" id="key" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
            </div>
            <div>
                <label for="secret" class="block mb-2 text-sm font-bold text-gray-900">Consumer Secret</label>
                <input value="{{ $secret }}" type="text" id="secret" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
            </div>
            <div>
                <label for="publicKey" class="block mb-2 text-sm font-bold text-gray-900">Public Key</label>
                <textarea id="publicKey" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Public key">{{ $publicKey }}</textarea>
            </div>
            <div>
                <label for="token" class="block mb-2 text-sm font-bold text-gray-900">Latest Access Token</label>
                <textarea id="token" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Access token">
                    {{ $token }}
                </textarea>
            </div>
        </div>
</div>


<div class="md:col-span-8 flex w-full py-10 ">
    <x-container>
        {{ $slot }}
    </x-container>
</div>

</body>
</html>
