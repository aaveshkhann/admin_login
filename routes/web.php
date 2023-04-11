<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

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
    return view('welcome');
});


Route::get('/_admin',[AdminController::class,'index']);
Route::post('/_admin/auth',[AdminController::class,'store'])->name('admin.auth');

Route::group(['middleware'=>'Admin_Auth'],function(){
    Route::get('_admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('_admin/category',[CategoryController::class,'index'])->name('admin.category');
    Route::get('_admin/manage_category',[CategoryController::class,'manage_category'])->name('admin.manage_category');
    Route::get('/_admin/logout', function () {
            session()->forget('ADMIN_LOGIN');
            session()->forget('ADMIN_ID',);
            session()->flash('error','Logout Successfully');
            return redirect('_admin');
    });
});



