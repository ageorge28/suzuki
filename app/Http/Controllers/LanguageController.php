<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function english()
    {
        session()->get('language');
        session()->forget('language');
        session()->put('language', 'English');
        return redirect()->back();
    }

    public function malayalam()
    {
        session()->get('language');
        session()->forget('language');
        session()->put('language', 'Malayalam');
        return redirect()->back();
    }
}
