<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class PageNotFoundController extends Controller
{
    private static string $PATH = 'lang';

    /**
     * Display 404 Page not found site, when the url path is not exist.
     *
     *  @param Request $request
     *  @return RedirectResponse|View
     */
    public function show(Request $request): RedirectResponse|View
    {
        if (explode('/', $request->url())[3] !== self::$PATH) {
            return view('layout.app', ['page_not_found' => true]);
        }

        return redirect()->back();
    }
}
