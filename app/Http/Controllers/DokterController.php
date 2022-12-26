<?php

namespace App\Http\Controllers;

use App\Models\consultation;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $consultation = consultation::all();
        return view('Dokter.konsultasi', ['consultation' => $consultation]);
    }
    public function detail($id)
    {
        $question = consultation::where('id', $id)->first();
        return view('Dokter.detail', ['question' => $question]);
    }
}
