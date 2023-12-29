<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarController;

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

Route::get('/bar', [BarController::class, 'index'])->name('bar.index');

Route::get('/bar/{id}', [BarController::class, 'show'])->name('bar.show')->whereNumber('id');

Route::get('/bar/contact', [BarController::class, 'contact'])->name('bar.contact');

Route::get('/bar/create', [BarController::class, 'create'])->name('bar.create');

Route::post('/bar/create', [BarController::class, 'store'])->name('bar.store');

route::get('edit/{id}', [BarController::class, 'edit'])->name('bar.edit');

route::put('edit/{id}', [BarController::class, 'update'])->name('bar.update');

route::delete('destroy/{id}', [BarController::class, 'destroy'])->name('bar.destroy');


