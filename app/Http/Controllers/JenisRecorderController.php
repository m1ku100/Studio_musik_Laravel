<?php

namespace App\Http\Controllers;

use App\Contact;
use App\jenis_recorder;
use App\order_recorder;
use App\order_studio;
use App\User;
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
        $rec_order = order_recorder::whereraw('created_at = curdate()')->count();
        $stud_order = order_studio::whereraw('created_at = curdate()')->count();
        $feedback = Contact::whereraw('created_at = curdate()')->count();
        $feedback_t = Contact::whereraw('created_at = curdate()')->get();
        $member = User::whereraw('created_at = curdate()')->count();
        $notif = $rec_order + $stud_order + $feedback + $member;
        $base_url = url('/jenis-recorder');
        return view('admin.jenis_recorder.index', compact('base_url', 'rec_order', 'stud_order', 'feedback', 'feedback_t', 'member', 'notif'));
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

        Session::flash('sukses', 'Successfully created!');
        return back();

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
