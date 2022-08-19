<?php

namespace App\Http\Controllers;

use App\Models\Campuses;
use Illuminate\Http\Request;

class C_Campuses extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campuses  $campuses
     * @return \Illuminate\Http\Response
     */
    public function show(Campuses $campuses)
    {
        dd($campuses->Open_recruitment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campuses  $campuses
     * @return \Illuminate\Http\Response
     */
    public function edit(Campuses $campuses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Campuses  $campuses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campuses $campuses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campuses  $campuses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campuses $campuses)
    {
        //
    }
}
