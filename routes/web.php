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

Route::get('/web','App\Http\Controllers\ViDuController@vidu2');
Route::post('/tinhtong','App\Http\Controllers\ViDuController@tinhtong');

Route::get("/qlsach/theloai","App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach","App\Http\Controllers\BookController@laythongtinsach");
Route::get("/qlsach/themtheloai","App\Http\Controllers\BookController@themtheloai");
Route::get("/qlsach/luutheloai","App\Http\Controllers\BookController@luutheloai");

Route::get('/trang1','App\Http\Controllers\vidulayoutController@trang1');
Route::get('/sach','App\Http\Controllers\vidulayoutController@sach');\

Route::get('/sach/theloai/{id}','App\Http\Controllers\vidulayoutController@theloai');
Route::get('/sach/chitietsach/{id}','App\Http\Controllers\vidulayoutController@chitietsach');

Route::get('/ngocquynh','App\Http\Controllers\ViDuController@ngocquynh');
