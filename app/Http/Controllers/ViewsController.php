<?php


namespace App\Http\Controllers;
use App\Jadwal;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function home()
    {
        $terlewatkan=\App\Jadwal::where('end','<', date("Y-m-d H:i:s"))->orderBy('start', 'asc')->get();
        $jadwals=\App\Jadwal::where('end','>=', date("Y-m-d H:i:s"))->orderBy('start', 'asc')->paginate(4);
        return view('home', ['jadwals'=>$jadwals,'lewats'=>$terlewatkan]);
    }

    public function jadwal()
    {
        $terlewatkan=\App\Jadwal::where('end','<', date("Y-m-d H:i:s"))->orderBy('start', 'asc')->get();
        return view('jadwal',['lewats'=>$terlewatkan]);
    }

    public function lokasi()
    {
        $terlewatkan=\App\Jadwal::where('end','<', date("Y-m-d H:i:s"))->orderBy('start', 'asc')->get();
        return view('lokasi',['lewats'=>$terlewatkan]);
    }

    public function about()
    {

    }
}