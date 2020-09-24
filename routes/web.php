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

//VIEW COMPOSERS-------------------------------

  View::composer('pages._menu', function($view){
  $view->with('pages', App\Models\Page::all());
});      //Page::orderBy('tri', 'asc')->get() si on voulait avoir le menu par ordre alphabétique


//ROUTE DES PAGES------------------------------
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class,'show'])->name('homepage');

//Route::resource('pages', PagesController::class)->only(['index','show']);
Route::get('/pages/{id}/{slug}', [PagesController::class,'show'])
                      ->where(['id'=> '[1-9][0-9]*',
                               'slug'=>'[a-z0-9][a-z0-9\-]*'])
                      ->name('pages.show');
