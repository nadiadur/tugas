<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\SantriController;
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
Route::get('/', function () {
    return view('tamp');
});

//Route::get('/', function () {
//    return view('kerangka.master');
//});

Route::get('/dashboard', [dashboardController::class, 'index'])->middleware('auth');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login.store');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

//guru
Route::get('/data-gurus',[guruController::class, 'index'])->name('guru.index');
Route::get('/create-gurus', [guruController::class, 'create'])->name('guru.create');
Route::post('/gurus',[guruController::class, 'store'])->name('guru.store');
Route::get('/gurus/{guru}/edit', [guruController::class, 'edit'])->name('guru.edit');
Route::patch('/gurus/{guru}/update', [guruController::class, 'update'])->name('guru.update');
Route::delete('/gurus/{guru}', [guruController::class, 'destroy'])->name('guru.destroy');


Route::get('/details/detail1', [PortfolioController::class, 'showDetail1'])->name('details.detail1');
Route::get('/details/detail2', [PortfolioController::class, 'showDetail2'])->name('details.detail2');
Route::get('/details/detail3', [PortfolioController::class, 'showDetail3'])->name('details.detail3');
Route::get('/details/detail4', [PortfolioController::class, 'showDetail4'])->name('details.detail4');
Route::get('/details/detail5', [PortfolioController::class, 'showDetail5'])->name('details.detail5');
Route::get('/details/detail6', [PortfolioController::class, 'showDetail6'])->name('details.detail6');
Route::get('/details/detail7', [PortfolioController::class, 'showDetail7'])->name('details.detail7');
Route::get('/details/detail8', [PortfolioController::class, 'showDetail8'])->name('details.detail8');
Route::get('/details/detail9', [PortfolioController::class, 'showDetail9'])->name('details.detail9');

// Tambahkan rute lainnya sesuai kebutuhan

// Tambahkan rute lainnya sesuai kebutuhan
Route::resource('kegiatans', KegiatanController::class);




Route::get('/santri', [SantriController::class, 'index'])->name('santri.index');
Route::get('/santri/create', [SantriController::class, 'create'])->name('santri.create');
Route::post('/santri', [SantriController::class, 'store'])->name('santri.store');
Route::get('/santri/{santri}/edit', [SantriController::class, 'edit'])->name('santri.edit');
Route::put('/santri/{santri}', [SantriController::class, 'update'])->name('santri.update');
Route::delete('/santri/{santri}', [SantriController::class, 'destroy'])->name('santri.destroy');
