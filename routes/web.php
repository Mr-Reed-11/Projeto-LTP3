<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::fallback(function(){
    return 'Error, Pagina não encontrada.';
});

Route::prefix('')->group(function(){
    Route::get('/lista', [ListaController::class, 'index'])->name('front-index');
    Route::get('/create', [ListaController::class, 'create'])->name('front-create');
    Route::get('/', [ListaController::class, 'login'])->name('front-login');
    Route::post('/authen', [ListaController::class, 'authen'])->name('front-authen');
    Route::post('/', [ListaController::class, 'store'])->name('front-store');
});