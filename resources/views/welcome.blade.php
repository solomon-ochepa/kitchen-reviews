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
                <section class="container border col-6">
                    <section class="form p-5 bg-secondary">
                        <form action="" method="post">
                            <section class="header border">
                                <header>
                                    <h1 class="text-center">IGNITION633</h1>
                                    <h4 class="text-center"> KITCHEN REVIEWS </h4>
                                </header>
                            </section>

                            <section class="border table-secondary">
                                <div>
                                    <div>
                                        <label for="">Name</label>
                                        <input type="text" name="name" placeholder="name" required>
                                    </div>

                                    <div>
                                        <label for="">Date</label>
                                        <input type="date-int" name="date" placeholder="date" required>
                                    </div>

                                    <div>
                                        <label for="">Meal</label>
                                        <input type="text" name="meal" placeholder="meal">
                                    </div>

                                    <div>
                                        <textarea name="note" id="" cols="50" rows="5" placeholder="Note"></textarea>
                                    </div>

                                    <div>
                                        <label for="">Rate</label>
                                        <select name="rate" id="rate" required>
                                            <option value="">
                                                select a rate
                                            </option>
                                            @for ($i = 1; $i <= 5; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor

                                        </select>
                                    </div>

                                    <div>
                                        <input type="submit" value="Submit Review">
                                    </div>

                                    <script src="index.js"></script>
                                    <script src="validation.js"></script>
                                </div>
                            </section>
                        </form>
                    </section>
                </section>
            </div>
        </div>
    </div>

</x-guest-layout>
