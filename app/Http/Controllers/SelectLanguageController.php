<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SelectLanguageController extends Controller
{
    public function select(Request $request): void
    {
        App::setlocale('hu');
    }
}
