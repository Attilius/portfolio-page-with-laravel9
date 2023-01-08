<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

class SelectLanguageController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function select(Request $request): View
    {
        App::setlocale($request->lang);

        return view('home');
    }
}
