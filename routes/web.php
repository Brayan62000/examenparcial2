<?php

use App\Http\Controllers\LibroController;
use App\Http\Livewire\Libros\Index;
use App\Http\Livewire\Libros\LibrosDelete;
use App\Http\Livewire\Libros\LibrosView;
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

Route::get("/libros",Index::class)->name("libros.index");;

Route::get("/libros/{libro}/delete", LibrosDelete::class)->name("libros.delete");

Route::get("/libros/{libro}/view", LibrosView::class)->name("libros.view");
