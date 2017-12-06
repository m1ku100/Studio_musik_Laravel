<?php

namespace App\Http\Controllers;

use App\Contact;
use App\jen_alat;
use App\new_ins;
use App\order_recorder;
use App\order_studio;
use App\studio;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Yajra\Datatables\Datatables;

class StudioController extends Controller
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
//set notif
        $now = Carbon::now();
        $lt_studio1 = order_studio::all();
        $lt_recorder1 = order_recorder::all();
        $user = User::all();
        $contact = Contact::all();
        $category = null;
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
        $ins = new_ins::orderBy('id', 'desc')->get();
        $st111 = studio::all();
        $jnal = jen_alat::all();
        $no = 0;
        $base_url = url('/studio');
        return view('admin.studio.index', compact('category', 'st111', 'jnal', 'no', 'ins', 'base_url', 'dt_feedback', 'dt_user', 'dt_recorder', 'dt_studio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $input['gambar'] = null;
        $fillnames = md5($request->nama_inst . '' . $request->studio_id . '' . str_random(2));

        if ($request->hasFile('gambar')) {
            $input['gambar'] = '/instrument/' . str_slug($fillnames, '-') . '.' . $request->gambar->getClientOriginalExtension();
            $request->gambar->storeAs('public', $input['gambar']);
//            $request->gambar->move(public_path('/upload/photo/'), $input['gambar_studio']);
        }

        new_ins::create($input);

        Session::flash('berhasil', 'Successfully, added');
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
        return $category = studio::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        $ins = new_ins::orderBy('id', 'desc')->get();
        $st111 = studio::all();
        $jnal = jen_alat::all();
        $no = 0;
        $base_url = url('/studio');
        $category = new_ins::findOrFail($id);
        return view('admin.studio.index', compact('category', 'st111', 'jnal', 'no', 'ins', 'base_url', 'dt_feedback', 'dt_user', 'dt_recorder', 'dt_studio'));
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
        $input = $request->all();
        $contact = new_ins::findOrFail($id);
        $fillnames = md5($request->nama_studio.''.$request->id.''.str_random(10));;

        $input['gambar'] = $contact->gambar;

        if ($request->hasFile('gambar')) {
            if (!$contact->gambar == NULL) {
//                unlink(public_path($contact->gambar));
                Storage::delete('public' . $contact->gambar);
            }
            $input['gambar'] = '/instrument/' . str_slug($fillnames, '-') . '.' . $request->gambar->getClientOriginalExtension();
            $request->gambar->storeAs('public', $input['gambar']);
//            $request->gambar_studio->move(public_path('/upload/photo/'), $input['gambar_studio']);
        }
        $contact->update($input);
        Session::flash('berhasil', 'Successfully, added');
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
        $pengurus = new_ins::findOrFail($id);

        if ($pengurus->gambar != NULL) {
//            unlink(public_path($pengurus->gambar_studio));
            Storage::delete('public' . $pengurus->gambar);
        }
        new_ins::destroy($id);

        return back();

    }

    public function apiData()
    {
        $pengurus = studio::all();

        return DataTables::of($pengurus)
            ->addColumn('show_photo', function ($pengurus) {
                if ($pengurus->gambar_studio == NULL) {
                    return '<img class="rounded-square" width="50" height="50" src="' . url('/upload/photo/ATbrxjpyc.jpg') . '" alt="">';
                }
                return '<img class="rounded-square" width="50" height="50" src="' . url($pengurus->gambar_studio) . '" alt="">';
            })
            ->addColumn('modal_photo', function ($pengurus) {

                if ($pengurus->gambar_studio == NULL) {
                    return url('/upload/photo/ATbrxjpyc.jpg');
                }
                return url($pengurus->gambar_studio);

            })
            ->addColumn('action', function ($pengurus) {

                return view('layouts.partials.__action', [
                    'id' => $pengurus->id,
                    'show' => 1,
                    'edit' => 1,
                    'delete' => 1,
                ]);
            })
            ->rawColumns(['show_photo', 'action', 'modal_photo'])->make(true);
    }
}
