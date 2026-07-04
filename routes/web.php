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


    Route::get('/verify-email', function () {
        return view('auth.verify-email');
    })->name('verification.notice');

    // مسار إعادة إرسال الرابط
    // مسار التحقق من الكود (POST)
    Route::post('/verify-code', function (Request $request) {
        // هنا مستقبلاً ستضع منطق التحقق من الكود
        // مؤقتاً: سنقوم بتحويل المستخدم لصفحة تعيين كلمة المرور
        // سنمرر 'token' وهمي لتجربة الصفحة
        return redirect()->route('password.reset', ['token' => 'test-token']);
    })->name('verification.verify');

    // صفحة طلب استعادة كلمة المرور
    Route::get('/forgot-password', function () {
        return view('auth.passwords.forgot');
    })->name('password.request');

    // مسار التحقق من الكود (المسار الجديد)
    Route::get('/verify-code', function () {
        return view('auth.verify-email'); 
    })->name('verification.code');

    // صفحة إدخال كلمة المرور الجديدة (عرض فقط)
    Route::get('/reset-password/{token}', function ($token) {
        return view('auth.passwords.reset', ['token' => $token]);
    })->name('password.reset');

    // تعديل المسار ليقوم بالتحويل لصفحة الكود
    Route::post('/forgot-password', function () {
        return redirect()->route('verification.code');
    })->name('password.email');

    // لكي لا يظهر خطأ Route [password.update] not defined
    Route::post('/reset-password', function () {
        return back()->with('status', 'تم التحديث (تجريبي)');
    })->name('password.update');
});

// مسار تغيير اللغة
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'en'])) {
        session(['locale' => $locale]);
    }
    return redirect(url()->previous() . '?lang=' . $locale);
})->name('lang.switch');