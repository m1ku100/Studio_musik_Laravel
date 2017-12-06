<?php

namespace App\Http\Controllers\user;

use App\konfirmasi_pembayaran;
use App\order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;


class KonfirmasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $id1=Crypt::decrypt($id);

        return view('user.konfirmasi_studio.index', compact('id1'));
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
        if (function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
        if (function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
        $date1 = date('Y-m-d');
        $datadate2 = date_create($date1);
        $c = date_format($datadate2, 'Y-m-d');
        $input= $request->except('id');
        $input['order_id']=$ids=$request->id;
        $input['member_id']=Auth::user()->id;
        $input['tanggal_pembayaran']=$c;

        if ($request->deskripsi==null) {
            $input['deskripsi'] = 'kosong';
            }
        $input['bukti_pembayaran'] = null;
        $fillnames = md5($request->id . '' . str_random(4));

        if ($request->hasFile('bukti_pembayaran')) {
            $input['bukti_pembayaran'] = '/upload/pembayaran/' . str_slug($fillnames, '-') . '.' . $request->bukti_pembayaran->getClientOriginalExtension();
            $request->bukti_pembayaran->move(public_path('/upload/pembayaran/'), $input['bukti_pembayaran']);
        }
        $save= new konfirmasi_pembayaran;
        $save->bukti_pembayaran=$input['bukti_pembayaran'];
        $save->order_id=$input['order_id'];
        $save->member_id=$input['member_id'];
        $save->metode=$input['metode'];
        $save->atas_nama=$input['atas_nama'];
        $save->tanggal_pembayaran=$input['tanggal_pembayaran'];
        $save->deskripsi=$input['deskripsi'];
        $save->jumlah=$input['jumlah'];
        $save->save();

        $flight = order::find($request->id);

        $flight->status_book = 'Proses';

        $flight->save();

        return redirect(url('member/'.Auth::user()->id.'/history'));

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
        $edit = konfirmasi_pembayaran::where('order_id', Crypt::decrypt($id))->first();

        return view('user.konfirmasi_studio.update', compact('edit'));
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
        if (function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
        if (function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
        $date1 = date('Y-m-d');
        $datadate2 = date_create($date1);
        $c = date_format($datadate2, 'Y-m-d');
        $contact = konfirmasi_pembayaran::findOrFail($id);
        $input = $request->except('id');
        $input['member_id'] = Auth::user()->id;
        $input['tanggal_pembayaran'] = $c;


        if ($request->deskripsi == null) {
            $input['deskripsi'] = 'kosong';
        }

        $fillnames = md5($request->id . '' . str_random(4));
        $input['bukti_pembayaran'] = $contact->bukti_pembayaran;

        if ($request->hasFile('bukti_pembayaran')) {
            if (!$contact->bukti_pembayaran == NULL) {
                unlink(public_path($contact->bukti_pembayaran));
            }
            $input['bukti_pembayaran'] = '/upload/pembayaran/' . str_slug($fillnames, '-') . '.' . $request->bukti_pembayaran->getClientOriginalExtension();
            $request->bukti_pembayaran->move(public_path('/upload/pembayaran/'), $input['bukti_pembayaran']);
        }

        $contact->update($input);
        $contact2 = konfirmasi_pembayaran::findOrFail($id);

        $flight = order::find($contact2->order_id);

        $flight->status_book = 'Proses';

        $flight->save();

        return redirect(url('member/' . Auth::user()->id . '/history'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
