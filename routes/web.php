<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gameController;
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


Route::get('/home', function () {
    return view('index', ["title" => "Mega Games Store"]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/topuplol', function () {
    return view('topuplol');
});

Route::get('/topup8ball', function () {
    return view('topup8ball');
});

Route::get('/topupgenshin', function () {
    return view('topupgenshin');
});

Route::get('/topupml', function () {
    return view('topupml');
});

Route::get('/topupff', function () {
    return view('topupff');
});

Route::get('/topuppubgm', function () {
    return view('topuppubgm');
});

Route::get('/topupcodm', function () {
    return view('topupcodm');
});

Route::get('/topuphi', function () {
    return view('topuphi');
});

Route::get('/topupiski', function () {
    return view('topupiski');
});

Route::get('/topupla', function () {
    return view('topupla');
});

Route::get('/topuphido', function () {
    return view('topuphido');
});

Route::get('/topuponmyouji', function () {
    return view('topuponmyouji');
});

Route::get('/topupazur', function () {
    return view('topupazur');
});

Route::get('/topupsultan', function () {
    return view('topupsultan');
});

Route::get('/topupmarvel', function () {
    return view('topupmarvel');
});

Route::get('/topupidentity', function () {
    return view('topupidentity');
});

Route::get('/topupchess', function () {
    return view('topupchess');
});

Route::get('/topuprox', function () {
    return view('topuprox');
});
/*
Route::get('/index', [gameController::class, 'indexgame'])->name('indexgame');
Route::get('/filterpenulis/show/', 'LaporanController@showfilterpenulis')->name('showfilterpenulis');
*/