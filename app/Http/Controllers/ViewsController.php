<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

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
       $user=DB::table('info')->get();
      echo $user;
    }
}