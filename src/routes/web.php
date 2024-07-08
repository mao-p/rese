<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QRcodeController;
use Illuminate\Support\Facades\Auth;

// 既存のルート定義...

Route::get('/thanks', function () {
    return view('thanks');
});

//Route::get('/dashboard', function () {
  //  return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

Route::get('/', [RestaurantController::class, 'index'])->name('restaurants.index');
Route::get('/restaurants/{id}', [RestaurantController::class, 'detail'])->name('restaurants.detail');

Route::post('/favorite/{restaurant}', [FavoriteController::class, 'toggle'])->name('favorite.toggle');

Route::post('/reservations/store', [ReservationController::class, 'store'])->name('reservations.store');
Route::get('/restaurants/{restaurant_id}/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
Route::get('/done', [ReservationController::class, 'done'])->name('reservation.done');
Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservation.delete');
Route::put('/reservations/{reservation}', [ReservationController::class, 'update'])->name('reservations.update');



Route::get('/previous-page', function () {
    $previousPageUrl = session('previous_page_url');
    return redirect()->to($previousPageUrl);
})->name('previous-page');

Route::post('/upload', [StorageController::class, 'store'])->name('images.upload.store');

Auth::routes(['verify' => true]);



//Route::get('/menu_logged_in', function () {
    //return view('menu_logged_in');
//})->name('menu_logged_in');

//Route::get('/menu_guest', function () {
   // return view('menu_guest');
//})->name('menu_guest');

Route::middleware(['auth'])->group(function () {
    Route::get('/mypage', [UserController::class, 'mypage'])->name('mypage');
});

require __DIR__.'/auth.php';

Route::post('/reservations/confirm', [ReservationController::class, 'confirm'])->name('reservations.confirm');

Route::get('/qr-code/{reservation_id}', [QRcodeController::class, 'generate'])->name('qr-code.generate');