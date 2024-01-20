<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ExplorerController;
use App\Http\Controllers\HistoriesController;
use App\Http\Controllers\MallsController;
use App\Http\Controllers\VehiclesController;
use App\Models\Histories;
use App\Models\Malls;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// <---------- Splash Page -------------->
Route::get('/', function () {
    return view('splash.index');
});
Route::get('/pageAllow', function () {
    return view('splash.pageAllow');
})->name('pageAllow');
Route::get('/search', function () {
    return view('splash.search');
})->name('splash.search');
// Route::get('/', [MainController::class, 'index'])->name('index');

// ---------------------------------------

// <-----------------Explorer Page-------------------->
Route::get('/explorer', [ExplorerController::class, 'index'])->name('explorer.index');
Route::get('/searchMall', [MallsController::class, 'index'])->name('explorer.searchMall');
Route::resource('malls', MallsController::class);
Route::get('/mall/{mall_id}', 'MallsController@show')->name('mall.show');

Route::get('/explorer/search', [ExplorerController::class, 'search']);
// ---------------------------------------------------

// ----------------------Plat Page------------------------
// Route::get('/plat', function () {
//     return view('plate.index');
// });
// Route::get('/plat', [VehiclesController::class, 'main'])->name('plate.index');
Route::get('/detailPlat', [VehiclesController::class, 'index'])->name('plate.detail');
Route::resource('vehicles', VehiclesController::class);
Route::get('/plate/search', [VehiclesController::class, 'search']);
// Route::get('/plate/search', [VehiclesController::class, 'search']);
// Route::get('/detailPlat/{vehicle_id}', [VehiclesController::class, 'show'])->name('plate.detail');


// Route::post('/plate/search', [VehiclesController::class, 'search'])->name('plate.search');

// ------------------------------------------------------

// ----------------------- History Page --------------------------

Route::get('/history', [HistoriesController::class, 'index'])->name('history.index');
Route::get('/transaction', function () {
    return view('history.transaction');
})->name('history.transaction');
Route::get('/history/{notiket}', [HistoriesController::class, 'show'])->name('history.show');
// Route::get('/parkirmasuk/{notiket}', 'HistoriesController@show')->name('histoty.show');
Route::get('/histories/search', [HistoriesController::class, 'search']);
// ----------------------------------------------------------------
// <script>
//         document.addEventListener("DOMContentLoaded", function() {
//             let number = 1; // Initial value
//             const min = 1;
//             const max = 12;
//             let totalPayment = 5000; // Initial total payment

//             // Update total payment when arrow up is clicked
//             document.querySelector('.arrow-up').addEventListener('click', function() {
//                 if (number < max) {
//                     number++;
//                     totalPayment += 5000; // Increment total payment by 5000
//                     document.querySelector('.number-display').textContent = number;
//                     const formattedTotalPayment = totalPayment.toLocaleString('id-ID', {
//                         style: 'currency',
//                         currency: 'IDR'
//                     })
//                     document.getElementById('total-payment-value').textContent = formattedTotalPayment;
//                 }
//             });

//             // Update total payment when arrow down is clicked
//             document.querySelector('.arrow-down').addEventListener('click', function() {
//                 if (number > min) {
//                     number--;
//                     totalPayment -= 5000; // Decrement total payment by 5000
//                     document.querySelector('.number-display').textContent = number;
//                     const formattedTotalPayment = totalPayment.toLocaleString('id-ID', {
//                         style: 'currency',
//                         currency: 'IDR'
//                     })
//                     document.getElementById('total-payment-value').textContent = formattedTotalPayment;
//                 }
//             });
//         });