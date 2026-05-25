

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


Route::get('/', function () {
    return view('index');
});

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'en'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});

Route::get('/categories', function () {
    return view('categories'); // اسم ملف الـ Blade الذي أنشأناه
})->name('categories.index');

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');