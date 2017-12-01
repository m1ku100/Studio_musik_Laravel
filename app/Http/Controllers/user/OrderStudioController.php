<?php

namespace App\Http\Controllers\User;

use App\HistoryTimeStudio;
use App\jen_alat;
use App\konfirmasi_pembayaran;
use App\list_time;
use App\ListTime2;
use App\new_ins;
use App\order;
use App\order_studio;
use App\studio;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class OrderStudioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //isi order
        if (function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
        $fill['tgl_booking'] = $date1 = $tanggal = date('Y-m-d H:i:s');
        $date = date_create($date1);
        date_add($date, date_interval_create_from_date_string('30 minutes'));
        $fill['tgl_exp'] = $tanggal2 = date_format($date, 'Y-m-d H:i:s');
        $fill['status_book'] = "Pembayaran";
        $fill['user_id'] = Auth::user()->id;
        order::create($fill);

        //isi order studio
        $studio = studio::findOrFail($request->studio_id);
        $a = order::where('user_id', Auth::user()->id)->
        orderBy('tgl_booking', 'desc')
            ->first();
        $isi['deskripsi'] = $request->deskripsi;
        $isi['waktu_mulai'] = $mulai = $request->waktu_mulai;
        $start = substr($mulai, 11, -6);
        $isi['waktu_habis'] = $habis = $request->waktu_habis;
        $isi['total_waktu'] = $total = $request->total_waktu;
        $isi['harga'] = $request->harga;
        $isi['order_id'] = $order_id = $a->id;
        $isi['studio_id'] = $request->studio_id;
        order_studio::create($isi);

        //historiwaktu
//start end
//        HistoryTimeStudio::insert([
//            [
//                'waktu'=>$mulai, 'status'=>'start',
//            ],
//            [
//                'waktu'=>$habis, 'status'=>'end',
//            ],
//        ]);
        $data = array(
            array(
                'waktu' => $request->waktu_mulai, 'status' => 'start', 'studio_id' => $request->studio_id

            ),
            array(
                'waktu' => $request->waktu_habis, 'status' => 'end', 'studio_id' => $request->studio_id

            )
        );
        HistoryTimeStudio::insert($data);
        //middle
        if ($request->total_waktu > 2) {
            $middle = array();
            for ($x = $start + 1; $x < $total + $start; $x++) {
                $middle[] = array('waktu' => $request->date . ' ' . $x . ':00:00', 'status' => 'middle', 'studio_id' => $request->studio_id);
            }
            HistoryTimeStudio::insert($middle);

        }
        return redirect()->route('user.proses-studio', compact('tanggal', 'tanggal2', 'order_id'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $encrypted = $id;
        $a = Crypt::decryptString($encrypted);

        $studio = studio::findOrFail($a);
        $inst = studio::findOrFail($a)->instruments;
        $jen = jen_alat::all();


        return view('user.order_studio.detail', compact('studio', 'inst', 'jen'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function apiData()
    {
        $jenis_recorder = jenis_recorder::all();
        return DataTables::of($jenis_recorder)
            ->addColumn('action', function ($jenis_recorder) {

                return view('layouts.partials._action', [
                    'id' => $jenis_recorder->id,
                    'show' => 1,
                    'edit' => 0,
                    'delete' => 0,
                ]);
            })
            ->make(true);
    }

    public function choice()
    {
        $studio = studio::all();

        return view('user.order_studio.index', compact('studio'));
    }

    public function order($id)
    {
        $b = $id;

        $studio = studio::all();

        if (function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
        $date1 = date('Y-m-d H:i:s');
        $datadate = date_create($date1);
        $datadate2 = date_create($date1);
        date_add($datadate, date_interval_create_from_date_string('1 days'));
        $a = date_format($datadate, 'Y-m-d H:i:s');
        $c = date_format($datadate2, 'Y-m-d H:i:s');
        $date = substr($c, 0, -9);
        $date2 = substr($a, 0, -9);

        return view('user.order_studio.options', compact('b', 'date', 'date2', 'studio'));
    }

    public function findtime(Request $request)
    {
        //if our chosen id and products table prod_cat_id col match the get first 100 data

        //$request->id here is the id of our chosen option id

        $histori = HistoryTimeStudio::all();
        $limit = array();

        if (function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
        $date1 = date('Y-m-d H:i:s');
        $datadate2 = date_create($date1);
        $c = date_format($datadate2, 'Y-m-d H:i:s');
        $year = substr($c, 0, -15);
        $month = substr($c, 5, -12);
        $day = substr($c, 8, -9);
        $stu = substr($request->id, strpos($request->id, " ") + 1);

        foreach ($histori as $h) {
            $dax = substr($h->waktu, 8, -9);
            $yex = substr($h->waktu, 0, -15);
            $mhx = substr($h->waktu, 5, -12);
            if ($dax == $day && $mhx == $month && $yex == $year && $h->studio_id == $stu) {
                if ($h->status == 'end' || $h->status == 'middle') {
                    $limit[] = substr($h->waktu, 11, -6);
                }
            }
        }

        sort($limit);

        $range = count($limit);
        $data = ListTime2::where('waktu_id', $request->id)->take(100)->get();
        $data3 = ListTime2::where('waktu_id', $request->id)->first();
        $limit2 = array();
        for ($x = 0; $x < $range; $x++) {
            $azx = substr($data3->waktu, 0, -6);
            if ($azx < $limit[$x]) {
                $limit2[] = $limit[$x];
            }
        }
        if ($limit2 == null) {
            return response()->json($data);
        }
        $jadi = array();
        foreach ($data as $datum) {
            $potong2 = substr($datum->waktu, 0, -6);
            if ($potong2 < $limit2[0]) {
                $jadi[] = array('waktu' => $datum->waktu, 'waktu_id' => $datum->waktu_id,);
            }
        }

        return response()->json($jadi);//then sent this data to ajax success
    }

    public function findtime2(Request $request)
    {
        $histori = HistoryTimeStudio::all();
        $limit = array();

        if (function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
        $date1 = date('Y-m-d H:i:s');
        $datadate = date_create($date1);
        $datadate2 = date_create($date1);
        date_add($datadate, date_interval_create_from_date_string('1 days'));
        $a = date_format($datadate, 'Y-m-d H:i:s');
        $c = date_format($datadate2, 'Y-m-d H:i:s');
        $date = substr($c, 0, -9);
        $year = substr($c, 0, -15);
        $month = substr($c, 5, -12);
        $day = substr($c, 8, -9);
        $year2 = substr($a, 0, -15);
        $month2 = substr($a, 5, -12);
        $day2 = substr($a, 8, -9);
        $date2 = substr($a, 0, -9);
        $stu = substr($request->id, strpos($request->id, " ") + 1);


        foreach ($histori as $h) {
            $dax = substr($h->waktu, 8, -9);
            $yex = substr($h->waktu, 0, -15);
            $mhx = substr($h->waktu, 5, -12);
            if ($dax == $day2 && $mhx == $month2 && $yex == $year2 && $h->studio_id == $stu) {
                if ($h->status == 'end' || $h->status == 'middle') {
                    $limit[] = substr($h->waktu, 11, -6);
                }
            }
        }

        sort($limit);

//        $post = strpos($request->id, ' ');
//        $count = strlen($request->id);
//        $ambil = $post - $count;
//        $waktuid = substr($request->id,0,$ambil);
        $range = count($limit);
        $data = ListTime2::where('waktu_id', $request->id)->take(100)->get();
        $data3 = ListTime2::where('waktu_id', $request->id)->first();
        $limit2 = array();
        for ($x = 0; $x < $range; $x++) {
            $azx = substr($data3->waktu, 0, -6);
            if ($azx < $limit[$x]) {
                $limit2[] = $limit[$x];
            }
        }
        if ($limit2 == null) {
            return response()->json($data);
        }
        $jadi = array();
        foreach ($data as $datum) {
            $potong2 = substr($datum->waktu, 0, -6);
            if ($potong2 < $limit2[0]) {
                $jadi[] = array('waktu' => $datum->waktu, 'waktu_id' => $datum->waktu_id,);
            }
        }

        return response()->json($jadi);//then sent this data to ajax success

    }

    public function findstudio(Request $request)
    {
        //if our chosen id and products table prod_cat_id col match the get first 100 data

        //$request->id here is the id of our chosen option id
        $studio = studio::where('id', 1)->first();
        $list = list_time::all();
        $histori = HistoryTimeStudio::all();
        $limit = array();
        $limit2 = array();
        $data = array();
        if (function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
        $date1 = date('Y-m-d H:i:s');
        $datadate = date_create($date1);
        $datadate2 = date_create($date1);
        date_add($datadate, date_interval_create_from_date_string('1 days'));
        $a = date_format($datadate, 'Y-m-d H:i:s');
        $c = date_format($datadate2, 'Y-m-d H:i:s');
        $date = substr($c, 0, -9);
        $year = substr($c, 0, -15);
        $month = substr($c, 5, -12);
        $day = substr($c, 8, -9);
        $year2 = substr($a, 0, -15);
        $month2 = substr($a, 5, -12);
        $day2 = substr($a, 8, -9);
        $date2 = substr($a, 0, -9);
        foreach ($histori as $h) {
            $dax = substr($h->waktu, 8, -9);
            $yex = substr($h->waktu, 0, -15);
            $mhx = substr($h->waktu, 5, -12);
            if ($dax == $day && $mhx == $month && $yex == $year && $h->studio_id == $request->id) {
                if ($h->status == 'start' || $h->status == 'middle') {
                    $limit[] = substr($h->waktu, 11, -6);
                }
            }
            if ($dax == $day2 && $mhx == $month2 && $yex == $year2) {
                if ($h->status == 'start' || $h->status == 'middle') {
                    $limit2[] = substr($h->waktu, 11, -6);
                }
            }
        }
        sort($limit2);
        sort($limit);

        foreach ($list as $a) {
            $b = substr($a->waktu, 0, -6);
            foreach ($histori as $h) {
                $d = substr($h->waktu, 8, -9);
                $c = substr($h->waktu, 11, -6);
                $ex = substr($h->waktu, 0, -15);
                $hx = substr($h->waktu, 5, -12);
                if ($d == $day && $month == $hx && $year == $ex && $h->studio_id == $request->id) {
                    if ($h->status == 'start' && $b == $c || $h->status == 'middle' && $b == $c) {
                        //                        <option value="$a->id " disabled>$a->waktu &nbsp;WIB
//    </option>
                        $data[] = array('waktu' => $a->waktu, 'id_studio' => $a->id . ' ' . $request->id, 'status' => 0);
                    }
                }
            }
            if (in_array($b, $limit) || $b == 22) {
            } else {
                $data[] = array('waktu' => $a->waktu, 'id_studio' => $a->id . ' ' . $request->id, 'status' => 1);
            }
        }
        return response()->json($data);
    }

    public function findstudio2(Request $request)
    {
        //if our chosen id and products table prod_cat_id col match the get first 100 data

        //$request->id here is the id of our chosen option id
        $list = list_time::all();
        $histori = HistoryTimeStudio::all();
        $limit = array();
        $limit2 = array();
        $data = array();
        if (function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
        $date1 = date('Y-m-d H:i:s');
        $datadate = date_create($date1);
        $datadate2 = date_create($date1);
        date_add($datadate, date_interval_create_from_date_string('1 days'));
        $a = date_format($datadate, 'Y-m-d H:i:s');
        $c = date_format($datadate2, 'Y-m-d H:i:s');
        $date = substr($c, 0, -9);
        $year = substr($c, 0, -15);
        $month = substr($c, 5, -12);
        $day = substr($c, 8, -9);
        $year2 = substr($a, 0, -15);
        $month2 = substr($a, 5, -12);
        $day2 = substr($a, 8, -9);
        $date2 = substr($a, 0, -9);

        foreach ($histori as $h) {
            $dax = substr($h->waktu, 8, -9);
            $yex = substr($h->waktu, 0, -15);
            $mhx = substr($h->waktu, 5, -12);
            if ($dax == $day && $mhx == $month && $yex == $year && $h->studio_id == $request->id) {
                if ($h->status == 'start' || $h->status == 'middle') {
                    $limit[] = substr($h->waktu, 11, -6);
                }
            }
            if ($dax == $day2 && $mhx == $month2 && $yex == $year2 && $h->studio_id == $request->id) {
                if ($h->status == 'start' || $h->status == 'middle') {
                    $limit2[] = substr($h->waktu, 11, -6);
                }
            }
        }
        sort($limit2);
        sort($limit);

        foreach ($list as $a) {
            $b = substr($a->waktu, 0, -6);
            foreach ($histori as $h) {
                $d = substr($h->waktu, 8, -9);
                $c = substr($h->waktu, 11, -6);
                $ex = substr($h->waktu, 0, -15);
                $hx = substr($h->waktu, 5, -12);
                if ($d == $day2 && $month2 == $hx && $year2 == $ex && $h->studio_id == $request->id) {
                    if ($h->status == 'start' && $b == $c || $h->status == 'middle' && $b == $c) {
                        //                        <option value="$a->id " disabled>$a->waktu &nbsp;WIB
//    </option>
                        $data[] = array('waktu' => $a->waktu, 'id_studio' => $a->id . ' ' . $request->id, 'status' => 0);
                    }
                }
            }
            if (in_array($b, $limit2) || $b == 22) {
            } else {
                $data[] = array('waktu' => $a->waktu, 'id_studio' => $a->id . ' ' . $request->id, 'status' => 1);
            }
        }

        return response()->json($data);


    }

    public function konfirmasi(Request $request)
    {
//        get data
        $a = $request->all();
        $member = User::where('id', Auth::user()->id)->first();
        $studio = studio::where('id', $request->studio_id)->first();

//        get id time
        $post = strpos($request->waktu_mulai, ' ');
        $count = strlen($request->waktu_mulai);
        $ambil = $post - $count;
        $waktuid = substr($request->waktu_mulai, 0, $ambil);
        $time = list_time::where('id', $waktuid)->first();

//        set data
        $deskripsi = $request->deskripsi;
        $waktu_mulai = $time->waktu;
        $waktu_habis = $request->waktu_habis;
        $total_waktu = substr($waktu_habis, 0, -6) - substr($waktu_mulai, 0, -6);
        $harga = $studio->harga_studio * $total_waktu;
        $date = $request->date;
        $studio_id = $request->studio_id;


        return view('user.order_studio.konfirmasi', compact('studio', 'member', 'deskripsi', 'waktu_mulai', 'waktu_habis', 'total_waktu', 'harga', 'date', 'studio_id'
        ));
    }

    public function pembayaran(Request $request)
    {
        $order_id = $request->order_id;
        $order = order_studio::where('order_id', $order_id)->first();
        $tanggal2 = $request->tanggal2;
        return view('user.order_studio.pembayaran', compact('order_id', 'tanggal2', 'order'));
    }

    public function tosukses(Request $request)
    {
        $a = $request->all();
        $a['member_id'] = Auth::user()->id;
        if ($request->diskripsi == null) {
    $a['diskripsi']='kosong';
        }
        if (function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
        $date1 = date('Y-m-d');
        $datadate = date_create($date1);
        $a['tanggal_pembayaran']= $date1;
        $a['bukti_pembayaran'] = null;
        $fillnames = md5($request->order_id);

        if ($request->hasFile('bukti_pembayaran')) {
            $input['bukti_pembayaran'] = '/upload/pembayaran/' . str_slug($fillnames, '-') . '.' . $request->bukti_pembayaran->getClientOriginalExtension();
            $request->bukti_pembayaran->move(public_path('/upload/pembayaran/'), $input['bukti_pembayaran']);
        }
konfirmasi_pembayaran::create($a);
        dd($a);
//        return redirect()->route('user.proses-studio', compact('tanggal', 'tanggal2', 'order_id'));

    }

    public function coba()
    {
        $str = '231 2334';
        $post = strpos($str, ' ');
        $count = strlen($str);
        $ambil = $post - $count;
        $cut = substr($str, 0, $ambil);
        dd(strlen($str), $post, $ambil, $cut);
        $histori = HistoryTimeStudio::all();
        $limit = array();

        if (function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
        $date1 = date('Y-m-d H:i:s');
        $datadate = date_create($date1);
        $datadate2 = date_create($date1);
        date_add($datadate, date_interval_create_from_date_string('1 days'));
        $a = date_format($datadate, 'Y-m-d H:i:s');
        $c = date_format($datadate2, 'Y-m-d H:i:s');
        $date = substr($c, 0, -9);
        $year = substr($c, 0, -15);
        $month = substr($c, 5, -12);
        $day = substr($c, 8, -9);
        $year2 = substr($a, 0, -15);
        $month2 = substr($a, 5, -12);
        $day2 = substr($a, 8, -9);
        $date2 = substr($a, 0, -9);
//        $stu = substr($request->id, strpos($request->id, " ") + 1);
        $stu = 2;
        $ids = 4;

        foreach ($histori as $h) {
            $dax = substr($h->waktu, 8, -9);
            $yex = substr($h->waktu, 0, -15);
            $mhx = substr($h->waktu, 5, -12);
            if ($dax == $day2 && $mhx == $month2 && $yex == $year2 && $h->studio_id == $stu) {
                if ($h->status == 'end' || $h->status == 'middle') {
                    $limit[] = substr($h->waktu, 11, -6);
                }
            }
        }

        sort($limit);

        $range = count($limit);
        $data = ListTime2::where('waktu_id', $ids)->take(100)->get();
        $data3 = ListTime2::where('waktu_id', $ids)->first();
        $limit2 = array();
        for ($x = 0; $x < $range; $x++) {
            $azx = substr($data3->waktu, 0, -6);
            if ($azx < $limit[$x]) {
                $limit2[] = $limit[$x];
            }
        }
        if ($limit2 == null) {
            return response()->json($data);
        }
        $jadi = array();
        foreach ($data as $datum) {
            $potong2 = substr($datum->waktu, 0, -6);
            if ($potong2 < $limit2[0]) {
                $jadi[] = array('waktu' => $datum->waktu, 'waktu_id' => $datum->waktu_id,);
            }
        }

        dd($jadi);
    }


}
