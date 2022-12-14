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

Route::get('/', function () {
    return view('welcome');
});
// Route::<HTTPメソッド>('<アドレス>', [<コントローラーのクラス, 'アクション名>']);
Route::get('/comments/{operator}', [App\Http\Controllers\GreetingController::class, 'greeting']);
Route::get('/comments/{kimetsu_yaiba}', [App\Http\Controllers\GreetingController::class, 'random']);
Route::get('/comments/freeword/{unnko}', [App\Http\Controllers\GreetingController::class, 'freeword']);
