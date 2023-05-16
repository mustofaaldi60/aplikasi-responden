<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\{
    RegisterController,
    LoginController
};

use App\Http\Controllers\Admin\{
    HomeController,
    AcaraController,
    ChatController,
    LaguController,
    RespondenController,
    RequestLaguController,
    SiaranController,
};

use App\Models\{Acara,Siaran};

use App\Http\Controllers\Home\LaguController as Lagu;
use App\Http\Controllers\Home\RespondenController as Responden;
use App\Http\Controllers\Home\RequestLaguController as RequestLagu;
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

Route::middleware(['guest'])->group(function () {
    // Welcome Page
    Route::get('/', fn () => view('home.home',[
        'acaras' => Acara::latest()->paginate(25),
        'siarans' => Siaran::latest()->paginate(10)
    ]))->name('welcome');

    //Lagu
    Route::resource('/g/lagu', Lagu::class)->only(['index','show']);

    //Request Lagu
    Route::resource('/g/request-lagu', RequestLagu::class)->only(['create','store']);

    //Responden
    Route::resource('/g/responden', Responden::class)->only(['create','store']);

    // Register
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

    // Login
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

// Chat
Route::resource('/chat', ChatController::class);

Route::middleware(['auth'])->group(function () {
    // Dashboard Page
    Route::get('/home', HomeController::class);

    // Acara
    Route::resource('/acara', AcaraController::class)->except('show');
    Route::get('/acara/checkSlug', [AcaraController::class, 'checkSlug'])->name('acara.slug');



    // Lagu
    Route::resource('/lagu', LaguController::class);

    // Request Lagu
    Route::resource('/request-lagu', RequestLaguController::class)->except('show');

    // Responden
    Route::resource('/responden', RespondenController::class)->only(['index', 'destroy']);
    // Route::get('/responden/cetak', [RespondenController::class, 'cetak'])->name('responden.cetak');

    // Siaran
    Route::resource('/siaran', SiaranController::class)->except('show');
    Route::get('/siaran/checkSlug', [SiaranController::class, 'checkSlug'])->name('siaran.slug');

    // Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
