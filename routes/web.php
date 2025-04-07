<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    $contacts = [
        'email' => 'kristina@example.com',
        'phone' => '+7 (123) 456-78-90',
        'address' => 'г. Москва, ул. Примерная, д. 123',
        'socials' => [
            'VK' => 'https://vk.com/kristina',
            'Telegram' => 'https://t.me/kristina'
        ]
    ];
    
    return view('contacts', ['contacts' => $contacts]);
});
