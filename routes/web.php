<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoverLetters;

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
    return view('home', ['message'=>'']);
});
Route::get('/form', [CoverLetters::class, 'form']);
Route::post('/form', [CoverLetters::class, 'formPost']);
Route::get('/preview/{uuid}', [CoverLetters::class, 'preview']);
Route::get('/edit/{uuid}', [CoverLetters::class, 'edit']);
Route::post('/edit/{uuid}', [CoverLetters::class, 'editPost']);
Route::post('/update', [CoverLetters::class, 'update']);
Route::get('/delete/{uuid}', [CoverLetters::class, 'delete']);
Route::get('/print/{uuid}.pdf', [CoverLetters::class, 'printPdf']);
