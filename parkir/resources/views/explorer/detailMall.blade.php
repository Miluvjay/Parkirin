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

    <div class=" flex flex-col justify-center z-0 overflow-y-auto">

        <div>
            <nav class="border-gray-200 bg-[#13414D] dark:bg-[#13414D] dark:border-gray-700 text-white ">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 ">
                    <a href="{{ url('malls') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span
                            class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">{{ $mallName }}<span>
                    </a>
                    <div class="hidden md:flex space-x-4">
                        <ul
                            class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:text-white md:flex-row md:space-x-8 md:mt-0 md:border-0   dark:border-gray-700">

                            <li class="flex items-center space-x-2">
                                <i class="fa-solid fa-compass"></i>
                                <a href=""
                                    class=" block py-2 pl-3 pr-4  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Explore</a>
                            </li>

                            <li class="flex items-center space-x-2">
                                <i class="fa-solid fa-clipboard"></i>
                                <a href=""
                                    class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Plat</a>
                            </li>

                            <li class="flex items-center space-x-2">
                                <i class="fa-solid fa-clock-rotate-left"></i>
                                <a href=""
                                    class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">History</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>


            <nav class="absolut md:hidden border-t pt-4 pb-2 fixed bottom-0 w-full z-50 bg-[#13414D] text-white">
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

        </div>

        <div class="z-0 overflow-y-auto mb-24 sm:overflow-y-scroll ">

            <div id="indicators-carousel" class="relative h-56 overflow-hidden rounded-lg md:h-96 mx-5 mt-8"
                data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="{{ URL('images/margo1.jpg') }}" class="absolute block w-full h-full object-cover"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ URL('images/margo2.jpeg') }}" class="absolute block w-full h-full object-cover"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ URL('images/margo3.jpg') }}" class="absolute block w-full h-full object-cover"
                            alt="...">
                    </div>
                </div>

                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

            <div class="mt-5 mx-4 ">
                <div class="flex items-center space-x-1 mb-2 ml-2">
                    <i class="fa-solid fa-location-dot custom-icon"></i>
                    <label for="small-input"
                        class="block  text-sm font-medium text-gray-900 dark:text-white">Address</label>
                </div>

                <div class="relative">
                    <textarea id="message" rows="3"
                        class="address block p-2.5 w-full text-sm text-blue   rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark: dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        disabled>{{ $address }}</textarea>

                    <!-- Add an icon (e.g., a copy icon) to the right of the textarea -->
                    <span id="copyIcon"
                        class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none cursor-pointer">
                        <i class="fa-regular fa-copy" style="color: gray"></i>
                    </span>
                </div>
            </div>

            <div class="mt-5 mx-4">
                <div class="flex items-center space-x-1 mb-2 ml-2">
                    <i class="fa-regular fa-clock custom-icon"></i>
                    <label for="small-input" class="block  text-sm font-medium text-gray-900 dark:text-white">Open
                        hours</label>
                </div>
                <!-- Dropdown menu -->
                <div class="relative">
                    <div class="relative inline-block w-full">
                        <div>
                            <input type="text" id="small-input"
                                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Open Now - Closes 10pm" readonly>
                            <span
                                class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none transition-transform transform">
                                <i class="fa-solid fa-chevron-down" style="color: gray"></i>
                            </span>
                        </div>
                        <ul id="dropdown-list"
                            class="hidden absolute z-10 right-0 mt-1 py-1 w-full bg-white border border-gray-300 rounded-md shadow-lg">
                            <ul>
                                <div class="flex gap-5 ml-4">
                                    <li>Monday</li>
                                    <li></li>
                                    <li>09.00 am - 10.00 pm</li>
                                </div>

                            </ul>
                            <ul>
                                <div class="flex gap-5 ml-4">
                                    <li>Tuesday</li>
                                    <li></li>
                                    <li>09.00 am - 10.00 pm</li>
                                </div>

                            </ul>
                            <ul>
                                <div class="flex gap-2 ml-4">
                                    <li>Wednesday</li>
                                    <li></li>
                                    <li>09.00 am - 10.00 pm</li>
                                </div>

                            </ul>
                            <ul>
                                <div class="flex gap-4 ml-4">
                                    <li>Thursday</li>
                                    <li></li>
                                    <li>09.00 am - 10.00 pm</li>
                                </div>

                            </ul>
                            <ul>
                                <div class="flex gap-7 ml-4">
                                    <li>Friday</li>
                                    <li></li>
                                    <li>09.00 am - 10.00 pm</li>
                                </div>

                            </ul>
                        </ul>
                    </div>
                </div>


            </div>

            <div class="mt-5 mx-4">
                <div class="flex items-center space-x-1 mb-2 ml-2">
                    <i class="fa-solid fa-phone custom-icon"></i>
                    <label for="small-input" class=" block  text-sm font-medium text-gray-900 dark:text-white">Help
                        Desk</label>
                </div>

                <div class="relative">
                    <input type="text" id="small-input"
                        class="helpDesk block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                        value="{{ $helpDesk }}" disabled>

                    <!-- Add an icon (e.g., a search icon) to the right of the input -->
                    <span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <i class="fa-solid fa-phone" style="color: gray"></i>
                    </span>
                </div>
            </div>
            <div class="ml-3 mt-3 flex">
                <button id="carButton" type="button"
                    class="w-24 text-gray-900  border border-gray-300  focus:text-white font-medium rounded-lg text-sm px-5 py-2.5 me-2">Car</button>
                <button id="motorButton" type="button"
                    class="w-24 text-gray-900  border border-gray-300  font-medium rounded-lg text-sm px-5 py-2.5 me-2">Motor</button>

            </div>

            <div class="mt-5 mx-4">
                <div class="flex items-center space-x-1 mb-2 ml-2 justify-between">
                    <div class="flex">
                        <i id="carIcon" class="fa-solid fa-car-side custom-icon mt-1 mr-1"></i>
                        <i id="motorIcon" class="fa-solid fa-motorcycle custom-icon"></i>
                        <label for="small-input"
                            class="block text-sm font-medium text-gray-900 dark:text-white">Quotas</label>
                    </div>

                    <button class="p-1 bg-gray-200 rounded-md " onclick="reloadPage()">
                        <i class="fa-solid fa-rotate" style="color: gray"></i>
                    </button>
                </div>

                <div class="relative">
                    <input type="text" id="quotasMobil"
                        class="quotasMobil block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $k_mobil }} Parking" disabled>

                    <input type="text" id="quotasMotor"
                        class="quotasMotor block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="
                        {{ $k_motor }} Parking" disabled>

                    <span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        {{-- <i class="fa-solid fa-rotate" style="color: gray"></i> --}}
                    </span>
                </div>

                <!-- Separate button for refresh -->

            </div>

            <div class="mt-5 mx-4">
                <div class="flex items-center space-x-1 mb-2 ml-2">
                    <i class="fa-solid fa-money-bill custom-icon"></i>
                    <label for="small-input"
                        class="block  text-sm font-medium text-gray-900 dark:text-white">Fee</label>
                </div>

                <div class="relative">
                    <input type="text" id="feeMobil"
                        class="feeMobil block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="Rp. {{ $feeMobil }}" disabled>
                    <input type="text" id="feeMotor"
                        class="feeMotor block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="Rp. {{ $feeMotor }}" disabled>
                </div>
            </div>



        </div>

    </div>
    </div>
    @vite('resources/js/app.js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
