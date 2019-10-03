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
        return view('utama', ['jadwals'=>$jadwals,'lewats'=>$terlewatkan]);
    }

    public function jadwal()
    {
        return view('jadwal');
    }

    public function lokasi()
    {
        $terlewatkan=\App\Jadwal::where('end','<', date("Y-m-d H:i:s"))->orderBy('start', 'asc')->get();
        return view('lokasi',['lewats'=>$terlewatkan]);
    }

    public function about()
    {
        $terlewatkan=\App\Jadwal::where('end','<', date("Y-m-d H:i:s"))->orderBy('start', 'asc')->get();
        return view('about',['lewats'=>$terlewatkan]);
    }

    public function detail(Jadwal $jadwal)
    {
        $terlewatkan=\App\Jadwal::where('end','<', date("Y-m-d H:i:s"))->orderBy('start', 'asc')->get();
        return view('detail', ['jadwal'=>$jadwal, 'lewats'=>$terlewatkan]);
    }

    public function jsonAll(){
        $jadwals=\App\Jadwal::orderBy('start', 'asc')->get();
        return $jadwals;
    }

    public function jsonActive(){
        $jadwals=\App\Jadwal::where('end','>=', date("Y-m-d H:i:s"))->orderBy('start', 'asc')->get();
        return $jadwals;
    }
}