<?php

namespace App\Http\Controllers;

use App\Pensionnaire;
use Illuminate\Http\Request;

class PensionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pensionnaires = Pensionnaire::orderby('id', 'asc')->paginate(10);
        return view('pensionnaires.index', ['pensionnaires' => $pensionnaires]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pensionnaires.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pensionnaire = Pensionnaire::create($request->all());
        return redirect('pensionnaires')->with('status', 'Vous avez été bien enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pensionnaire  $pensionnaire
     * @return \Illuminate\Http\Response
     */
    public function show(Pensionnaire $pensionnaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pensionnaire  $pensionnaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Pensionnaire $pensionnaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pensionnaire  $pensionnaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pensionnaire $pensionnaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pensionnaire  $pensionnaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pensionnaire $pensionnaire)
    {
        //
    }
}
