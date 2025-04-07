<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index']);
Route::get('/gallery/{image}', [MainController::class, 'gallery'])
    ->where('image', 'full\.jpeg|full_2\.jpeg');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    $contacts = [
        'email' => 'kristina@example.com',
        'phone' => '+7 (123) 456-78-90',
        'address' => 'г. Москва, ул. Примерная, д. 123'
    ];
    return view('contacts', ['contacts' => $contacts]);
});
