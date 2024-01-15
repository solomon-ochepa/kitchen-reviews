<x-guest-layout>
    <div>
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <link rel="stylesheet" href="fontawesome-6.4.2-web/css/fontawesome.min.css">
                    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <h4>
                    About ignition633 kitchen review
                </h4>

                <p>
                    These app was created for IGNITION633 kitchen reviews.
                    This is to tell you more about our meals, kinds of meals and the time we take our meals.
                    And also you can drop commends or currections on something you think it need to be currected.
                </p>
                
                <p>
                    Hope you enjoy our meal?
                    Thank you for your complement.
                    Rate us at your own conveneince.
                </p>
            </div>
        </div>

</x-guest-layout>
