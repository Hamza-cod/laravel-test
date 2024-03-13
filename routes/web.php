<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

use App\Models\User;
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

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::resource('product',ProductController::class);
Route::resource('category',CategoryController::class);

require __DIR__.'/auth.php';
