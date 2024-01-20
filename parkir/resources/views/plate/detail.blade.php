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

    <div class="flex flex-col justify-center z-0 overflow-y-auto mb-24">
        <header class=" p-4 bg-[#13414D] text-white">
            <div class="container mx-auto flex justify-between items-center  ">
                <a href="{{ route('vehicles.index') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <i class="fa-solid fa-arrow-left"></i>
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Plate</span>
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

        <nav class="absolut md:hidden border-t pt-4 pb-2 fixed bottom-0 w-full bg-[#13414D] text-white">
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

        <div class="ml-5 flex mt-8 ">

            <div class="pt-3 ">
                <i class="fa-solid fa-location-dot fa-xl"></i>
            </div>
            <div class="ml-3">
                <h1 class="pb-3 mt-3 text-xl font-bold">You're here!</h1>
            </div>
        </div>
        @foreach ($vehicles as $row)
            <div class="mx-auto mb-4 ">
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-5">
                        <p class=" addres font-normal text-gray-700 dark:text-gray-400">{{ $row->address }}</p>
                    </div>
                </div>
            </div>

            <div class="mx-5">
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="px-5 py-3">
                        <ul role="list">
                            <li class="">
                                <div class="flex items-center">
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class=" text-sm font-medium text-gray-900 truncate dark:text-white">
                                            Place
                                        </p>

                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        {{ $row->mall_name }}
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            Date

                                        </p>

                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        {{ $row->tanggalmasuk }}
                                    </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            Vehicle
                                        </p>

                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        {{ $row->merkkendaraan }}
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            Jenis Kendaraan
                                        </p>

                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        {{ $row->jeniskendaraan }}
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            Plate
                                        </p>

                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        {{ $row->noplat }}
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            Started at
                                        </p>

                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        {{ $row->jammasuk }}
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
                <button type="button" id="totalButton"
                    class="flex items-center  w-full text-white mt-5 bg-[#13414D]  focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    <span class="flex-1">Estimated total payment</span>
                    {{-- <div class="justify-end">
                    <i class="fa-solid fa-angle-down"></i>
                </div> --}}
                </button>
            </div>
        @endforeach
        <div class="mx-5" id="divPayment" style="display: none;">
            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="px-5 py-3">
                    <div class="mb-4"> <label for="">Duration (perHour)</label></div>
                    <div class="number-picker mx-auto mb-3 ">
                        <button class="arrow-down   ">▼</button>
                        <div class="number-display">1</div>
                        <button class="arrow-up">▲</button>
                    </div>
                    {{-- <div class="total-payment">
                        <p>Total Payment: <span id="total-payment-value">Rp.5000</span></p>

                    </div> --}}
                    <ul role="list">
                        <li class="">
                            <div class="flex items-center">
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-[#828282] truncate dark:text-white">
                                        Fee
                                    </p>

                                </div>
                                <div
                                    class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ $row->biaya }}/hour
                                </div>
                            </div>
                        </li>
                        <hr style="border-top: 1px dashed #828282;">
                        <li class="">
                            <div class="flex items-center">
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-[#828282] truncate dark:text-white">
                                        Total Payment
                                    </p>

                                </div>
                                <div
                                    class="total-payment inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    <p><span id="total-payment-value">Rp. {{ $row->biaya_per_jam }}</span></p>
                                </div>
                                <div class="">

                                    <!-- <button class="button-add">Tambah</button> -->
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>

        </div>

        {{-- ------Body------ --}}

    </div>
    </div>
    @vite('resources/js/app.js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/main.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let number = 1; // Initial value
            const min = 1;
            const max = 12;
            let totalPaymentMobil = 5000; // Initial total payment
            let totalPaymentMotor = 2000; // Initial total payment

            // Update total payment when arrow up is clicked
            document.querySelector('.arrow-up').addEventListener('click', function() {
                if (number < max) {
                    number++;
                    totalPaymentMobil += 5000; // Increment total payment by 5000
                    document.querySelector('.number-display').textContent = number;
                    const formattedTotalPayment = totalPaymentMobil.toLocaleString('id-ID', {
                        style: 'currency',
                        currency: 'IDR'
                    })
                    document.getElementById('total-payment-value').textContent = formattedTotalPayment;
                }
            });

            // Update total payment when arrow down is clicked
            document.querySelector('.arrow-down').addEventListener('click', function() {
                if (number > min) {
                    number--;
                    totalPaymentMobil -= 5000; // Decrement total payment by 5000
                    document.querySelector('.number-display').textContent = number;
                    const formattedTotalPayment = totalPaymentMobil.toLocaleString('id-ID', {
                        style: 'currency',
                        currency: 'IDR'
                    })
                    document.getElementById('total-payment-value').textContent = formattedTotalPayment;
                }
            });
        });

        document.getElementById("totalButton").addEventListener("click", function() {
            var divPayment = document.getElementById("divPayment");

            // Ubah visibilitas divPayment
            divPayment.style.display = (divPayment.style.display === "block") ? "block" : "block";
        });
    </script>
</body>

</html>
