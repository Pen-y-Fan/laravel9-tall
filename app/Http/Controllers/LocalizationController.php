<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    /**
     * @param string $locale <'en'|'fr'>
     * @return RedirectResponse
     */
    public function index(string $locale): RedirectResponse
    {
        if (!in_array(
            needle: $locale,
            haystack: config()->get('app.available_locales'),
            strict: true
        )) {
            abort(Response::HTTP_NOT_FOUND);
        }

        App::setLocale($locale);
        session()->put('locale', $locale);

        return redirect()->back();
    }
}
