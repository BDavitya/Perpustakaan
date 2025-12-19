<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\AgendaController;
use App\Models\User;

Route::name('pengunjung.')->group(function () {

<<<<<<< Updated upstream
// HOME PENGUNJUNG
// Route::get('/', function () {
//     return view('pengunjung.home_pengunjung');
// })->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');



// // MIDDLEWARE LOGIN
// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('pengunjung.dashboard');
//     })->name('dashboard');
// });

// LOGIN
// Route::get('/login', function () {
//     return view('pengunjung.login');
// })->name('login');
Route::get('/login', [UserController::class, 'showLogin'])->name('login.show');
Route::post('/log', [UserController::class, 'login'])->name('login.store');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');


// asdasdasd
Route::get('/register', [UserController::class, 'showRegister'])
    ->name('register.show');

Route::post('/regist', [UserController::class, 'register'])
    ->name('register.store');


// KATALOG

Route::get('/katalog', [BukuController::class, 'index'])
    ->name('katalog');
Route::get('/buku/{id}', [BukuController::class, 'show'])
    ->name('buku.show');

Route::get('/agenda', [AgendaController::class, 'index'])
->name('agenda');

// FAQ
Route::get('/faq', function () {
    return view('pengunjung.faq');
})->name('faq');

// CONTACT
Route::get('/contact', function () {
    return view('pengunjung.contact');
})->name('contact');

// AGENDA
Route::get('/agenda', function () {
    return view('pengunjung.agenda');
})->name('agenda');

// DETAIL BOOK (versi statis dulu)
Route::get('/detail-book', function () {
    return view('pengunjung.detail_book');
})->name('detail.book');

Route::get('/pengumuman', [PengumumanController::class, 'index']);
=======
    // HOME
    Route::view('/', 'pengunjung.home_pengunjung')->name('home');

    // AUTH
    Route::view('/login', 'pengunjung.login')->name('login');
    Route::view('/password', 'pengunjung.password')->name('password');
    Route::view('/register', 'pengunjung.register')->name('register');

    // MENU UTAMA
    Route::view('/katalog', 'pengunjung.katalog')->name('katalog');
    Route::view('/pengumuman', 'pengunjung.pengumuman')->name('pengumuman');
    Route::view('/agenda', 'pengunjung.agenda')->name('agenda');

    // INFORMASI
    Route::view('/faq', 'pengunjung.faq')->name('faq');
    Route::view('/contact', 'pengunjung.contact')->name('contact');

    // DETAIL
    Route::view('/detail-book', 'pengunjung.detail_book')->name('detail_book');
    Route::view('/detail-pengumuman', 'pengunjung.detail_pengumuman')->name('detail_pengumuman');

});
>>>>>>> Stashed changes
