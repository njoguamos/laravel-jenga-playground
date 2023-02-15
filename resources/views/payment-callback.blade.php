<x-app-layout :showBackUrl="false">
    <div class="mb-6 flex shrink-0">
        <a href="{{ route('check-out') }}"
           class="flex items-center py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
            <svg aria-hidden="true" class="w-5 h-5 mr-2 -ml-1 rotate-180" fill="currentColor"
                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
            </svg>
            Go back to Check Out Form
        </a>
    </div>

    <div class="text-xl font-bold mb-5">Payment Callback Response</div>

    <x-response/>
</x-app-layout>
