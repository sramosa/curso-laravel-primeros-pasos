<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\PostController;

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

 Route::get('/', function ()
{
    return view ('welcome');
});

Route::resource('post',\App\Http\Controllers\Dashboard\PostController::class);

//Route::get('post', [PostController::class,'index']);
//Route::get('post/{post}', [PostController::class,'show']);
Route::get('post/create', [PostController::class,'create']);
//Route::get('post/{post}/edit', [PostController::class,'edit']);

//Route::post('post', [PostController::class,'store']);
//Route::put('post/{post}', [PostController::class,'update']);
//Route::put('post/{delete}', [PostController::class,'delete']);
