<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function home()
    {
        return view('home');
    }
    
    public function jadwal()
    {
        return view('jadwal');
    }
    
    public function lokasi()
    {
        return view('lokasi');
    }
    
    public function about()
    {
        return view('about');
    }
}