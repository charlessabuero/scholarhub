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
Route::get('/home', function () {
    return view('pages/home');
});
Route::get('/dash', function () {
    return view('pages/dashboard')->with('name','Charles');
});
// Route::get('/dash/{name}', function ($name) {
//     return view('pages/dashboard')->with('name',$name);
// });
Route::get('/dash/with/', function(){
    $data = [
        ['photo_link'=>"images/news1.png",'title'=>'Allowance Released for ISDA!','time'=>'Jan - Mar 2022'],
        ['photo_link'=>"images/news2.png",'title'=>'Scholar General Assembly','time'=>'March 5, 2022'],
    ];
    return view('pages/dashboard',['name'=>'Charles','data'=>$data]);
});
