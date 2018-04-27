<?php

namespace App\Http\Controllers;

use App\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PesertaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->level_id == 3){
            if (Pendaftar::where('user_id', Auth::id())->count() >= 1){
                $data = Pendaftar::where('user_id', Auth::id())->first();
                return view('pendaftaran.personal.index', compact('data'));
            } else {
                return redirect('/personal/create');
            }
        } else {
            return redirect('/home');
        }
    }
    public function createView()
    {
        if (Auth::user()->level_id == 3){
            if (Pendaftar::where('user_id', Auth::id())->count() >= 1){
                $data = Pendaftar::where('user_id', Auth::id())->first();
                return view('pendaftaran.personal.index', compact('data'));
            } else {
                return view('pendaftaran.personal.create');
            }
        } else {
            return redirect('/home');
        }
    }
    public function create(Request $request)
    {
        $id = Pendaftar::create($request->all());
        echo 'Sukses';
    }
    public function viewUpdatePersonal()
    {
        if (Auth::user()->level_id == 3){
            $personal = Pendaftar::where('user_id', Auth::id())->first();
            return view('pendaftaran.personal.personalUpdate', compact('personal'));
        } else {
            return redirect('/home');
        }
    }
    public function updatePersonal(Request $request)
    {
        $pendaftar = Pendaftar::where('user_id', Auth::id())->first();
        if ($request->file('foto') !== null){
            $this->validate($request, [
                'ipk' => 'required|integer',
                'semester' => 'required|max:10',
                'telp' => 'required|numeric',
                'foto' => 'required|image|mimes:jpeg,png,jpg|max:1024|dimensions:ratio=1/1',
            ]);
            $filename = Storage::disk('foto')->put('peserta', $request->file('foto'));
            Pendaftar::find($pendaftar->id)->update([
                'nama_pendaftar' => $request->nama,
                'gender' => $request->gender,
                'alamat_pendaftar' => $request->alamat,
                'telp' => $request->telp,
                'universitas' => $request->universitas,
                'kota_universitas' => $request->kota,
                'ipk' => $request->ipk,
                'semester' => $request->semester,
                'foto' => $filename
            ]);
        } else {
            $this->validate($request, [
                'ipk' => 'required|integer',
                'semester' => 'required|max:10',
                'telp' => 'required|numeric'
            ]);
            Pendaftar::find($pendaftar->id)->update([
                'nama_pendaftar' => $request->nama,
                'gender' => $request->gender,
                'alamat_pendaftar' => $request->alamat,
                'telp' => $request->telp,
                'universitas' => $request->universitas,
                'kota_universitas' => $request->kota,
                'ipk' => $request->ipk,
                'semester' => $request->semester
            ]);
        }
        return redirect('/personal');
    }
    public function viewUpdateParent()
    {
        if (Auth::user()->level_id == 3){
            $personal = Pendaftar::where('user_id', Auth::id())->first();
            return view('pendaftaran.personal.parentUpdate', compact('personal'));
        } else {
            return redirect('/home');
        }
    }
    public function updateParent(Request $request)
    {
        $pendaftar = Pendaftar::where('user_id', Auth::id())->first();
        Pendaftar::find($pendaftar->id)->update([
            'nama_ayah' => $request->n_ayah,
            'nama_ibu' => $request->n_ibu,
            'pekerjaan_ayah' => $request->p_ayah,
            'pekerjaan_ibu' => $request->p_ibu,
            'gaji_ayah' => $request->g_ayah,
            'gaji_ibu' => $request->g_ibu,
        ]);
        return redirect('/personal');
    }
}
