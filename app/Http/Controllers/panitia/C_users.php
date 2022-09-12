<?php

namespace App\Http\Controllers\panitia;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Campuses;
use App\Models\Positions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class C_users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage user.index', [
            'users' => User::where('id', '!=', auth()->user()->id)->orderBy('positions_id', 'ASC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage user.create', [
            'campuses' => Campuses::all(),
            'positions' => Positions::where('name', '!=', 'admin')->get(),
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
        $request->validate([
            'NIM' => ['required', 'size:8', 'unique:users'],
            'full_name' => ['required', 'min:3'],
            'campus_name' => ['required'],
            'position_name' => ['required'],
        ]);

        $campus = Campuses::where('name', $request->campus_name)->first();
        $position = Positions::where('name', $request->position_name)->first();

        $create = User::create([
            'email' => "$request->NIM@bsi.ac.id",
            'NIM' => $request->NIM,
            'full_name' => $request->full_name,
            'campuses_id' => $campus->id,
            'positions_id' => $position->id,
            'password' => Hash::make('#PanitiaOprec' . date('Y')),
        ]);

        if ($create) {
            return back()->with("success", "Berhasil menambahkan");
        } else {
            return back()->with("failed", "Gagal menambahkan");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
