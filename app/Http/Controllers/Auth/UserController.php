<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\jenis_recorder;
use App\konfirmasi_pembayaran;
use App\order;
use App\order_recorder;
use App\order_studio;
use App\studio;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showAccountSettings(User $user)
    {
        return view('auth.settings', compact('user'));
    }

    public function updateAccount(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'nama_band' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|string|max:13',
            'gambar_user' => 'mimes:jpeg,bmp,png',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'new_password' => 'required|string|min:6',
            'password_confirmation' => 'required|same:new_password',
        ]);
        $input = $request->all();
        $data = User::find(auth()->user()->id);
        if (!Hash::check($input['password'], $data->password)) {
            Session::flash('status', 'Your current password is incorrect!');
            return back();
        } else {
            if ($request->hasFile('gambar_user')) {
                $old = Storage::files('public/member');
                if ($old) {
                    Storage::delete('public/member/' . $user->gambar_user);
                }

                $img = $request->file('gambar_user');
                $name = $img->getClientOriginalName();
                if ($request->file('gambar_user')->isValid()) {
                    $request->gambar_user->storeAs('public/member', $name);
                    $user->update([
                        'name' => $request->name,
                        'nama_band' => $request->nama_band,
                        'alamat' => $request->alamat,
                        'no_telp' => $request->no_telp,
                        'gambar_user' => $name,
                        'email' => $request->email,
                        'password' => bcrypt($request->new_password),
                    ]);
                    Session::flash('ok', 'Successfully, updated!');
                    return back();
                }
            } else {
                Session::flash('ava', 'There`s no any file selected...');
                return back();
            }
        }
        return redirect('/');
    }

    public function showOrderHistory(User $user)
    {
        $time = Carbon::now();
        $order = order::all();
        $order1 = order::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')
            ->get();

        foreach ($order as $or) {
            $ids = $or->id;
            $aas = Carbon::createFromFormat('Y-m-d H:i:s', $or->tgl_exp);
            $diff = $aas->diffInMinutes($time, false);
            if ($or->status_book == "Pembayaran" && $diff > 0) {
                order::
                where('id', $ids)
                    ->update(['status_book' => 'Gagal']);
            }
        }
        $count = order::count();
        $studio = order_studio::all();
        $studiode = studio::all();
        $recorder = order_recorder::all();
        $recorderde = jenis_recorder::all();

        return view('auth.history', compact('c', 'studiode', 'studio', 'user', 'count', 'order1', 'datadate', 'recorder', 'recorderde'));
    }

    public function printOrderHistory(User $user)
    {
        $order = order::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')
            ->get();
        return view('auth.print', compact('user', 'order'));
    }

    public function showReport($user, $id)
    {
        $order = order::findOrFail($id);
        $user = User::findOrFail($user);
        $recorder = order_recorder::where('order_id', $id)->first();
        $studio = order_studio::where('order_id', $id)->first();
        $pembayaran = konfirmasi_pembayaran::where('order_id', $id)->first();
        if (!empty($recorder)) {
            $status = 1;
            $dt = order_recorder::where('order_id', $id)->first();
        }
        if (!empty($studio)) {
            $status = 0;
            $dt = order_studio::where('order_id', $id)->first();
        }

        return view('user.order_studio.report', compact('user', 'order', 'pembayaran', 'dt', 'status'));
    }

    public function printSukses($user, $id)
    {
        $order = order::findOrFail($id);
        $user = User::findOrFail($user);
        $recorder = order_recorder::where('order_id', $id)->first();
        $studio = order_studio::where('order_id', $id)->first();
        $pembayaran = konfirmasi_pembayaran::where('order_id', $id)->first();
        if (!empty($recorder)) {
            $status = 1;
            $dt = order_recorder::where('order_id', $id)->first();
        }
        if (!empty($studio)) {
            $status = 0;
            $dt = order_studio::where('order_id', $id)->first();
        }

        return view('auth.printsukses', compact('user', 'order', 'pembayaran', 'dt', 'status'));
    }
}
