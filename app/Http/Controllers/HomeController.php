<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\datacovid;
use App\mappingcovid;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

       $sembuh = datacovid::pluck('sembuh')->last();
       $penambahan_sembuh = datacovid::pluck('penambahan_sembuh')->last();
       $meninggal = datacovid::pluck('meninggal')->last();
       $penambahan_meninggal = datacovid::pluck('penambahan_meninggal')->last();
       $total = datacovid::pluck('total')->last();
       $penambahan_total = datacovid::pluck('penambahan_total')->last();
       $tgl1 = datacovid::pluck('tgl')->last();
       $tgl = Carbon::parse($tgl1)->translatedFormat('l, d F Y');
       $mappingcovid = mappingcovid::orderBy('tgl','DESC')->get();
        return view('index',compact('sembuh','meninggal','total','penambahan_sembuh'
        ,'penambahan_meninggal','penambahan_total','tgl','mappingcovid'));
    }

    public function covid19()
    {
        $sembuh = datacovid::pluck('sembuh')->last();
       $penambahan_sembuh = datacovid::pluck('penambahan_sembuh')->last();
       $meninggal = datacovid::pluck('meninggal')->last();
       $penambahan_meninggal = datacovid::pluck('penambahan_meninggal')->last();
       $total = datacovid::pluck('total')->last();
       $penambahan_total = datacovid::pluck('penambahan_total')->last();
       $tgl1 = datacovid::pluck('tgl')->last();
       $tgl = Carbon::parse($tgl1)->translatedFormat('l, d F Y');
       $mappingcovid = mappingcovid::orderBy('tgl','DESC')->get();
       
        return view('covid19',compact('sembuh','meninggal','total','penambahan_sembuh'
        ,'penambahan_meninggal','penambahan_total','tgl','mappingcovid'));
    }
}
