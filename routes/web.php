<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeGeneratorController;
use App\Http\Controllers\TokenController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/qr-code', [QrCodeGeneratorController::class, 'index'])->name('qr.code.index');
Route::get('/generate-token', [TokenController::class, 'create'])->name('token.create');
Route::get('/send-email/{id}', [TokenController::class, 'sendEmail'])->name('token.sendemail');
Route::get('/vote-panel/{token}',[TokenController::class,'index'])->name('token.index');