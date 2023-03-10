<?php

namespace App\Http\Controllers;
use App\Models\mahasiswa;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('focus-2.index2');
    }

    public function tampil(){
        $tb_mahasiswa = mahasiswa::all();
        return view('focus-2.index2', compact(['tb_mahasiswa']));
    }
}
