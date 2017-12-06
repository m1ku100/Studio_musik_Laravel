<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\konfirmasi_pembayaran;
use App\order;
use App\order_recorder;
use App\order_studio;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {


        $konfirmasi = konfirmasi_pembayaran::orderBy('id', 'desc')->get();
        $order = order::orderBy('id', 'desc')->get();
        $no = 0;
        //set notif
        $now = Carbon::now();
        $lt_studio1 = order_studio::all();
        $lt_recorder1 = order_recorder::all();
        $user = User::withTrashed()->get();
        $contact = Contact::orderBy('id', 'desc')
            ->get();

        $dt_studio = array();
        $dt_recorder = array();
        $dt_user = array();
        $dt_feedback = array();

        //mark fail
        foreach ($order as $or) {
            $ids = $or->id;
            $aas = Carbon::createFromFormat('Y-m-d H:i:s', $or->tgl_exp);
            $diff = $aas->diffInMinutes($now, false);
            if ($or->status_book == "Pembayaran" && $diff > 0) {
                order::
                where('id', $ids)
                    ->update(['status_book' => 'Gagal']);
            }
        }

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

        return view('admin.member.index', compact('no', 'konfirmasi', 'dt_feedback', 'dt_user', 'dt_recorder', 'dt_studio', 'user', 'contact', 'order', 'lt_studio1'));
    }

    public function store($konfirm, $kode)
    {
        if ($kode == 1) {
            order::
            where('id', $konfirm)
                ->update(['status_book' => 'Salah']);
        } elseif ($kode == 2) {
            order::
            where('id', $konfirm)
                ->update(['status_book' => 'DP']);
        } else {
            order::
            where('id', $konfirm)
                ->update(['status_book' => 'Lunas']);
        }
        Session::flash('status', 'Successfully, changes status!');
        return back();
    }

    public function destroy(User $user)
    {
        $user->delete();
        Session::flash('status', 'Successfully, banned!');
        return back();
    }

    public function restore($user)
    {
        User::withTrashed()->find($user)->restore();
        Session::flash('status', 'Successfully, restore!');
        return back();

    }
}
