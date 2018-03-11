<?php

namespace App\Http\Controllers;

use App\Beasiswa;
use App\Kriteria;
use App\Lembaga;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeasiswaController extends Controller
{
    public function index()
    {
        if (Auth::user()->level_id == 2){
            if (Lembaga::where('user_id', Auth::id())->count() >= 1){
                $lembaga = Lembaga::where('user_id', Auth::id())->first();
                if (Beasiswa::where('lembaga_id', $lembaga->id)->where('status_oprec', 'Open')->count() >= 1){
                    $beasiswa = Beasiswa::where('lembaga_id', $lembaga->id)->where('status_oprec', 'Open')->first();
                    return view('lembaga.beasiswa.index', compact('beasiswa'));
                } else {
                    $beasiswa = null;
                    return view('lembaga.beasiswa.index', compact('beasiswa'));
                }
            } else {
                return redirect('/lembaga');
            }
        } else {
            return redirect('/home');
        }
    }
    public function createView()
    {
        if (Auth::user()->level_id == 2){
            return view('lembaga.beasiswa.create');
        } else {
            return redirect('/home');
        }
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'ipk' => 'required|numeric',
            'semester' => 'required|max:14'
        ]);
        $date = Carbon::now(+7)->toDateString();
        $lembaga = Lembaga::where('user_id', Auth::id())->first();
        $id = Beasiswa::create([
            'lembaga_id' => $lembaga->id,
            'nama_beasiswa' => $request->beasiswa,
            'detail_beasiswa' => $request->detail,
            'skala_tunjangan' => $request->skala,
            'jumlah_tunjangan' => $request->jumlah,
            'masa_kontrak' => $request->kontrak,
            'tanggal_oprec' => $date,
            'status_oprec' => 'Open'
        ]);
        Kriteria::create([
            'beasiswa_id' => $id->id,
            'kriteria_umum' => $request->kriteria,
            'ipk_min' => $request->ipk,
            'semester_maks' => $request->semester
        ]);
        return redirect('/beasiswa');
    }
    public function informasi($id)
    {
        if (Auth::user()->level_id == 2){
            $informasi = Beasiswa::find($id)->first();
            return view('lembaga.beasiswa.informasi.update', compact('informasi'));
        } else {
            return redirect('/home');
        }
    }
    public function updateInformasi(Request $request, $id)
    {
        if (Auth::user()->level_id == 2){
            Beasiswa::find($id)->update($request->all());
            return redirect('/beasiswa');
        } else {
            return redirect('/home');
        }
    }
    public function kriteria($id)
    {
        if (Auth::user()->level_id == 2){
            $kriteria = Kriteria::find($id)->first();
            return view('lembaga.beasiswa.kriteria.update', compact('kriteria'));
        } else {
            return redirect('/home');
        }
    }
    public function updateKriteria(Request $request, $id)
    {
        if (Auth::user()->level_id == 2){
            Kriteria::find($id)->update($request->all());
            return redirect('/beasiswa');
        } else {
            return redirect('/home');
        }
    }
}
