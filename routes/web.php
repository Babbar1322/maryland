<?php

use App\Http\Controllers\FormController;
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

Route::resource('form', FormController::class);
Route::get('form2', [FormController::class, 'form2'])->name('pdf_form2');
Route::get('form3', [FormController::class, 'form3'])->name('pdf_form3');
Route::get('form4', [FormController::class, 'form4'])->name('pdf_form4');
Route::get('form5', [FormController::class, 'form5'])->name('pdf_form5');
Route::get('form6', [FormController::class, 'form6'])->name('pdf_form6');
Route::post('form2_post', [FormController::class, 'form2_post'])->name('form2.submit');
<<<<<<< Updated upstream
=======
Route::post('form3_post', [FormController::class, 'form3_post'])->name('form3.submit');
Route::post('form4_post', [FormController::class, 'form4_post'])->name('form4.submit');
Route::post('form5_submit', [FormController::class, 'form5_post'])->name('form5.submit');
Route::post('form6_submit', [FormController::class, 'form6_post'])->name('form6.submit');
>>>>>>> Stashed changes
