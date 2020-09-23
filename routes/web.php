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

/*Route::get('/', function () {
    return view('welcome');
});*/

use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class,'show'])->name('homepage');

Route::get('/pages/{page}/{slug}', [PagesController::class,'show'])
                      ->where(['page'=> '[1-9][0-9]*',
                               'slug'=>'[a-z0-9][a-z0-9\-]*'])
                      ->name('pages.show');
