<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PushController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/push',[PushController::class, 'store'])->middleware(['auth'])->name('push.store');
Route::get('/push',[PushController::class, 'push'])->middleware(['auth'])->name('push.dispatch');

require __DIR__.'/auth.php';
