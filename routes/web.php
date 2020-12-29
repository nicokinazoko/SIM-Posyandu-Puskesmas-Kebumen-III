<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControllerView;

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

Route::get('/', [ControllerView::class,'index'])->name('home');

Route::get('/table-balita', [ControllerView::class,'table_balita'])->name('table-balita');
Route::get('/table-kader', [ControllerView::class,'table_kader'])->name('table-kader');
Route::get('/table-balita-rinci', [ControllerView::class,'table_balita_rinci'])->name('table-balita-rinci');
Route::get('/table-balita-pendataan', [ControllerView::class,'table_balita_pendataan'])->name('table-balita-pendataan');
Route::get('/table-balita-imunisasi', [ControllerView::class,'table_balita_imunisasi'])->name('table-balita-imunisasi');

Route::get('404', [ControllerView::class,'notFound'])->name('404');



Route::get('/login', [ControllerView::class,'login'])->name('login');
Route::get('/register', [ControllerView::class,'register'])->name('register');
Route::get('/forgot-password', [ControllerView::class,'forgot_password'])->name('forgot-password');


Route::get('/buttons', [ControllerView::class,'buttons'])->name('buttons');
Route::get('/blank', [ControllerView::class,'blank'])->name('blank');
Route::get('/cards', [ControllerView::class,'cards'])->name('cards');
Route::get('/charts', [ControllerView::class,'charts'])->name('charts');


Route::get('/utilities-animation', [ControllerView::class,'utilities_animations'])->name('utilities-animation');
Route::get('/utilities-other', [ControllerView::class,'utilities_others'])->name('utilities-other');
Route::get('/utilities-border', [ControllerView::class,'utilities_border'])->name('utilities-border');
Route::get('/utilities-color', [ControllerView::class,'utilities_color'])->name('utilities-color');


Route::get('/input-data-kader', [ControllerView::class,'input_data_kader'])->name('input-data-kader');
Route::get('/input-data-balita', [ControllerView::class,'input_data_balita'])->name('input-data-balita');
Route::get('/input-data-imunisasi', [ControllerView::class,'input_data_imunisasi'])->name('input-data-imunisasi');
Route::get('/input-data-pendataan-balita', [ControllerView::class,'input_data_pendataan-balita'])->name('input-data-pendataan-balita');

Route::get('/edit-balita', [ControllerView::class,'edit_data_balita'])->name('edit-balita');
Route::get('/edit-kader', [ControllerView::class,'edit_data_kader'])->name('edit-kader');

Route::fallback(function () {
    return view('404');
});








