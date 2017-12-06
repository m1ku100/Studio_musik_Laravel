<?php

namespace App\Http\Controllers;

use App\Contact;
use App\jenis_recorder;
use App\order_recorder;
use App\order_studio;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\DataTables;

class JenisRecorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//set notif
        $now = Carbon::now();
        $lt_studio1 = order_studio::all();
        $lt_recorder1 = order_recorder::all();
        $user = User::all();
        $contact = Contact::all();

        $dt_studio = array();
        $dt_recorder = array();
        $dt_user = array();
        $dt_feedback = array();
        foreach ($lt_studio1 as $lts) {
            $compare = $now->copy()->subDay()->lte($lts->created_at);
            if ($compare == true) {
                $dt_studio[] = array('id' => $lts->id, 'order_id' => $lts->order_id, 'studio' => 'practic ' . $lts->studio->nama_studio, 'harga' => $lts->harga,
                    'total_waktu' => $lts->total_waktu, 'waktu_mulai' => $lts->waktu_mulai, 'waktu_habis' => $lts->waktu_habis);
            }

        }
        foreach ($lt_recorder1 as $lts) {
            $compare = $now->copy()->subDay()->lte($lts->created_at);
            if ($compare == true) {
                $dt_recorder[] = array('id' => $lts->id, 'order_id' => $lts->order_id, 'studio' => 'Recording ' . $lts->jenis_recorder->nama_recorder,
                    'harga' => $lts->jenis_recorder->harga_recorder, 'awal' => $lts->awal);
            }

        }
        foreach ($user as $lts) {
            $compare = $now->copy()->subDay()->lte($lts->created_at);
            if ($compare == true) {
                $dt_user[] = array('id' => $lts->id, 'name' => $lts->name, 'nama_band' => $lts->nama_band,
                    'alamat' => $lts->alamat, 'no_telp' => $lts->no_telp, 'email' => $lts->email);
            }
        }
        foreach ($contact as $lts) {
            $compare = $now->copy()->subDay()->lte($lts->created_at);
            if ($compare == true) {
                $photous = User::where('email', $lts->email)->first();
                $dt_feedback[] = array('id' => $lts->id, 'name' => $lts->name, 'message' => $lts->message,
                    'email' => $lts->email, 'created_at' => $lts->created_at, 'photo' => $photous->gambar_user);

            }
        }
        $base_url = url('/jenis-recorder');
        return view('admin.jenis_recorder.index', compact('base_url', 'dt_feedback', 'dt_user', 'dt_recorder', 'dt_studio'));
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
        jenis_recorder::create($request->all());


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $category = jenis_recorder::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = jenis_recorder::findOrFail($id);

        $category->nama_recorder= $request['nama_recorder'];
        $category->deskripsi = $request['deskripsi'];
        $category->harga_recorder = $request['harga_recorder'];
        $category->batas_hari = $request['batas_hari'];
        $category->update();
        Session::flash('sukses', 'Successfully created!');
        return back();



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        jenis_recorder::destroy($id);

        Session::flash('sukses', 'Successfully created!');
        return back();
    }

    public function apiData()
    {
        $jenis_recorder = jenis_recorder::all();
        return DataTables::of($jenis_recorder)
            ->addColumn('action', function ($jenis_recorder) {

                return view('layouts.partials._action', [
                    'id' => $jenis_recorder->id,
                    'show' => 1,
                    'edit' => 1,
                    'delete' => 1,
                ]);
            })
            ->make(true);
    }
}
