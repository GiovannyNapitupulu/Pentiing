<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        return view('Dokter.konsultasi');
    }
    public function detail()
    {
        return view('Dokter.detail');
    }
}
