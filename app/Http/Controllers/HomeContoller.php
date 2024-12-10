<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class HomeContoller extends Controller
{
   function __construct() {

    if (!Auth::check()) {
       abort("404","Can Not enter");
    }

 }


    public function dashboard(): View {

        return view("admin.index");
    }
}
