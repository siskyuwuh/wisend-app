<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DataController;
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

// Route::domain('app.wisendexpress.com')->group(function () {
//     Route::get('/', function () {
//         return redirect()->route('login');
//     });

//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->middleware(['auth', 'verified'])->name('dashboard');

//     Route::middleware('auth')->group(function () {
//         Route::get('/print/{booking}', [BookingController::class, 'generatePDF'])->name('print.resi.pdf');
//         Route::get('/clear-session', [BookingController::class, 'clearSession'])->name('clear.session');
//         Route::get('/data', [DataController::class, 'index'])->name('data.index');
//         Route::post('/data/import/direction', [DataController::class, 'importExcelDirection'])->name('data.import.derection');
//         // Route::get('/data/direction/create', [DataController::class, 'directionCreate'])->name('data.direction.create');
//         // Route::resource('/booking', BookingController::class);
//         Route::get('/booking/by-shipment-id', [BookingController::class, 'byShipmentId'])->name('booking.byShipmentId');
//         Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
//         Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create');
//         Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
//         Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//         Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//         Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//     });
// });


Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/print/{booking}', [BookingController::class, 'generatePDF'])->name('print.resi.pdf');
    Route::get('/clear-session', [BookingController::class, 'clearSession'])->name('clear.session');
    Route::get('/data', [DataController::class, 'index'])->name('data.index');
    Route::post('/data/import/direction', [DataController::class, 'importExcelDirection'])->name('data.import.derection');
    // Route::get('/data/direction/create', [DataController::class, 'directionCreate'])->name('data.direction.create');
    // Route::resource('/booking', BookingController::class);
    Route::get('/booking/by-shipment-id', [BookingController::class, 'byShipmentId'])->name('booking.byShipmentId');
    Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
    Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create');
    Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
    Route::get('/booking/show/{booking}', [BookingController::class, 'show'])->name('booking.show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
