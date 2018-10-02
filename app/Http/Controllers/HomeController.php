<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if (Auth::check()){
            if (Auth::user()->level_id == 1){
                return view('home.admin');
            } elseif (Auth::user()->level_id == 2){
                return view('home.lembaga');
            } elseif (Auth::user()->level_id == 3){
                return view('home.peserta');
            } else {
                echo 'Forbidden Access';
            }
        } else {
            return redirect('/login');
        }
    }
    
    public function Tes() {
        dd('Tes');
    }
}
