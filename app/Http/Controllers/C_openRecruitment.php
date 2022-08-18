<?php

namespace App\Http\Controllers;

use App\Models\Campuses;
use App\Models\open_recruitment;
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
        return view('open_recruitment.V_index');
    }


    public function chooseCampus()
    {
        $campuses = Campuses::orderBy('name', 'ASC')->get();
        return view('open_recruitment.V_choose_campuses', [
            'campuses' => $campuses
        ]);
    }
    public function inputNIM()
    {
        $campus = request('campus');
        return view('open_recruitment.V_input_nim', [
            'campus' => $campus
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'NIM' => ['required', 'max:8', 'min:8']
        ], [
            'NIM.required' => 'NIM wajib di isi',
            'NIM.max' => 'maximal NIM 8 angka yang di input ' . strlen($request->NIM) . ' angka',
            'NIM.min' => 'NIM harus 8 angka yang di input ' . strlen($request->NIM) . ' angka'
        ]);
        return view('open_recruitment.V_form_oprec', [
            'campus' => $request->campus,
            'NIM' => $request->NIM
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect('/oprec/done');
    }

    public function done()
    {
        return view('open_recruitment.V_done');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\open_recruitment  $open_recruitment
     * @return \Illuminate\Http\Response
     */
    public function show(open_recruitment $open_recruitment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\open_recruitment  $open_recruitment
     * @return \Illuminate\Http\Response
     */
    public function edit(open_recruitment $open_recruitment)
    {
        return view('open_recruitment.V_form_oprec');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\open_recruitment  $open_recruitment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, open_recruitment $open_recruitment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\open_recruitment  $open_recruitment
     * @return \Illuminate\Http\Response
     */
    public function destroy(open_recruitment $open_recruitment)
    {
        //
    }
}
