<?php

namespace App\Http\Controllers;


use App\jenis_recorder;
use Redirect;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class JenisRecoderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {

        $base_url = url('/jenis-recorder');
        return view('admin.jenis_recorder.index', compact('base_url'));

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        jenis_recorder::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $category = jenis_recorder::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = jenis_recorder::findOrFail($id);


        $category->nama_recorder = $request['nama_recorder'];
        $category->deskripsi = $request['deskripsi'];
        $category->harga_recorder = $request['harga_recorder'];
        $category->batas_hari = $request['batas_hari'];
        $category->update();

        return $category;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        jenis_recorder::destroy($id);
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
