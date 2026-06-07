

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\DashboardController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/login', function () {
    return view('auth.login'); // تأكد من وجود ملف العرض هذا
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');