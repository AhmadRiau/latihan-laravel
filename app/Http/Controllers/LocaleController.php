<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Session\Session;

class LocaleController extends Controller
{
    public function setLocale ($locale){
        session()->put('locale', $locale);        
        return Redirect::back();
    }
}
