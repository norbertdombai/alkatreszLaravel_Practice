<?php
use App\Http\Controllers\alkatreszController;
use App\Models\Alkatresz;
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

Route::get('/export',[alkatreszController::class, 'AlkatreszExportToJson']);

Route::get('/alkatresz', [alkatreszController::class, 'index'])->name('alkatresz.index');

Route::get('/', function () {
    return view('welcome');
});
