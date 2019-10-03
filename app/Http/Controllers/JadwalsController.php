<?php

namespace App\Http\Controllers;

use App\Jadwal;
use Illuminate\Http\Request;

class JadwalsController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }


    public function show(Jadwal $jadwal)
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(Jadwal $jadwal)
    {
        //
    }

    public function update(Request $request, Jadwals $jadwals)
    {
        //
    }

    public function destroy(Jadwal $jadwal)
    {
        //
    }
}
