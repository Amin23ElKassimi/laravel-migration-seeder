<?php

use Illuminate\Support\Facades\Route;
// Diciamo al file.php dove trovare la Classe PageController
use App\Http\Controllers\Admin\TrainDepartureController as TrainDepartureController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AdminMovieController::class, 'index']);

