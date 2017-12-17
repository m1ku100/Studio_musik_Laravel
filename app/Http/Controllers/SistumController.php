<?php

namespace App\Http\Controllers;

use App\Contact;
use App\jenis_recorder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class SistumController extends Controller
{
    public function index()
    {
        Session::forget('ok');
//        $angka=493843434;
//        $jadi = "Rp " . number_format($angka,2,',','.');
        $recorder = jenis_recorder::all();
        return view('user.home', compact('recorder'));
    }

    public function postContact(Request $request)
    {
        Contact::create($request->all());
        $this->validate($request, [
            'email' => 'required|string|email|max:255',
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:9',
            'message' => 'required'
        ]);
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'subject' => 'Feedback',
            'bodymessage' => $request->message
        );
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('rm.rabbitmedia@gmail.com');
            $message->subject($data['subject']);
        });
        return redirect('/')->withSuccess('Thank you so much, your feedback make us growth to be a better company :)');
    }
}
