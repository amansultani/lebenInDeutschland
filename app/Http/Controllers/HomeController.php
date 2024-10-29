<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $view = '';
        $lang = app()->getLocale();
        switch ($lang) {
            case "en": $view = 'home.english.index';
                    break;
            case 'de': $view = 'home.deutsch.index';
                    break;
            case 'dari': $view = 'home.dari.index';
                    break;
            case 'pashto': $view = 'home.pashto.index';
                    break;  
            default: $view = 'home.deutsch.index';
        }
        return view($view);
    }
}
