<?php

namespace App\Http\Controllers;

use App\Models\jawaban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class JawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'body' => 'required',
            'consultation_id' => 'required',
        ]);
        $jawaban = new jawaban([
            'body' => $request->body,
            'consultation_id' => $request->consultation_id,
            'user_id' => Auth::user()->id
        ]);
        $jawaban->save();
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function show(jawaban $jawaban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function edit(jawaban $jawaban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jawaban $jawaban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function destroy(jawaban $jawaban)
    {
        //
    }
}
