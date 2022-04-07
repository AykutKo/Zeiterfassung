<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Zeiterfassung;
use App\Http\Requests\StoreZeiterfassungRequest;
use App\Http\Requests\UpdateZeiterfassungRequest;

class ZeiterfassungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('zeiterfassung.index', [
            'zeiterfassungs' => Zeiterfassung::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Zeiterfassung $zeiterfassung)
    {
        return view('zeiterfassung.create',[
            'zeiterfassung' => $zeiterfassung
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreZeiterfassungRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreZeiterfassungRequest $request)
    {
        $data = $request->validated();

        Zeiterfassung::create($data);

        return redirect()->route('zeiterfassung.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zeiterfassung  $zeiterfassung
     * @return \Illuminate\Http\Response
     */
    public function show(Zeiterfassung $zeiterfassung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zeiterfassung  $zeiterfassung
     * @return \Illuminate\Http\Response
     */
    public function edit(Zeiterfassung $zeiterfassung)
    {
        return view('zeiterfassung.edit',[
            'zeiterfassung' => $zeiterfassung
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateZeiterfassungRequest  $request
     * @param  \App\Models\Zeiterfassung  $zeiterfassung
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateZeiterfassungRequest $request, Zeiterfassung $zeiterfassung)
    {
        $data= $request->validated();

        $zeiterfassung ->update($data);

        return redirect()->route('zeiterfassung.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zeiterfassung  $zeiterfassung
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zeiterfassung $zeiterfassung)
    {
        //
    }
}
