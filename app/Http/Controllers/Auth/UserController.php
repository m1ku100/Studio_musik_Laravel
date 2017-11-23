<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\order;
use App\User;
use Illuminate\Http\Request;
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
            Session::flash('status', 'Your current password is not correct!');
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
        $count = order::count();
        $order = order::all();
        return view('auth.history', compact('user', 'count', 'order'));
    }

    public function printOrderHistory(User $user)
    {
        $order = order::all();
        return view('auth.print', compact('user', 'order'));
    }
}
