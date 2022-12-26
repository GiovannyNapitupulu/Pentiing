<?php

namespace App\Http\Controllers;

use App\Models\consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
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
            'email' => 'required|email',
            'name' => 'required',
            'topic' => 'required',
            'description' => 'required',
            'question' => 'required'
        ]);
        $consultation = new consultation([
            'name' => $request->name,
            'email' => $request->email,
            'topic' => $request->topic,
            'description' => $request->description,
            'question' => $request->question
        ]);
        $consultation->save();
        return redirect()->route('service')->with('service', 'Your question has been sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function show(consultation $consultation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function edit(consultation $consultation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, consultation $consultation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function destroy(consultation $consultation)
    {
        //
    }
}
