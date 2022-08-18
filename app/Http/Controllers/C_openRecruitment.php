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
            'NIM' => ['required', 'size:8']
        ], [
            'NIM.required' => 'NIM wajib di isi',
            'NIM.size' => 'NIM harus 8 angka yang di input ' . strlen($request->NIM) . ' angka'
        ]);
        return redirect("/oprec/form/$request->campus/$request->NIM");
    }

    public function form(Request $request)
    {
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
        // dd($request->all());
        $request->validate([
            'NIM' => ['required', 'size:8', 'unique:open_recruitment'],
            'full_name' => ['required', 'min:3'],
            'campus' => ['required'],
            'semester' => ['required', 'integer', 'min:1', 'max:8'],
            'ektm' => ['required', 'image', 'max:2048'],
            'cv' => ['required', 'file', 'mimetypes:application/pdf', 'max:2048'],
            'whatsapp' => ['required', 'max:13', 'min:11'],
            'email' => ['required', 'email:dns', 'unique:open_recruitment'],
            'motivasi_bergabung' => ['required']
        ], [
            'nim.unique' => 'NIM sudah terdaftar',
            'email.unique' => 'Email sudah terdaftar',
            'semester.min' => 'Semester minimal 1',
            'semester.max' => 'Semester maximal 8',
            'ektm.image' => 'Tolong upload gambar yah jangan yang lain',
            'ektm.max' => 'Maximal upload 2mb',
            'cv.mimetypes' => 'Tolong upload PDF yah jangan yang lain',
            'cv.max' => 'Maximal upload 2mb',
            'whatsapp.max' => 'Nomor Whastapp max 13 angka',
            'whatsapp.min' => 'Nomor Whastapp min 11 angka'
        ]);

        $campuses = Campuses::where('name', $request->campus)->first();
        if (!$campuses) {
            return back()->with('failed', 'Aksi ilegal nama kampus tidak tersedia');
        }

        // $insert = open_recruitment::create([
        //     'NIM' => $request->NIM,
        //     'full_name' => $request->full_name,
        //     'campuses_id' => $campuses->id,
        //     'semester' => $request->semester,
        // ]);

        return redirect('/oprec/done')->with('success', 'Berhasil Melakukan Pendaftaran');
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
