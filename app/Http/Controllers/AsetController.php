<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use Illuminate\Http\Request;

class AsetController extends Controller
{
    public function tampil(){
        $aset = Aset::all();
        return view('home', compact(['aset']));
    }

    public function aset(){        
        return view('form');
    }

    public function store(Request $request){
        Aset::create($request->except(['_token', 'submit']));
        return redirect('/tambah');
    }
}
