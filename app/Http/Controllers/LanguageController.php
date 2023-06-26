<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class LanguageController extends Controller
{
    public function swap($locale)
    {
        // dd($locale); // add this line to check if the method is being executed
        App::setLocale($locale);
        session()->put('locale', $locale);
        URL::defaults(['locale' => $locale]);
        return redirect()->back();
    }
}
