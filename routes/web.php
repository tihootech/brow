<?php

// LARAVEL BUILT-IN CLASSES
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// DEVELOPER CUSTOM CLASSES
use App\Http\Controllers\Tmp\TestController;
use App\Http\Controllers\DashboardController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => '10.34.2',
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('landing', function () {
    $x = 'Ali';
    return Inertia::render('Landing', compact('x'));
});


Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function(){
    
    // DASHBOARD MAIN (INDEX) PAGE
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

});

// SOME TEST ROUTES, NOTE: SOON WILL BE REMOVED
Route::prefix('test')->group(function () {
    Route::get('faker', [TestController::class, 'fakerTest']);
});

// IMPORTING ROUTES IN OTHER FILES
require __DIR__.'/auth.php';
