<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


/** page controller */

use App\Http\Controllers\MainController as MainController;
use App\Http\Controllers\CitiesController as CitiesController;

/** api controller*/

use App\Http\Controllers\Api\OpenWeatherController as ApiOpenWeatherController;

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

Route::name('homepage')->get('/', [MainController::class, 'index']);
Route::name('about')->get('/about', [MainController::class, 'about']);

Route::group(['prefix' => 'city', 'middleware' => ['throttle:500,1']], function () {
    Route::name('city')->get('/{name}', [CitiesController::class, 'index']);
    Route::name('city-get')->get('get-city/{name}/get-by-city-name', [CitiesController::class, 'show']);
});

Route::group(['prefix' => 'api', 'middleware' => ['throttle:500,1']], function () {
    Route::name('weather-get-of-city')->post('/get-weather-of-city', [ApiOpenWeatherController::class, 'show']);
});

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/app-version', function () {
    // return ['version' => env('APP_VERSION')];
    return ['version' => config('custom.app_version')];
});
require __DIR__ . '/auth.php';
