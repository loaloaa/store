<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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
route:: get('admin',function(){
return view ('layouts.admin');
}

);
route:: get('admin/proudect/create',function(){
    return view ('admin.products.create');
    }

    );
    route:: get('admin/proudect/index',function(){
        return view ('admin.products.index');
        }

        );
        Route::get('show',[CategoryController::class,'index']);
Route::post('insert',[CategoryController::class,'store']);
Route::get('create',[CategoryController::class,'create']);
Route::get('delete/{id}',[CategoryController::class,'destroy']);
Route::get('edit/{id}',[CategoryController::class,'edit']);
Route::post('update/{id}',[CategoryController::class,'update']);


Route::get('show1',[ProductController::class,'index']);
Route::post('insert1',[ProductController::class,'store']);
Route::get('create1',[ProductController::class,'create']);
Route::get('delete1/{id}',[ProductController::class,'destroy']);
Route::get('edit1/{id}',[ProductController::class,'edit']);
Route::post('update1/{id}',[ProductController::class,'update']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
