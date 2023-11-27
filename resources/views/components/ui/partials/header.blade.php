<header class="py-4 bg-white shadow-md">
    <div class="container flex items-center justify-between h-full px-6 mx-auto text-dark">
        <!-- Search input -->
        <div class="flex justify-center flex-1 lg:mr-32">
            <div class="relative w-full max-w-xl mr-6">
                <div class="absolute inset-y-0 flex items-center pl-2">
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none form-input" type="text" placeholder="Search for products" aria-label="Search" />
            </div>
        </div>
        <ul class="items-center flex-shrink-0 space-x-6 hidden md:flex">
            <!-- Theme toggler -->
            <li class="flex">
                <button class="rounded-md focus:outline-none" aria-label="Toggle color mode">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                </button>
            </li>
            <!-- Notifications menu -->
            <li class="relative">
                <button class="relative align-middle rounded-md focus:outline-none" aria-label="Notifications" aria-haspopup="true">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                    </svg>
                    <!-- Notification badge -->
                    <span aria-hidden="true" class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full"></span>
                </button>
            </li>
            <!-- Profile menu -->
            <li class="relative">
                <button class="align-middle rounded-full focus:outline-none" aria-label="Account" aria-haspopup="true">
                    <img class="object-cover w-8 h-8 rounded-full" src="{{asset('ui/images/kf-logo1.png')}}" alt="" aria-hidden="true" />
                </button>
            </li>
        </ul>
    </div>
</header>
