<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\MailingController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [MainController::class, 'index']);

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/projects', [ProjectsController::class, 'index']);
Route::post('/add_project', [ProjectsController::class, 'store']);
Route::get('/delete_project/{id}', [ProjectsController::class, 'destroy']);
Route::get('/edit_project/{id}', [ProjectsController::class, 'edit']);
Route::post('/update_project/{id}', [ProjectsController::class, 'update']);


Route::get('/tags', [TagController::class, 'index']);
Route::post('/add_tags', [TagController::class, 'store']);

Route::get('/about', [AboutController::class, 'index']);
Route::post('/add_about', [AboutController::class, 'store']);
Route::get('/edit_about/{id}', [AboutController::class, 'edit']);
Route::post('/update_about/{id}', [AboutController::class, 'update']);

Route::post('/mail_sending', [MailingController::class, 'store']);
Route::post('/send_alert', [MailingController::class, 'alert']);