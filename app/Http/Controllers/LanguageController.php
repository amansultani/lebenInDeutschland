<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
    {
        
        $request->validate([
            'language' => 'required|in:de,en,dari,pashto',
        ]);

        Session::put('locale', $request->language);

        return redirect()->back(); 
    }
}
