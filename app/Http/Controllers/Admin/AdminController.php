<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Contact;
use App\Http\Controllers\Controller;
use App\jenis_recorder;
use App\new_ins;
use App\order;
use App\order_recorder;
use App\order_studio;
use App\studio;
use App\User;
use Carbon\Carbon;
use function GuzzleHttp\Promise\all;
use Illuminate\Foundation\Console\PackageDiscoverCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {


        //tambah fahmi
        $lt_studio = order_studio::orderBy('id', 'desc')->limit(3)->get();
        $lt_recorder = order_recorder::orderBy('id', 'desc')->limit(3)->get();
        $lt_sstudio = studio::orderBy('id', 'desc')->limit(3)->get();
        $lt_ins = new_ins::orderBy('id', 'desc')->limit(3)->get();
        $lt_jenis_recorder = jenis_recorder::orderBy('id', 'desc')->limit(3)->get();
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

        return view('admin.dashboard', compact('lt_jenis_recorder', 'lt_ins', 'lt_sstudio',
            'dt_feedback', 'dt_user', 'dt_recorder', 'dt_studio', 'lt_recorder',
            'lt_studio', 'user'));
    }

    public function showEditProfileForm(Admin $admin)
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
        $admins = Admin::all();
        return view('auth.admin.settings', compact('dt_feedback', 'dt_user', 'dt_recorder', 'dt_studio', 'admin', 'rec_order', 'stud_order', 'feedback', 'feedback_t', 'member', 'notif', 'admins'));
    }

    public function updateAdmin(Request $request, Admin $admin)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'password' => 'required|string|min:6',
            'new_password' => 'required|string|min:6',
            'password_confirmation' => 'required|same:new_password',
        ]);
        $input = $request->all();
        $data = Admin::find(auth()->user()->id);
        if (!Hash::check($input['password'], $data->password)) {
            Session::flash('status', 'Your current password is incorrect!');
            return back();
        } else {
            if ($request->hasFile('url')) {
                $old = Storage::files('public/profile');
                if ($old) {
                    Storage::delete('public/profile/' . $admin->url);
                }

                $img = $request->file('url');
                $name = $img->getClientOriginalName();
                if ($request->file('url')->isValid()) {
                    $request->url->storeAs('public/profile', $name);
                    $admin->update([
                        'url' => $name,
                        'name' => $request->name,
                        'lastname' => $request->lastname,
                        'email' => $request->email,
                        'password' => bcrypt($request->new_password),
                        'address' => $request->address,
                        'education' => $request->education,
                        'skills' => $request->skills,
                        'biography' => $request->biography
                    ]);
                    Session::flash('ok', 'Successfully, updated!');
                    return back();
                }
            } else {
                Session::flash('file', 'There`s no any file selected...');
                return back();
            }
        }
        return redirect('admin/dashboard');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    public function add(Request $request)
    {
        Admin::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        Session::flash('berhasil', 'Successfully, add an Admin');
        return back();
    }

    public function TableAdminDelete(Admin $admin)
    {
        $admin->delete();
        Session::flash('ban', 'Successfully, banned!');
        return back();
    }

    public function TableAdminRestore($admin)
    {
        Admin::withTrashed()->find($admin)->restore();
        Session::flash('restore', 'Successfully, restored!');
        return back();
    }
}
