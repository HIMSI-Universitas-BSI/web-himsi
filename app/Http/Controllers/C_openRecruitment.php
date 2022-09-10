<?php

namespace App\Http\Controllers;

use App\Models\{Campuses, OpenRecruitment};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function inputNIM(Request $request)
    {
        $campuses = Campuses::where('name', $request->campus)->first();
        if (!$campuses) {
            return redirect('/oprec/choose-campus')->with('failed', 'Aksi Ilegal');
        }
        return view('open_recruitment.V_input_nim', [
            'campus' => $request->campus
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
        $cek = OpenRecruitment::where('NIM', $request->NIM)->first();
        if ($cek) {
            return view('open_recruitment.V_done', [
                'data' => $cek
            ]);
        }
        return redirect("/oprec/form/$request->campus/$request->NIM");
    }

    public function form(Request $request)
    {
        $campuses = Campuses::where('name', $request->campus)->first();
        if (!$campuses || strlen($request->NIM) < 8 || strlen($request->NIM) > 8) {
            return redirect('/')->with('failed', 'Aksi Ilegal Hayo Mau Ngapain?');
        }
        return view('open_recruitment.V_form_oprec', [
            'campus' => $campuses,
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
        $dataValid = $request->validate([
            'NIM' => ['required', 'size:8', 'unique:open_recruitment'],
            'full_name' => ['required', 'min:3'],
            'campuses_id' => ['required'],
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
            'whatsapp.min' => 'Nomor Whastapp min 11 angka',
            'motivasi_bergabung.required' => 'Motivasi bergabung wajib di isi'
        ]);


        $create = new OpenRecruitment();
        $create->NIM = $dataValid['NIM'];
        $create->full_name = $dataValid['full_name'];
        $create->campuses_id = $dataValid['campuses_id'];
        $create->semester = $dataValid['semester'];
        $create->whatsapp = $dataValid['whatsapp'];
        $create->email = $dataValid['email'];
        $create->motivasi_bergabung = $dataValid['motivasi_bergabung'];

        if ($request->hasFile('ektm') && $request->hasFile('cv')) {
            $create->ektm =  $request->file('ektm')->store('img/ektm');
            $create->cv =  $request->file('cv')->store('document/cv');
        }
        $create->save();

        return view('open_recruitment.V_done', [
            'data' => $create
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OpenRecruitment  $openRecruitment
     * @return \Illuminate\Http\Response
     */
    public function show(OpenRecruitment $openRecruitment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OpenRecruitment  $openRecruitment
     * @return \Illuminate\Http\Response
     */
    public function edit(OpenRecruitment $openRecruitment)
    {
        return view('open_recruitment.V_form_edit', [
            'OR' => $openRecruitment,
            'campuses' => Campuses::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OpenRecruitment  $openRecruitment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OpenRecruitment $openRecruitment)
    {
        $request->validate([
            'NIM' => ['required', 'size:8',],
            'full_name' => ['required', 'min:3'],
            'campuses_id' => ['required'],
            'semester' => ['required', 'integer', 'min:1', 'max:8'],
            'ektm' => ['image', 'max:2048'],
            'cv' => ['file', 'mimetypes:application/pdf', 'max:2048'],
            'whatsapp' => ['required', 'max:13', 'min:11'],
            'email' => ['required', 'email:dns',],
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

        $openRecruitment->NIM = $request->NIM;
        $openRecruitment->full_name = $request->full_name;
        $openRecruitment->campuses_id = $request->campuses_id;
        $openRecruitment->semester = $request->semester;
        $openRecruitment->whatsapp = $request->whatsapp;
        $openRecruitment->email = $request->email;
        $openRecruitment->motivasi_bergabung = $request->motivasi_bergabung;

        if ($request->hasFile('ektm')) {
            $openRecruitment->ektm =  $request->file('ektm')->store('img/ektm');
            Storage::delete($request->old_ektm);
        }
        if ($request->hasFile('cv')) {
            $openRecruitment->cv =  $request->file('cv')->store('document/cv');
            Storage::delete($request->old_cv);
        }
        $openRecruitment->save();

        return view('open_recruitment.V_done', [
            'data' => $openRecruitment
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OpenRecruitment  $openRecruitment
     * @return \Illuminate\Http\Response
     */
    public function destroy(OpenRecruitment $openRecruitment)
    {
        //
    }
}
