<?php

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

// Route::get('/{any}', function(){
//         return view('landing');
// })->where('any', '.*');


Route::get('/foo', 'HomeController@index');
Route::get('/', function(){
        dd(
                $_SERVER,
                request()->getHost(),
                request()->getClientIps(),
                redirect('/landing')->getTargetUrl(),
                url('/anywhere'),
                action('HomeController@index')
        );
        return "app server 1";
        return view('welcome');
});