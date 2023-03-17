<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompaniesController;

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
//Route for login and logout
Route::get('/login',[AdminController::class,'loginView'])->name('loginpage');
Route::post('/adminlogin',[AdminController::class,'AdminLogin'])->name('adminlogin');
Route::get('/logout',[AdminController::class,'AdminLogout'])->name('adminlogout');

// Route for admin area
Route::get('/',[AdminController::class,'index'])->name('dashboard')->middleware('admin');
Route::prefix('admin')->group(function(){
    Route::get('/addcompany',[CompaniesController::class,'index'])->name('admin.addcompany');
    Route::get('/editcompany',[CompaniesController::class,'edit'])->name('admin.editcompany');
    Route::get('/managecompanie',[CompaniesController::class,'show'])->name('admin.managecompany');
});




