<?php

namespace App\Http\Controllers;

use App\Models\Mitarbeiter;
use App\Http\Requests\StoreMitarbeiterRequest;
use App\Http\Requests\UpdateMitarbeiterRequest;
use App\Models\User;

class MitarbeiterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mitarbeiter.index',[
            'mitarbeiters' => User::all(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('mitarbeiter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMitarbeiterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMitarbeiterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mitarbeiter  $mitarbeiter
     * @return \Illuminate\Http\Response
     */
    public function show(Mitarbeiter $mitarbeiter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mitarbeiter  $mitarbeiter
     * @return \Illuminate\Http\Response
     */
    public function edit(Mitarbeiter $mitarbeiter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMitarbeiterRequest  $request
     * @param  \App\Models\Mitarbeiter  $mitarbeiter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMitarbeiterRequest $request, Mitarbeiter $mitarbeiter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mitarbeiter  $mitarbeiter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mitarbeiter $mitarbeiter)
    {
        //
    }
}
