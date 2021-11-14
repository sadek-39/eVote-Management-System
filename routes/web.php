<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AwsMailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImportExportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\ScreenShotController;
use App\Http\Controllers\QrCodeGeneratorController;
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

// Route::get('/register', function () {
//     return redirect()->action([AuthController::class,'loginview']);
// });
Route::get('/',[AuthController::class,'loginview'])->name('auth.loginview');
Route::get('/signup',[AuthController::class,'index'])->name('auth.index');

Route::post('/register',[AuthController::class,'register'])->name('auth.register');
Route::get('/qr-code', [QrCodeGeneratorController::class, 'index'])->name('qr.code.index');
Route::get('/generate-token', [TokenController::class, 'create'])->name('token.create');
Route::get('/send-email/{id}', [TokenController::class, 'sendEmail'])->name('token.sendemail');
Route::get('/vote-panel/{token}',[TokenController::class,'index'])->name('token.index');
Route::get('/generate_otp',[TokenController::class,'createOTP'])->name('token.createOTP');
Route::get('/send-otp',[TokenController::class,'sendOTP'])->name('token.sendOTP');
Route::get('/capture',[ScreenShotController::class,'Capture'])->name('ss.capture');
Route::get('/sendemail',[AwsMailController::class,'sendemail'])->name('mail.sendemail');
Route::post('/login_success',[AuthController::class,'login'])->name('auth.login');
Route::get('/import',[ImportExportController::class,'index'])->name('importexport.index');
Route::post('/fileimport',[ImportExportController::class,'Import'])->name('importexport.import');
Route::get('/voterlist',[DashboardController::class,'voterList'])->name('dashboard.voterlist');
Route::get('/softdelete/{id}',[DashboardController::class,'deleteVoter'])->name('dashboard.delevoter');
Route::get('/deletedlist',[DashboardController::class,'deleteVoterlist'])->name('dashboard.deletevoterlist');
Route::get('/restore/{id}',[DashboardController::class,'restore'])->name('dashboard.restore');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');