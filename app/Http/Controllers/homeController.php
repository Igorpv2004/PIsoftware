<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\home;


class homeController extends Controller
{
    public function MostrarHome()
    {
        return view('home');            
    }
}

