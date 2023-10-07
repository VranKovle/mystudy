<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugas;


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
        return view('home');
    }
    public function lihatTugas($idtugas){
        $datatugas = Tugas::find($idtugas);
        return view('tugas', [
            'datatugas' => $datatugas
        ]);
    }
}
