<?php

namespace App\Http\Controllers;

use App\Lembaga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LembagaController extends Controller
{
    public function index()
    {
        if (Auth::user()->level_id == 2){
            if (Lembaga::where('user_id', Auth::id())->count() >= 1 ){
                $lembaga = Lembaga::where('user_id', Auth::id())->first();
                return view('lembaga.index', compact('lembaga'));
            } else {
                return redirect('/lembaga/create');
            }
        } else {
            return redirect('/home');
        }
    }
    public function createView()
    {
        if (Auth::user()->level_id == 2){
            if (Lembaga::where('user_id', Auth::id())->count() < 1){
                return view('lembaga.create');
            } else {
                return redirect('/lembaga');
            }
        } else {
            return redirect('/home');
        }
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:255',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:1024|dimensions:ratio=1/1'
        ]);
        $filename = Storage::disk('foto')->put('logo', $request->file('img'));
        Lembaga::create([
            'user_id' => Auth::id(),
            'nama_lembaga' => $request->nama,
            'alamat_lembaga' => $request->alamat,
            'logo_lembaga' => $filename
        ]);
        return redirect('/lembaga');
    }
    public function updateView()
    {
        if (Auth::user()->level_id == 2){
            if (Lembaga::where('user_id', Auth::id())->count() < 1){
                return redirect('/lembaga/create');
            } else {
                $lembaga = Lembaga::where('user_id', Auth::id())->first();
                return view('lembaga.update', compact('lembaga'));
            }
        } else {
            return redirect('/home');
        }
    }
    public function update(Request $request)
    {
        $lembaga = Lembaga::where('user_id', Auth::id())->first();
        if ($request->file('image') !== null){
            $this->validate($request, [
                'nama' => 'required|string|max:255',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:1024|dimensions:ratio=1/1'
            ]);
            $filename = Storage::disk('foto')->put('logo', $request->file('image'));
            Lembaga::find($lembaga->id)->update([
                'nama_lembaga' => $request->nama,
                'alamat_lembaga' => $request->alamat,
                'logo_lembaga' => $filename
            ]);
        } else {
            $this->validate($request, [
                'nama' => 'required|string|max:255'
            ]);
            Lembaga::find($lembaga->id)->update([
                'nama_lembaga' => $request->nama,
                'alamat_lembaga' => $request->alamat
            ]);
        }
        return redirect('/lembaga');
    }
}
