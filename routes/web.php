<?php

use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactNoteController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TaskController;

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

Route::get('/', WelcomeController::class);

Route::controller(ContactController::class)->name('contacts.')->group(function(){
    Route::get('/contacts', 'index')->name('index');
    Route::get('/create','create')->name('create');
    Route::get('/contacts/{id}','show')->name('show');
});
    Route::get('/tags',[TagController::class, 'index']);
    Route::get('/tasks',[TaskController::class, 'index']);
    Route::get('/companies',[CompanyController::class, 'index']);
    Route::get('/activities',[ActivityController::class, 'index']);