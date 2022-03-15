<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMitarbeiterRequest;
use App\Http\Requests\UpdateMitarbeiterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

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
    public function create(User $mitarbeiter)
    {
       return view('mitarbeiter.create',[
           'mitarbeiter' => $mitarbeiter
       ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMitarbeiterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMitarbeiterRequest $request)
    {
        $data = $request->validated();

        $data['password']= Hash::make('password');
        User::create($data);

        return redirect()->route('mitarbeiter.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $mitarbeiter
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
    public function edit(User $mitarbeiter)
    {
       return view('mitarbeiter.edit',[
           'mitarbeiter' => $mitarbeiter
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMitarbeiterRequest  $request
     * @param  \App\Models\User  $mitarbeiter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMitarbeiterRequest $request, User $mitarbeiter)
    {
        $data = $request->validated();

        $mitarbeiter->update($data);

        return redirect()->route('mitarbeiter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $mitarbeiter
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $mitarbeiter)
    {
        $mitarbeiter->delete();
        return redirect()->route('mitarbeiter.index')
;    }
}
