<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/css/main.css">
    <title>Explore</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body>

    <div class="flex flex-col justify-center z-0 overflow-y-auto">
        <header class=" p-4 bg-[#13414D] text-white">
            <div class="container mx-auto flex justify-between items-center  ">
                <a href="{{ route('splash.search') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <i class="fa-solid fa-arrow-left"></i>
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Location</span>
                </a>
                {{-- <h1 class="text-2xl font-semibold text-black">Parkirin</h1> --}}
                <nav class="hidden md:flex space-x-4 ">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

                        <li class="flex items-center space-x-2">
                            <i class="fa-solid fa-compass"></i>
                            <a href=""
                                class="nav-link {{ request()->segment('1') == '' || request()->segment('1') == 'explorer' ? 'active' : '' }} block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Explore</a>
                        </li>

                        <li class="flex items-center space-x-2">
                            <i class="fa-solid fa-clipboard"></i>
                            <a href=""
                                class=" nav-link {{ request()->segment('1') == 'plat' ? 'active' : '' }} block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Plat</a>
                        </li>

                        <li class="flex items-center space-x-2">
                            <i class="fa-solid fa-clock-rotate-left"></i>
                            <a href=""
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">History</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <nav class="md:hidden border-t pt-4 pb-2 fixed bottom-0 w-full bg-[#13414D] text-white">
            <div class="container mx-auto flex justify-between items-center text-white">
                <div class="flex flex-col items-center justify-start ml-5">
                    <i class="fa-solid fa-compass text-xl"></i>
                    <a href="{{ route('explorer.index') }}"
                        class="nav-link active text-xl block py-2 pl-3 pr-4 rounded md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Explore</a>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <i class="fa-solid fa-clipboard text-xl" style="color:#D9D9D9"></i>
                    <a href="{{ url('vehicles') }}"
                        class="nav-link text-xl text-[#D9D9D9] block py-2 pl-3 pr-4 rounded md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Plat</a>
                </div>
                <div class="flex flex-col items-center justify-end mr-5">
                    <i class="fa-solid fa-clock-rotate-left text-xl"style="color:#D9D9D9"></i>
                    <a href="{{ route('history.index') }}"
                        class="nav-link text-xl text-[#D9D9D9] block py-2 pl-3 pr-4 rounded md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">History</a>
                </div>
            </div>
        </nav>

        {{-- ------Body------ --}}
        <form class="mt-4 md:w-100 mx-5" action="/explorer/search" method="GET">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>

                </div>

                <input type="search" id="default-search" name="search"
                    class="block w-full p-3 pl-10 text-sm bg-gray-50  text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-50 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Enter city">

            </div>
            {{-- <a href=""> --}}
            <button type="submit"
                class="flex items-center w-full text-white mt-5 bg-[#13414D]  focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-[#13414D]  dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                <span class="flex-1">Search</span>
                {{-- <div class="justify-end">
            <i class="fa-solid fa-angle-down"></i>
        </div> --}}
            </button>
            {{-- </a> --}}
        </form>
        {{-- ------Body------ --}}
    </div>
    </div>
    @vite('resources/js/app.js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>
