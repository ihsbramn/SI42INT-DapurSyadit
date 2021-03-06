<?php
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\AdminProductController;
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
//view link
Route::get('/loginPage', 'AuthController@index')->name('loginPage'); 
Route::post('login', 'AuthController@login')->name('login');
Route::get('logout', 'AuthController@logout')->name('logout');

Route::get('/', [OrderController::class, 'index'])->name('order');
Route::get('/', [InformationController::class, 'index'])->name('order');
Route::get('/', [AdminProductController::class, 'index'])->name('order');