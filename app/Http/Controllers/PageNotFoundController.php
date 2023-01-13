<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageNotFoundController extends Controller
{
    private static string $PATH = 'lang';

    /**
     * Display 404 Page not found site, when the url path is not exist.
     *
     */
    public function show(Request $request)
    {
        if (explode('/', $request->url())[3] !== self::$PATH) {
            return view('page-not-found');
        }

        return redirect()->back();
    }
}
