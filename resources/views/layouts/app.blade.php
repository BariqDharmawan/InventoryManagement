<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" lang="en" x-data="data()">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Windmill Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="{{ asset('template/public/assets/js/charts-lines.js') }}" defer></script>
    <script src="{{ asset('template/public/assets/js/charts-pie.js') }}" defer></script>
</head>

<body>
    <div :class="{ 'overflow-hidden': isSideMenuOpen }" class="flex h-screen bg-gray-50 dark:bg-gray-900">
        <!-- Desktop sidebar -->
        <aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
            <div class="py-4 text-gray-500 dark:text-gray-400">
                <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
                    {{ env('APP_NAME') }}
                </a>
                <ul class="mt-6">
                    <li class="relative px-6 py-3">
                        <span aria-hidden="true"
                            class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"></span>
                        <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                            href="index.html">
                            <x-icon.dashboard />
                            <span class="ml-4">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="forms.html">
                            <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                </path>
                            </svg>
                            <span class="ml-4">Forms</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="cards.html">
                            <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                            <span class="ml-4">Cards</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="charts.html">
                            <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                            </svg>
                            <span class="ml-4">Charts</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="buttons.html">
                            <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                                </path>
                            </svg>
                            <span class="ml-4">Buttons</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="modals.html">
                            <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span class="ml-4">Modals</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="tables.html">
                            <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                            </svg>
                            <span class="ml-4">Tables</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <button aria-controls="dropdown-example"
                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            data-collapse-toggle="dropdown-example" type="button">
                            <svg aria-hidden="true"
                                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd"
                                    d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                    fill-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>E-commerce</span>
                            <svg class="w-6 h-6" fill="currentColor" sidebar-toggle-item viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul class="hidden py-2 space-y-2" id="dropdown-example">
                            <li>
                                <a class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    href="#">Products</a>
                            </li>
                            <li>
                                <a class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    href="#">Billing</a>
                            </li>
                            <li>
                                <a class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    href="#">Invoice</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="px-6 my-6">
                    <button
                        class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        Create account
                        <span aria-hidden="true" class="ml-2">+</span>
                    </button>
                </div>
            </div>
        </aside>

        <div class="flex flex-col flex-1 w-full">
            <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
                <div
                    class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">

                    <ul class="flex items-center flex-shrink-0 space-x-6 ms-auto">
                        <li class="relative">
                            <button
                                class="text-white  focus:ring-4 focus:outline-none text-blue-500 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center "
                                data-dropdown-toggle="dropdown" id="dropdownDefaultButton" type="button">

                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                    </path>
                                </svg>

                            </button>
                            <!-- Dropdown menu -->
                            <div class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"
                                id="dropdown">
                                <ul aria-labelledby="dropdownDefaultButton"
                                    class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                    <li>
                                        <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                            href="#">Dashboard</a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                            href="#">Settings</a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                            href="#">Earnings</a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                            href="#">Sign out</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Profile menu -->
                        <li class="relative">

                            <button
                                class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                data-dropdown-toggle="dropdownAvatar" id="dropdownUserAvatarButton" type="button">
                                <span class="sr-only">Open user menu</span>
                                <img alt="user photo" class="w-8 h-8 rounded-full object-cover"
                                    src="https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82">
                            </button>

                            <!-- Dropdown menu -->
                            <div class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600"
                                id="dropdownAvatar">
                                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                    <div>Bonnie Green</div>
                                    <div class="font-medium truncate">name@flowbite.com</div>
                                </div>
                                <ul aria-labelledby="dropdownUserAvatarButton"
                                    class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                    <li>
                                        <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                            href="#">Dashboard</a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                            href="#">Settings</a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                            href="#">Earnings</a>
                                    </li>
                                </ul>
                                <div class="py-2">
                                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                        href="#">Sign out</a>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
            </header>
            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
</body>

</html>
