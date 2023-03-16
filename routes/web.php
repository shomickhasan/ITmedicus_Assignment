<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/login',[AdminController::class,'loginView'])->name('loginpage');
Route::post('/adminlogin',[AdminController::class,'AdminLogin'])->name('adminlogin');
Route::get('/logout',[AdminController::class,'AdminLogout'])->name('adminlogout');

Route::get('/', function () {
    return view('pages.dashboard');
})->middleware('admin');
Route::get('/blank', function () {
    return view('pages.blank');
});
