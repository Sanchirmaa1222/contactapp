<?php

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
function getContacts(){
   return[
        1=> ['id'=> 1, 'name' => 'Sanchirmaa', 'phone' => '123456879'],
        2=> ['id'=> 2, 'name' => 'Name 2', 'phone' => '222222222'],
        3=> ['id'=> 3, 'name' => 'Name 3', 'phone' => '333333333'],
    ];
};


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', function () {
    $companies=[
        1=> ['name' => 'Tavan Bogd', 'contacts' => 3],
        2=> ['name' => 'Gobi', 'contacts' => 5],
    ];
    $contacts= []; // getContacts();
    return view('contacts/index', compact('contacts','companies'));
})->name('contacts.index');

Route::get('/create', function () {
return view('contacts.create');
})->name('contacts.create');

Route::get('/contacts/{id}', function ($id) {
    $contacts= getContacts();
    abort_if(!isset($contacts[$id]),404);
    $contact= $contacts[$id];
    return view('contacts.show')->with('contact', $contact);
})->name('contacts.show');
