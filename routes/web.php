<?php

use App\Http\Controllers\GroupController;
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
    $test = 'test';
    return view('welcome');
});

Route::get('/info', function () {
    $test = "test";
    return phpinfo();
});

Route::resource('group', GroupController::class);
