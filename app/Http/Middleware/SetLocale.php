<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = $request->get('lang');

        \Log::info("Попытка установить язык: " . $locale);

        if ($locale && in_array($locale, ['en_US', 'ru_RU'])) {
            App::setLocale($locale);
            \Log::info("Язык установлен: " . $locale);
        }

        return $next($request);
    }
}
