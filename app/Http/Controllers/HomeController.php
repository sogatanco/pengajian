<?php

namespace App\Http\Controllers;

use App\Jadwal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $terlewatkan=\App\Jadwal::where('end','<', date("Y-m-d H:i:s"))->orderBy('start', 'asc')->get();
        $jadwals=\App\Jadwal::where('end','>=', date("Y-m-d H:i:s"))->orderBy('start', 'asc')->get();
        $all=\App\Jadwal::all();
        $today=\App\Jadwal::where('start','<=', date("Y-m-d H:i:s"))->where('end','>=', date("Y-m-d H:i:s"))->orderBy('start', 'asc')->offset(0)->limit(6)->get();
        return view('admin.dashboard',['jadwals'=>$jadwals, 'lewats'=>$terlewatkan, 'all'=>$all, 'today'=>$today]);
    }

    public function aktif()
    {
        $jadwals=\App\Jadwal::where('end','>=', date("Y-m-d H:i:s"))->orderBy('start', 'asc')->paginate(10);
        return view('admin.aktif', ['jadwals'=>$jadwals]);
    }

    public function lewat()
    {
        $terlewatkan=\App\Jadwal::where('end','<', date("Y-m-d H:i:s"))->orderBy('start', 'asc')->paginate(10);
        return view('admin.lewat', ['lewats'=>$terlewatkan]);
    }

    public function create()
    {
        return view('admin.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|min:20',
            'oleh'=>'required|min:10',
            'description'=>'required|min:200',
            'tempat'=>'required|min:10',
            'start'=>'required|date|after:now',
            'end'=>'required|date|after:start',
            'lat'=>'required',
            'long'=>'required'
        ]);
        \App\Jadwal::create($request->all());
        return redirect('/admin/add')->with('status', 'Jadwal '.$request->title.' berhasil ditambahkan !');
    }

    public function destroy(Jadwal $jadwal)
    {
        \App\Jadwal::destroy($jadwal->id);
        return redirect(url()->previous())->with('status', 'Jadwal '.$jadwal->title.' berhasil dihapus !');
    }

    public function edit(Jadwal $jadwal)
    {
        return view('admin.edit',compact('jadwal'));
    }

    public function update(Request $request, Jadwal $jadwal)
    {
        $request->validate([
            'title'=>'required|min:20',
            'oleh'=>'required|min:10',
            'description'=>'required|min:200',
            'tempat'=>'required|min:10',
            'start'=>'required|date|after:now',
            'end'=>'required|date|after:start',
            'lat'=>'required',
            'long'=>'required'
        ]);
        \App\Jadwal::where('id', $jadwal->id)
            ->update([
                'title'=>$request->title,
                'oleh'=>$request->oleh,
                'description'=>$request->description,
                'start'=>$request->start,
                'end'=>$request->end,
                'lat'=>$request->lat,
                'long'=>$request->long,
                'tempat'=>$request->tempat
            ]);
        return redirect('/admin/aktif')->with('status', 'Jadwal '.$jadwal->title.' berhasil diupdate !');
    }
}
