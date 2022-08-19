<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Open_recruitment;
use Illuminate\Http\Request;

class C_openRecruitment extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'COBA';
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
     * @param  \App\Models\Open_recruitment  $open_recruitment
     * @return \Illuminate\Http\Response
     */
    public function show(Open_recruitment $open_recruitment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Open_recruitment  $open_recruitment
     * @return \Illuminate\Http\Response
     */
    public function edit(Open_recruitment $open_recruitment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Open_recruitment  $open_recruitment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Open_recruitment $open_recruitment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Open_recruitment  $open_recruitment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Open_recruitment $open_recruitment)
    {
        //
    }
}
