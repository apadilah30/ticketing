<?php

use App\Http\Controllers\DataMaster\RouteController;
use App\Http\Controllers\DataMaster\TransportationController;
use App\Http\Controllers\DataMaster\TransportationTypeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Report\ReservationController as ReportReservationController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ReservationController::class, 'index'])->name('index');
Route::middleware(['auth', 'role:CUSTOMER'])->group(function () {
    Route::get('/order/{type}', [ReservationController::class, 'order'])->name('order');
    Route::post('/order', [ReservationController::class, 'store'])->name('storeOrder');
});

Route::middleware(['auth','role:SUPER_ADMIN'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group([
        'prefix' => 'data-master',
        'as' => 'data-master.'
    ], function() {
        Route::resource('transportation-type', TransportationTypeController::class);
        Route::resource('transportation', TransportationController::class);
        Route::resource('route', RouteController::class);
    }); 

    Route::group([
        'prefix' => 'reports',
        'as' => 'reports.'
    ], function() {
        Route::get('reservation', [ReportReservationController::class, 'index'])->name('reservation.index');
        Route::get('reservation-export', [ReportReservationController::class, 'pdf'])->name('reservation.pdf');
    }); 
});

require __DIR__.'/auth.php';
