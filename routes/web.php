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

Route::resource('form1', FormController::class);
Route::get('form1', [FormController::class, 'form1'])->name('pdf_form1');
Route::get('form2', [FormController::class, 'form2'])->name('pdf_form2');
Route::get('form3', [FormController::class, 'form3'])->name('pdf_form3');
Route::get('form4', [FormController::class, 'form4'])->name('pdf_form4');
Route::get('form5', [FormController::class, 'form5'])->name('pdf_form5');
Route::get('form6', [FormController::class, 'form6'])->name('pdf_form6');
Route::get('form7', [FormController::class, 'form7'])->name('pdf_form7');
Route::get('form8', [FormController::class, 'form8'])->name('pdf_form8');
Route::get('form9', [FormController::class, 'form9'])->name('pdf_form9');
Route::get('form10', [FormController::class, 'form10'])->name('pdf_form10');
Route::get('form11', [FormController::class, 'form11'])->name('pdf_form11');
Route::get('form12', [FormController::class, 'form12'])->name('pdf_form12');
Route::get('form13', [FormController::class, 'form13'])->name('pdf_form13');
Route::get('form14', [FormController::class, 'form14'])->name('pdf_form14');
Route::get('form15', [FormController::class, 'form15'])->name('pdf_form15');
Route::get('form16', [Formcontroller::class, 'form16'])->name('pdf_form16');
Route::get('form17', [Formcontroller::class, 'form17'])->name('pdf_form17');
Route::get('form18', [Formcontroller::class, 'form18'])->name('pdf_form18');
Route::get('form19', [Formcontroller::class, 'form19'])->name('pdf_form19');
Route::get('form20', [Formcontroller::class, 'form20'])->name('pdf_form20');
Route::get('form21', [Formcontroller::class, 'form21'])->name('pdf_form21');
Route::get('form22', [Formcontroller::class, 'form22'])->name('pdf_form22');
Route::get('form23', [FormController::class, 'form23'])->name('pdf_form23');
Route::get('form24', [FormController::class, 'form24'])->name('pdf_form24');
Route::get('form25', [FormController::class, 'form25'])->name('pdf_form25');
Route::get('form26', [FormController::class, 'form26'])->name('pdf_form26');
Route::get('form27', [FormController::class, 'form27'])->name('pdf_form27');
Route::get('form28', [FormController::class, 'form28'])->name('pdf_form28');
Route::get('form29', [FormController::class, 'form29'])->name('pdf_form29');



Route::post('form1_post', [FormController::class, 'form1_post'])->name('form1.submit');
Route::post('form2_post', [FormController::class, 'form2_post'])->name('form2.submit');
Route::post('form3_post', [FormController::class, 'form3_post'])->name('form3.submit');
Route::post('form4_post', [FormController::class, 'form4_post'])->name('form4.submit');
Route::post('form5_submit', [FormController::class, 'form5_post'])->name('form5.submit');
Route::post('form6_submit', [FormController::class, 'form6_post'])->name('form6.submit');
Route::post('form7_submit', [FormController::class, 'form7_post'])->name('form7.submit');
Route::post('form8_submit', [FormController::class, 'form8_post'])->name('form8.submit');
Route::post('form9_submit', [FormController::class, 'form9_post'])->name('form9.submit');
Route::post('form10_submit', [FormController::class, 'form10_post'])->name('form10.submit');
Route::post('form11_submit', [FormController::class, 'form11_post'])->name('form11.submit');
Route::post('form12_submit', [FormController::class, 'form12_post'])->name('form12.submit');
Route::post('form13_submit', [FormController::class, 'form13_post'])->name('form13.submit');
Route::post('form14_submit', [FormController::class, 'form14_post'])->name('form14.submit');

Route::post('form15_submit', [FormController::class, 'form15_post'])->name('form15.submit');
Route::post('form16_submit', [FormController::class, 'form16_post'])->name('form16.submit');
Route::post('form17_submit', [FormController::class, 'form17_post'])->name('form17.submit');
Route::post('form18_submit', [FormController::class, 'form18_post'])->name('form18.submit');
Route::post('form19_submit', [FormController::class, 'form19_post'])->name('form19.submit');
Route::post('form20_submit', [FormController::class, 'form20_post'])->name('form20.submit');
Route::post('form21_submit', [FormController::class, 'form21_post'])->name('form21.submit');
Route::post('form22_submit', [FormController::class, 'form22_post'])->name('form22.submit');
Route::post('form23_submit', [FormController::class, 'form23_post'])->name('form23.submit');
Route::post('form24_submit', [FormController::class, 'form24_post'])->name('form24.submit');
