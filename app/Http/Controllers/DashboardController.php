<?php

namespace App\Http\Controllers;
use App\Models\mahasiswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function tampil(){
        $tb_mahasiswa = mahasiswa::all();
        return view('focus-2.index', compact(['tb_mahasiswa']));
    }


    public function pengisian(){
        return view ('focus-2.index3');
    }
    public function read(){
        $tb_mahasiswa = mahasiswa::all();
        return view('focus-2.read', compact(['tb_mahasiswa']));
    }

    public function store(Request $request){
        // dd($request);
        mahasiswa::create($request->except(['_token,','submit']));
        return redirect('/dashboard');
    }

    public function edit($id_mhs){
        $tb_mahasiswa = mahasiswa::find($id_mhs);
        dd($id_mhs);
        return view ('focus-2.edit');
    }

    public function delete(string $id_mhs){
        mahasiswa::where('id_mhs', $id_mhs)->delete();
        return redirect()->to('/read')->with('success');
    }
}
