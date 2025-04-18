<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

// Route::POST('contact', [ContactController::class, 'contact']);

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Contact Us All Route
Route::controller(ContactController::class)->group(function(){
    Route::get('/backend/index', 'index')->name('contact.index');
    Route::GET('/backend/create', 'create')->name('contact.create');
    Route::post('/backend/update', 'store')->name('contact.store');
    Route::get('/backend/destroy/{id}', 'destroy')->name('contact.delte');

  });
