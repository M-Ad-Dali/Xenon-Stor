<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// تفعيل اللغة للمسارات
Route::middleware(['language'])->group(function () {
    
    Route::get('/', function () { return view('index'); })->name('home');
    Route::get('/categories', function () { return view('categories.index'); })->name('categories.index');
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/cart', function () { return view('cart.index'); })->name('cart');

    // الطلبات
    Route::get('/orders', function () { return view('orders.index'); })->name('orders');
    Route::get('/orders/{id}', function ($id) { return view('orders.show', ['id' => $id]); })->name('orders.show');

    // العملاء
    Route::get('/customers', function () { return view('customers.index'); })->name('customers.index');
    
    // المنتجات
    Route::get('/products/create', function () { return view('products.create'); })->name('products.create');
    Route::post('/products', function (Request $request) { dd($request->all()); })->name('products.store');
    Route::get('/products/index', function () { return view('products.index'); })->name('products.index');
    
    // المصادقة
    Route::get('/login', function () { return view('auth.login'); })->name('login');
    Route::get('/register', function () { return view('auth.register'); })->name('register');
    Route::post('/logout', function () { Auth::logout(); return redirect('/'); })->name('logout');
});

// مسار تغيير اللغة
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'en'])) {
        session(['locale' => $locale]);
    }
    // العودة للرابط السابق مع تغيير المعامل ?lang=
    return redirect(url()->previous() . '?lang=' . $locale);
})->name('lang.switch');