<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // 1. تحديد اللغة من الـ Query Parameter أو السشن
        $locale = $request->query('lang', session('locale', 'ar'));

        if (in_array($locale, ['ar', 'en'])) {
            App::setLocale($locale);
            session(['locale' => $locale]);
        }

        // 2. معالجة الطلب
        $response = $next($request);

        // 3. منع التخزين المؤقت (Cache) لضمان دقة اللغة دائماً
        $response->headers->set('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('Expires', 'Sat, 01 Jan 2000 00:00:00 GMT');

        return $response;
    }
}