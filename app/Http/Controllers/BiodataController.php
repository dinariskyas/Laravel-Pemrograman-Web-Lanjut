<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $nama = 'Dina Risky Alin Saputri'; //ubah dengan nama kalian              
        // return view('biodata', ['nama' => $nama]);
        $materi = ["Web Design", "Web Programming", "Digital                     
        Marketing", "Graphic Design"];
        return view('biodata', ['nama' => $nama, 'materi' =>
        $materi]);
    }
}
