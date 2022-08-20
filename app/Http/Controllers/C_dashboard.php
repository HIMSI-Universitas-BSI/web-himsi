<?php

namespace App\Http\Controllers;

use App\Models\{Campuses, OpenRecruitment, User};
use Illuminate\Http\Request;

class C_dashboard extends Controller
{
    public function index()
    {
        return view('open_recruitment.panitia.dashboard', [
            'pendaftar' => OpenRecruitment::count(),
            'jumlahCampus' => Campuses::count(),
            'jumlahPanitia' => User::count(),
        ]);
    }
}
