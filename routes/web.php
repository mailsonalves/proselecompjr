<?php

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
use App\Http\Controllers\MembroController;

Route::get('/', [MembroController::class, 'index']);
Route::get('/membros/create', [MembroController::class, 'create']);
Route::get('/membros', [MembroController::class, 'membros']);


Route::get('/cadastrar', function () {
    return view('register');
});

Route::post('/membros',[MembroController::class, 'store']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
