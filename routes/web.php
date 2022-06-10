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
    $series = config('db.comics');
   /* dd($series); */
    return view('home', compact('series'));
})->name('home');


Route::get('/serie/{id}', function ($id) {
    $series = config('db.comics');
    if($id >= 0 && is_numeric($id) && $id < count($series)){
        
        //dd($id);
        //dd($series[$id]);
        
        $serie = $series[$id];
        return view('components.single_serie', compact('serie'));
    } else {
        abort(404);
    };
 
    
})->name('components.single_serie');