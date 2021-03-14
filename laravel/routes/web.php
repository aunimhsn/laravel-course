<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\SurveyController;

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

Route::get('/', [SurveyController::class, 'index'])->name('survey.index');
Route::get('/stats', [SurveyController::class, 'stats'])->name('survey.stats');
Route::post('/votes/store', [VoteController::class, 'store'])->name('votes.store');

Route::get('/welcome', function() {
    return view('welcome');
});


