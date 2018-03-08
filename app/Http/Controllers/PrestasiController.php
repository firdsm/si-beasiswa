<?php

namespace App\Http\Controllers;

use App\Pendaftar;
use App\Prestasi;
use Carbon\Carbon;
use Faker\Provider\File;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    public function index()
    {
        if (Auth::user()->level_id  == 3){
            if (Pendaftar::where('user_id', Auth::id())->count() >= 1){
                $pendaftar = Pendaftar::where('user_id', Auth::id())->first();
                $achivements = Prestasi::where('pendaftar_id', $pendaftar->id)->get();
                return view('pendaftaran.prestasi.index', compact('achivements'));
            } else {
                return redirect('/personal');
            }
        } else {
            return redirect('/home');
        }
    }
    public function createView()
    {
        if (Auth::user()->level_id == 3){
            return view('pendaftaran.prestasi.create');
        } else {
            return redirect('/home');
        }
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'no_sertifikat' => 'required|mimes:pdf|max:1024',
        ]);
        $pendaftar = Pendaftar::where('user_id', Auth::id())->first();
        $file = $request->file('no_sertifikat');
        $filename = strtolower(str_replace(' ','', $request->prestasi).str_replace('/', '', $request->tanggal_kegiatan).'.pdf');
        Storage::disk('file')->putFileAs('prestasi', $file, $filename);
        Prestasi::create([
            'pendaftar_id' =>$pendaftar->id,
            'prestasi' => $request->prestasi,
            'tanggal_kegiatan' => $request->tanggal_kegiatan,
            'jenis_kepesertaan' => $request->jenis_kepesertaan,
            'tingkat_kegiatan' => $request->tingkat,
            'predikat' => $request->predikat,
            'no_sertifikat' => $filename
        ]);
        return redirect('/prestasi');
    }
    public function download($id)
    {
        $file = Prestasi::find($id);
        return Storage::disk('file')->download('prestasi/'.$file->no_sertifikat);
    }
    public function delete($id)
    {
        Prestasi::find($id)->delete();
        return redirect('/prestasi');
    }
}
