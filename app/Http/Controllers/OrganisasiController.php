<?php

namespace App\Http\Controllers;

use App\Organisasi;
use App\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class OrganisasiController extends Controller
{
    public function index()
    {
        if (Auth::user()->level_id == 3){
            if (Pendaftar::where('user_id', Auth::id())->count() >= 1){
                $pendaftar = Pendaftar::where('user_id', Auth::id())->first();
                $orgs = Organisasi::where('pendaftar_id', $pendaftar->id)->get();
                return view('pendaftaran.organisasi.index', compact('orgs'));
            } else {
                return redirect('/personal');
            }
        } else {
            return redirect('/home');
        }
    }

    public function createView()
    {
        if (Auth::user()->level_id){
            return view('pendaftaran.organisasi.create');
        } else {
            return redirect('/home');
        }
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'no_sertifikat' => 'required|mimes:pdf|max:1024'
        ]);
        $pendaftar = Pendaftar::where('user_id', Auth::id())->first();
        $file = $request->file('no_sertifikat');
        $filename = strtolower(str_replace('/','', $request->akhir).str_replace('/', '', $request->awal).'.pdf');
        echo $filename;
        Storage::disk('file')->putFileAs('organisasi', $file, $filename);
        Organisasi::create([
            'pendaftar_id' =>$pendaftar->id,
            'nama_organisasi' => $request->nama,
            'jabatan' => $request->jabatan,
            'tingkat_organisasi' => $request->tingkat,
            'awal_jabatan' => $request->awal,
            'akhir_jabatan' => $request->akhir,
            'no_sertifikat' => $filename
        ]);
        return redirect('/organisasi');
    }
    public function download($id)
    {
        $file = Organisasi::find($id);
        return Storage::disk('file')->download('organisasi/'.$file->no_sertifikat);
    }
    public function delete($id)
    {
        Organisasi::find($id)->delete();
        return redirect('/organisasi');
    }
}
