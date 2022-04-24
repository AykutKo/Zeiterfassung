<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArbeitszeitenRequest;
use App\Http\Requests\StoreZeiterfassungRequest;
use App\Http\Requests\UpdateArbeitszeitenRequest;
use App\Http\Requests\UpdateZeiterfassungRequest;
use App\Models\Zeiterfassung;

class ArbeitszeiterfassungsController extends Controller
{
    public function index()
    {
        $zeiterfassungen = Zeiterfassung::all()->whereNotNull('kommen');

        if(!auth()->user()->hasRole('admin'))
        {
            $zeiterfassungen = $zeiterfassungen->where('user_id', auth()->id());
        }

        return view('arbeitszeiterfassung.index', [
            'zeiterfassungs' => $zeiterfassungen,
        ]);
    }

    public function create(Zeiterfassung $zeiterfassung)
    {
        return view('arbeitszeiterfassung.create',[
            'zeiterfassung' => $zeiterfassung
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreZeiterfassungRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArbeitszeitenRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();

        Zeiterfassung::create($data);

        return redirect()->route('arbeitszeiterfassung.index');

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
        return view('arbeitszeiterfassung.edit',[
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
    public function update(UpdateArbeitszeitenRequest $request, Zeiterfassung $zeiterfassung)
    {
        $data= $request->validated();

        $zeiterfassung ->update($data);

        return redirect()->route('arbeitszeiterfassung.index');
    }
}
