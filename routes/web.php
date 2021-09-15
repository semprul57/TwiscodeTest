<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodingTest;
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
    return view('Home');
});

Route::get('/CodingTest/ConvertBilangan', [ CodingTest\ConvertBilangan::class, 'index' ] );
Route::post('/CodingTest/ConvertBilangan/convertBinary', [ CodingTest\ConvertBilangan::class, 'binaryToDecimal' ] );
Route::post('/CodingTest/ConvertBilangan/convertDecimal', [ CodingTest\ConvertBilangan::class, 'decimalToBinary' ] );


Route::get('/CodingTest/Palindrome', [ CodingTest\Palindrome::class, 'index' ] );
Route::post('/CodingTest/Palindrome/proses', [ CodingTest\Palindrome::class, 'proses' ] );


Route::get('/QueryTest/', [ App\Http\Controllers\QueryTest::class, 'index' ] );