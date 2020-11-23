<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PropostasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuarioController;
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

Route::group(['prefix' => '/'], function () {

    Route::group(['prefix' => '/clientes'], function () {
        Route::get('/', [ClientesController::class, 'index'])->name('lista-cliente');
        Route::get('/cliente-cadastro', [ClientesController::class, 'create'])->name('novo-cliente');
        Route::post('/cliente-cadastro', [ClientesController::class, 'store']);
        Route::get('/alterando-cliente/{id}', [ClientesController::class, 'show']);
        Route::post('/alterando-cliente/{id}', [ClientesController::class, 'update']);
    });

    Route::group(['prefix' => '/proposta'], function () {
        Route::get('/', [PropostasController::class, 'index'])->name('lista-proposta');
        Route::get('/proposta-cadastro', [PropostasController::class, 'create'])->name('nova-proposta');
        Route::post('/proposta-cadastro', [PropostasController::class, 'store']);
        Route::get('/altera-proposta/{id}', [PropostasController::class, 'show']);
        Route::post('/altera-proposta/{id}', [PropostasController::class, 'update']);
    });

    Route::group(['prefix' => '/users'], function () {
        Route::get('/registro', [UserController::class, 'create'])->name('users');
        Route::post('/registro', [UserController::class, 'store']);
    });

    Route::get('/login', [LoginController::class, 'create']);
    Route::post('/login', [LoginController::class, 'login']);
});

