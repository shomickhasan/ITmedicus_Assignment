<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeesController;

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
    // companies area
   Route::prefix('companies')->group(function () {
        Route::get('/addcompany',[CompaniesController::class,'index'])->name('admin.addcompany');
        Route::get('/editcompany',[CompaniesController::class,'edit'])->name('admin.editcompany');
        Route::get('/managecompanie',[CompaniesController::class,'show'])->name('admin.managecompany');
        Route::post('/store',[CompaniesController::class,'store'])->name('admin.companiestore');
        Route::get('/edit/{slug}',[CompaniesController::class,'editdata'])->name('admin.companiesedit');
        Route::post('/update/{id}',[CompaniesController::class,'update'])->name('admin.companiesupdate');
        Route::get('/delete/{id}',[CompaniesController::class,'distroy'])->name('admin.companiesdelete');
   });
   Route::prefix('employee')->group(function(){
        Route::get('/addemploye',[EmployeesController::class,'index'])->name('admin.addemploye');
        Route::get('/manageemploye',[EmployeesController::class,'show'])->name('admin.showemploye');
        Route::post('/store',[EmployeesController::class,'store'])->name('admin.storeemploye');
        Route::get('/edit/{id}',[EmployeesController::class,'edit'])->name('admin.editemploye');
        Route::get('/delete/{id}',[EmployeesController::class,'distroy'])->name('admin.deleteemploye');
        Route::post('/update/{id}',[EmployeesController::class,'update'])->name('admin.updateemploye');
   });
});




