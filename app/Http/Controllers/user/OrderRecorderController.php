<?php

namespace App\Http\Controllers\user;

use App\HistoryOrderRecorder;
use App\jenis_recorder;
use App\order;
use App\order_recorder;
use App\order_studio;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderRecorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $idsssss = $id;

        $now = new Carbon();

        $cek12 = order::all();
        $cek22 = order_recorder::all();
        $history = HistoryOrderRecorder::all();
//mark gagal
        foreach ($cek12 as $or) {
            $ids = $or->id;
            $aas = Carbon::createFromFormat('Y-m-d H:i:s', $or->tgl_exp);
            $diff = $aas->diffInMinutes($now, false);
            if ($or->status_book == "Pembayaran" && $diff > 0) {
                order::
                where('id', $ids)
                    ->update(['status_book' => 'Gagal']);
            }
        }

//        delete gagal
        $dt = array();
        foreach ($cek12 as $or) {
            if ($or->status_book == "Gagal") {
                foreach ($history as $his) {
                    if ($his->order_id == $or->id) {
                        $dt[] = array('id' => $his->id);
                    }
                }
            }
        }
        if (!empty($dt)) {
            $ids_to_delete = array_map(function ($item) {
                return $item['id'];
            }, $dt);
            DB::table('history_order_recorders')->whereIn('id', $ids_to_delete)->delete();
        }
        $date = HistoryOrderRecorder::orderBy('waktu', 'asc')
            ->get();

//        cek 7 hari
        $result = array();
        foreach ($cek12 as $c) {
            foreach ($cek22 as $c2) {
                if ($c->id == $c2->order_id) {
                    $result[] = $c2->created_at;
                }
            }
        }
        $ab = end($result);
        if ($ab == false) {
            Session::forget('ok');
            $jenis = jenis_recorder::where('id', Crypt::decryptString($idsssss))->first();
            return view('user.order_recorder.index', compact('now', 'date', 'jenis', 'idsssss'));
        }
        $value = Carbon::createFromFormat('Y-m-d H:i:s', $ab)->addDays(3);
        $notice = "request time out, wait until " . $value->copy()->toDayDateTimeString();
        $tujuplus = $now->copy();
        $asd = $value->gt($tujuplus);
        if ($value->gt($tujuplus) == false) {
            Session::put('ok', $notice);
            $status = "failed";
            $code = 401;
            $recorder = jenis_recorder::all();
            return view('user.home', compact('status', 'code', 'recorder'));
        }

        Session::forget('ok');
        $jenis = jenis_recorder::where('id', Crypt::decryptString($idsssss))->first();
        return view('user.order_recorder.index2', compact('now', 'date', 'jenis', 'idsssss'));
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

        $fill['tgl_booking'] = $date = Carbon::now();
        $date2 = $fill['tgl_exp'] = $date->copy()->addMinutes(30);
        $fill['status_book'] = "Pembayaran";
        $fill['user_id'] = Auth::user()->id;
        order::create($fill);

        //isi order recorder
        $a = order::where('user_id', Auth::user()->id)->
        orderBy('tgl_booking', 'desc')
            ->first();
        $jenis = jenis_recorder::findOrFail(Crypt::decryptString($request->jenis_recorder_id));
        $isi['awal'] = $request->awal;
        $isi['jenis_recorder_id'] = $jenis->id;
        $isi['order_id'] = $a->id;
        order_recorder::create($isi);

        $ngisi['order_id'] = $a->id;
        $ngisi['waktu'] = $request->awal;
        HistoryOrderRecorder::create($ngisi);

        $harga = $jenis->harga_recorder;

        return redirect()->route('user.proses-recorder', compact('date', 'harga'));

    }

    public function become(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $jenis = jenis_recorder::findOrFail(Crypt::decryptString($request->jenis_recorder_id));
        $order = $request->all();
        $member = User::where('id', Auth::user()->id)->first();

        setlocale(LC_TIME, 'Indonesian');
        $dtdate = Carbon::createFromFormat('Y-m-d', $request->awal)->formatLocalized('%A, %d %B %Y');
        return view('user.order_recorder.konfirmasi', compact('member', 'user', 'order', 'jenis', 'dtdate'));
    }

    public function pembayaran(Request $request)
    {
        $a = $request->all();
        return view('user.order_recorder.pembayaran', compact('a'));
    }
}
