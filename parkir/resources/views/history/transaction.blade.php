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

    <div class="flex flex-col justify-center z-0 overflow-y-auto ">
        <header class=" p-4 bg-[#13414D] text-white">
            <div class="container mx-auto flex justify-between items-center  ">
                <a href="{{ route('history.index') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <i class="fa-solid fa-arrow-left"></i>
                    <span class="self-center text-lg whitespace-nowrap dark:text-white">Transaction Detail</span>
                </a>
                {{-- <h1 class="text-xl font-semibold text-black">Transaction Detail</h1> --}}
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
                    <i class="fa-solid fa-compass text-xl" style="color:#D9D9D9"></i>
                    <a href="{{ route('explorer.index') }}"
                        class="nav-link text-xl text-[#D9D9D9] block py-2 pl-3 pr-4 rounded md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Explore</a>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <i class="fa-solid fa-clipboard text-xl"></i>
                    <a href="{{ url('vehicles') }}"
                        class="nav-link active text-xl block py-2 pl-3 pr-4 rounded md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Plat</a>
                </div>
                <div class="flex flex-col items-center justify-end mr-5">
                    <i class="fa-solid fa-clock-rotate-left text-xl"style="color:#D9D9D9"></i>
                    <a href="{{ route('history.index') }}"
                        class="nav-link text-xl text-[#D9D9D9] block py-2 pl-3 pr-4 rounded md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">History</a>
                </div>
            </div>
        </nav>

        {{-- ------Body------ --}}


        <div
            class="w-full mt-5 mx-auto max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">


            <svg class="flex-shrink-0 w-10 h-10 text-green-400 dark:text-blue-500 mx-auto my-5" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>

            <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400 text-center">Payment Success</h5>
            <div class="flex items-baseline text-gray-900 dark:text-white justify-center">
                <span class="text-3xl font-semibold text-center text-[#709EAA]">{{ $biaya }}</span>

            </div>
            <div id="card">
                <ul role="list">
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium  text-[#828282]  truncate dark:text-white">
                                    Date
                                </p>

                            </div>
                            <a href="">
                                <div class="inline-flex items-center font-semibold text-base font-medium text-gray-900">
                                    {{ $tanggalmasuk }}

                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-[#828282] truncate dark:text-white">
                                    Place
                                </p>

                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ $mall_name }}
                            </div>
                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-[#828282] truncate dark:text-white">
                                    Address
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ Str::limit($address, 25) }}
                            </div>
                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-[#828282] truncate dark:text-white">
                                    Operator
                                </p>

                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                Andi
                            </div>
                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-[#828282] truncate dark:text-white">
                                    Plate
                                </p>

                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ $noplat }}
                            </div>
                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-[#828282] truncate dark:text-white">
                                    Started at
                                </p>

                            </div>
                            <div
                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ $jammasuk }}
                            </div>
                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-[#828282] truncate dark:text-white">
                                    End At
                                </p>

                            </div>
                            <div
                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">

                                {{ $jamkeluar }}
                            </div>
                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-[#828282] truncate dark:text-white">
                                    Duration
                                </p>

                            </div>
                            <div
                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ $duration }}
                                Hours
                            </div>
                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-[#828282] truncate dark:text-white">
                                    Total
                                </p>

                            </div>
                            <div
                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ $biaya }}
                                
                            </div>
                        </div>
                    </li>

                </ul>
            </div>

        </div>

        {{-- ------Body------ --}}
        <div class="mx-5 mt-5">
            <button type="button" id="print"
                class="text-white  bg-[#13414D] hover:bg-green-900 f rounded-lg text-sm px-5 py-2.5  w-full text-center">Download
                receipt</button>
        </div>

    </div>
    @vite('resources/js/app.js')
    <script src="https://unpkg.com/html2pdf.js/dist/html2pdf.bundle.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/main.js"></script>
    <script>
        window.onload = function() {
            document.getElementById("print").addEventListener("click", () => {
                const invoice = this.document.getElementById("card");
                var opt = {
                    margin: 1,
                    filename: 'myfile.pdf',
                    image: {
                        type: 'jpeg',
                        quality: 0.98
                    },
                    html2canvas: {
                        scale: 2
                    },
                    jsPDF: {
                        unit: 'in',
                        format: 'letter',
                        orientation: 'portrait'
                    }
                };
                html2pdf().from(invoice).set(opt).save();
            })
        }
    </script>
</body>

</html>
