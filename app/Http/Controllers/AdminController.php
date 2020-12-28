<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\datacovid;
use App\mappingcovid;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Auth;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {  
       $sembuh = datacovid::pluck('sembuh')->last();
       $meninggal = datacovid::pluck('meninggal')->last();
       $total = datacovid::pluck('total')->last();
       
       return view('admin.index',compact('sembuh','meninggal','total')); 
    }

    public function dataCovid()
    {
        $datacovid = datacovid::all();
        return view('admin.data-covid.index',compact('datacovid')); 
    }

    public function storeDataCovid(request $request)
    {
        $datacovid = datacovid::create([
            'sembuh' => $request->sembuh,
            'penambahan_sembuh' => $request->penambahan_sembuh,
            'meninggal' => $request->meninggal,
            'penambahan_meninggal' => $request->penambahan_meninggal,
            'total' => $request->total,
            'penambahan_total' => $request->penambahan_total,
            'tgl' => $request->tgl
            
        ]);
        return redirect()->route('data-covid');
    }

    public function updateDataCovid(Request $request, $id)
    {
        $datacovid = datacovid::find($id);
        $datacovid->sembuh = $request->input('sembuh');
        $datacovid->penambahan_sembuh = $request->input('penambahan_sembuh');
        $datacovid->meninggal = $request->input('meninggal');
        $datacovid->penambahan_meninggal = $request->input('penambahan_meninggal');
        $datacovid->total = $request->input('total');
        $datacovid->penambahan_total = $request->input('penambahan_total');
        $datacovid->tgl = $request->input('tgl');
        $datacovid->save();

        return redirect()->route('data-covid');

    }

    public function destroyDataCovid($id)
    {
        $datacovid = datacovid::find($id);
        $datacovid->delete();

        return redirect()->route('data-covid');
    }

    public function mappingCovid()
    {
        $mappingcovid = mappingcovid::all();
        return view('admin.mapping-covid.index',compact('mappingcovid')); 
    }

    public function storeMappingCovid(Request $request)
    {
        $nama = mt_rand(1, 9999);

        $today = Carbon::today()->toDateString();
        $date = str_replace('-','',$today);

        $ext_foto = $request->file('map')->getClientOriginalExtension();
        $foto_file = $date."-".$nama.".". $ext_foto;

        $path = $request->file('map')->storeAs('public/map', $foto_file);

        $mappingcovid = mappingcovid::create([
            'tgl' => $request->tgl,
            'map' => $foto_file
        ]);

        return redirect()->route('mapping-covid');
    }

    public function updateMappingCovid(Request $request, $id)
    {
        $id = $request->id;
        $update = [   
            'tgl' => $request->tgl,
        ];

        $mappingcovid = mappingcovid::find($id);
        $map   = $request->file("map");
        
        if ($request->hasfile("map")){
        
        Storage::disk('local')->delete('public/map/' .$mappingcovid->map);
        $nama = mt_rand(1, 9999);

        $today = Carbon::today()->toDateString();
        $date = str_replace('-','',$today);

        $ext_foto = $request->file('map')->getClientOriginalExtension();
        $foto_file = $date."-".$nama.".".$ext_foto;

        $path = $request->file('map')->storeAs('public/map', $foto_file);

        $update['map'] = $foto_file;

        }

        DB::table('mappingcovid')->where('id', $id)->update($update);

        return redirect()->route('mapping-covid');
    }

    public function destroyMappingCovid($id)
    {
        $mappingcovid = mappingcovid::find($id);
        Storage::disk('local')->delete('public/map/' .$mappingcovid->map);
        $mappingcovid->delete();

        return redirect()->route('mapping-covid');
    }
}
