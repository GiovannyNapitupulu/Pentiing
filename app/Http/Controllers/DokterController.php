<?php

namespace App\Http\Controllers;

use App\Models\consultation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DokterController extends Controller
{
    public function index()
    {
        if(Auth::user()->role == 'user'){
            $consultation = consultation::where('user_id', Auth::user()->id)->get();
            return view('Dokter.konsultasi', ['consultation' => $consultation]);
        }
        $consultation = consultation::all();
        return view('Dokter.konsultasi', ['consultation' => $consultation]);
    }
    public function detail($id)
    {
        $question = consultation::where('id', $id)->first();
        return view('Dokter.detail', ['question' => $question]);
    }
}
