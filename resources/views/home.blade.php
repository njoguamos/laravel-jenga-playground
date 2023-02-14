<x-app-layout>
    <div class="flex flex-col space-y-6 w-full">
        <div class="flex flex-col">
            <h2 class="text-3xl font-semibold mb-4">Payment Gateway</h2>
            <a class="bg-white flex px-6 py-4 space-x-2 rounded-lg shadow hover:bg-gray-50 items-center"
               href="{{ route('check-out') }}">
                <span class="flex flex-col w-full">
                    <h3 class="text-xl font-bold mb-2">Check Out Form</h3>
                    <p class="text-gray-700 text-sm max-w-sm">Test sample check out form.</p>
                </span>
                <svg class="h-8" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>

        <div class="flex flex-col">
            <h2 class="text-3xl font-semibold mb-4">Forex Rates</h2>
            <a class="bg-white flex px-6 py-4 space-x-2 rounded-lg shadow hover:bg-gray-50 items-center"
               href="{{ route('forex') }}">
                <span class="flex flex-col w-full">
                    <h3 class="text-xl font-bold mb-2">Forex Exchange Rates</h3>
                    <p class="text-gray-700 text-sm max-w-sm">Interact with Foreign Exchange Rates API. Get Currency Conversion Rate For Major Currencies.</p>
                </span>
                <svg class="h-8" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>

        <div class="flex flex-col">
            <h2 class="text-3xl font-semibold mb-4">ID Verification</h2>
            <a class="bg-white flex px-6 py-4 space-x-2 rounded-lg shadow hover:bg-gray-50 items-center"
               href="{{ route('identity') }}">
                <span class="flex flex-col w-full">
                    <h3 class="text-xl font-bold mb-2">ID Search & </h3>
                    <p class="text-gray-700 text-sm max-w-sm">Ruery the various registrar of persons in the various countries in East Africa.</p>
                </span>
                <svg class="h-8" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>
    </div>
    </div>
</x-app-layout>
