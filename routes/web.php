<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    User::firstOrCreate(
        [
            "email" => "user@mail.ru"
        ],
        [
            "name" => "Test User",
            "password" => Hash::make(12345),
        ]
    );
    dd(User::all());
    // return view('welcome');
});
