<?php

use App\Http\Controllers\BladeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\DemoMiddleware;
use Illuminate\Support\Facades\Route;

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


Route::get("user",[UserController::class,'index']);

Route::get('welcome/{name}/{age}',[UserController::class,'hello']);

Route::get('sessionStore/{email}',[UserController::class,'store']);
Route::get('getData',[UserController::class,'getSession']);
Route::get('delete',[UserController::class,'delSession']);
Route::get('flush',[UserController::class,'flushSession']);

Route::get('/hello',[UserController::class,"MiddlewareCheck"])->middleware([DemoMiddleware::class]);
Route::get('/false',[UserController::class,"checkFail"]);

Route::get('/say',[BladeController::class,'sayHi']);
