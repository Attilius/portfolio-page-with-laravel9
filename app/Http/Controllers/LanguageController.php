<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

class LanguageController extends Controller
{
    /**
     * Display the page in home section.
     *
     * @return View
     */
    public function index(): View
    {
        return view('home');
    }

    /**
     * When happening a language change, then set the new language and redirect into the home section.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function change(Request $request): RedirectResponse
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }
}
