<?php

namespace App\Http\Controllers;

use App\Contact;
use App\order_recorder;
use App\order_studio;
use App\studio;
use App\User;
use Illuminate\Http\Request;
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
        $rec_order = order_recorder::whereraw('created_at = curdate()')->count();
        $stud_order = order_studio::whereraw('created_at = curdate()')->count();
        $feedback = Contact::whereraw('created_at = curdate()')->count();
        $feedback_t = Contact::whereraw('created_at = curdate()')->get();
        $member = User::whereraw('created_at = curdate()')->count();
        $notif = $rec_order + $stud_order + $feedback + $member;
        $base_url = url('/studio');
        return view('admin.studio.index', compact('base_url', 'rec_order', 'stud_order', 'feedback', 'feedback_t', 'member', 'notif'));
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
        $input['gambar_studio'] = null;
        $fillnames = md5($request->nama_studio.''.$request->id.''.str_random(2));

        if ($request->hasFile('gambar_studio')) {
            $input['gambar_studio'] = '/upload/photo/' . str_slug($fillnames, '-') . '.' . $request->gambar_studio->getClientOriginalExtension();
            $request->gambar_studio->move(public_path('/upload/photo/'), $input['gambar_studio']);
        }

        studio::create($input);

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
        return $category = studio::findOrFail($id);
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
        $input = $request->except('password');
        $contact = studio::findOrFail($id);
        $fillnames = md5($request->nama_studio.''.$request->id.''.str_random(10));;

        $input['gambar_studio'] = $contact->gambar_studio;

        if ($request->hasFile('gambar_studio')) {
            if (!$contact->gambar_studio == NULL) {
                unlink(public_path($contact->gambar_studio));
            }
            $input['gambar_studio'] = '/upload/photo/' . str_slug($fillnames, '-') . '.' . $request->gambar_studio->getClientOriginalExtension();
            $request->gambar_studio->move(public_path('/upload/photo/'), $input['gambar_studio']);
        }

        $contact->update($input);

        return response()->json([
            'success' => true,
            'message' => 'Studio Updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengurus = studio::findOrFail($id);

        if ($pengurus->gambar_studio != NULL) {
            unlink(public_path($pengurus->gambar_studio));
        }
        studio::destroy($id);

        return response()->json([
            'success' => true
        ]);
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
