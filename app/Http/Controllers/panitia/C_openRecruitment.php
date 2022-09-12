<?php

namespace App\Http\Controllers\panitia;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\{Campuses, OpenRecruitment};
use Haruncpi\LaravelIdGenerator\IdGenerator;

class C_openRecruitment extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('open_recruitment.panitia.data.V_campuses', [
            'campuses' => Campuses::with('openRecruitment')->orderBy('name', 'ASC')->get(),
        ]);
    }

    public function campus(Campuses $campuses)
    {
        if (Auth::user()->positions->level != 'DPP' xor Auth::user()->positions->name != 'admin') {
        } else {
            if (Auth::user()->campuses->name != $campuses->name) {
                $samudra = ['salemba 22', 'pemuda', 'keramat 98'];
                if (in_array(Auth::user()->campuses->name, $samudra) && in_array($campuses->name, $samudra)) {
                } else {
                    return back()->with('failed', 'kamu hanya bisa mengakses data kampus ' . Auth::user()->campuses->name);
                }
            }
        }
        return view('open_recruitment.panitia.data.V_oprec', [
            'openRecruitment' => OpenRecruitment::with('campuses')->where('campuses_id', $campuses->id)->get(),
            'campus' => $campuses->name
        ]);
    }
    public function filterInterview(Campuses $campuses, Request $request)
    {
        return view('open_recruitment.panitia.data.V_oprec', [
            'openRecruitment' => OpenRecruitment::with('campuses')->where(['campuses_id' => $campuses->id, 'status_interview' => $request->status_interview])->get(),
        ]);
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
     * @param  \App\Models\OpenRecruitment  $openRecruitment
     * @return \Illuminate\Http\Response
     */
    public function show(OpenRecruitment $openRecruitment)
    {
        return view('open_recruitment.panitia.data.V_detail-oprec', [
            'oprec' => $openRecruitment
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OpenRecruitment  $openRecruitment
     * @return \Illuminate\Http\Response
     */
    public function edit(OpenRecruitment $openRecruitment)
    {
        //
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
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OpenRecruitment  $openRecruitment
     * @return \Illuminate\Http\Response
     */
    public function updateStatus(Request $request, OpenRecruitment $openRecruitment)
    {
        if (Auth::user()->positions->level != 'DPP' || Auth::user()->positions->name != 'admin') {
            if (Auth::user()->campuses->name != $openRecruitment->campuses->name) {
                return back()->with('failed', 'kamu hanya bisa mengakses data kampus ' . Auth::user()->campuses->name);
            }
        }
        $openRecruitment->status_interview = $request->status_interview;
        if (!$openRecruitment->no_anggota) {
            $no_cabang = $openRecruitment->campuses_id < 10 ? "0$openRecruitment->campuses_id" : "$openRecruitment->campuses_id";
            $year = Carbon::now()->format('y');
            $kode_prodi = substr("$openRecruitment->NIM", 0, 2);
            $anggota_terakhir = OpenRecruitment::where('no_anggota', '!=', null)->latest('updated_at')->first();
            if ($anggota_terakhir) {
                $last_year = explode('.', $anggota_terakhir->no_anggota)[4];
                $nomer_anggota_terakhir = (int)explode('.', $anggota_terakhir->no_anggota)[2] + 1;
                if ($last_year != $year) {
                    $nomer_anggota_terakhir = 1;
                }
                $anggota_ke = str_repeat("0", 4 - strlen($nomer_anggota_terakhir)) . "$nomer_anggota_terakhir";
                $no_anggota = "H$no_cabang.$anggota_ke.$kode_prodi.$year";
            } else {
                $no_anggota = "H$no_cabang.0001.$kode_prodi.$year";
            }
            $openRecruitment->no_anggota = $no_anggota;
        }
        if ($request->status_interview == 'belum') {
            $openRecruitment->no_anggota = NULL;
        }
        $openRecruitment->save();
        return back()->with('success', 'Berhasil update status interview');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OpenRecruitment  $openRecruitment
     * @return \Illuminate\Http\Response
     */
    public function destroy(OpenRecruitment $openRecruitment)
    {
        if (Auth::user()->positions->name != 'admin') {
            return back()->with('failed', 'kamu tidak mempunyai hak untuk menghapus');
        }
        $campuses_id = $openRecruitment->campuses_id;
        $delete = $openRecruitment->delete();
        if ($delete) {
            return redirect("panitia/openrecruitment/campus/$campuses_id")->with('success', 'Berhasil delete pendaftar');
        }
        return redirect("panitia/openrecruitment/campus/$campuses_id")->with('failed', 'Gagal delete pendaftar');
    }
}
