<?php

namespace App\Http\Controllers;


class MyController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        $mes = "ალექსანდრე დოხნაძე";
        return view('about', compact('mes'));
    }
}
