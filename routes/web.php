

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
    return view('categories.index');
})->name('categories.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/orders', function () {
    return view('orders.index');
})->name('orders');

Route::get('/products/create', function () {
    return view('products.create');
})->name('products.create');

Route::post('/products', function (Illuminate\Http\Request $request) {
    dd($request->all());
})->name('products.store');

Route::get('/products/index', function () {
    return view('products.index');
})->name('products.index');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');