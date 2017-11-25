<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Contact;
use App\Http\Controllers\Controller;
use App\order;
use App\order_recorder;
use App\order_studio;
use App\User;
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
        $rec_order = order_recorder::whereraw('created_at = curdate()')->count();
        $stud_order = order_studio::whereraw('created_at = curdate()')->count();
        $feedback = Contact::whereraw('created_at = curdate()')->count();
        $feedback_t = Contact::whereraw('created_at = curdate()')->get();
        $member = User::whereraw('created_at = curdate()')->count();
        $notif = $rec_order + $stud_order + $feedback + $member;

        return view('admin.dashboard', compact('rec_order', 'stud_order', 'feedback', 'feedback_t', 'member', 'notif'));
    }

    public function showEditProfileForm(Admin $admin)
    {
        $rec_order = order_recorder::whereraw('created_at = curdate()')->count();
        $stud_order = order_studio::whereraw('created_at = curdate()')->count();
        $feedback = Contact::whereraw('created_at = curdate()')->count();
        $feedback_t = Contact::whereraw('created_at = curdate()')->get();
        $member = User::whereraw('created_at = curdate()')->count();
        $notif = $rec_order + $stud_order + $feedback + $member;
        $admins = Admin::all();
        return view('auth.admin.settings', compact('admin', 'rec_order', 'stud_order', 'feedback', 'feedback_t', 'member', 'notif', 'admins'));
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
