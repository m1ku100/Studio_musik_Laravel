<?php

namespace App\Http\Controllers\User;

use App\HistoryTimeStudio;
use App\Http\Controllers\Controller;
use App\list_time;
use App\order;
use App\order_studio;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showSchedule()
    {
        $now = Carbon::now()/*->addDays(4)->format('D')*/
        ;
//        dd($now);
        $history = order_studio::all();
        $list = list_time::all();

        $data = array();
        $data2 = array();
        foreach ($history as $hs) {
            $data[] = array(
                'tanggal' => Carbon::createFromFormat('Y-m-d H:i:s', $hs->waktu_mulai)->toDateString(),
                'awal' => Carbon::createFromFormat('Y-m-d H:i:s', $hs->waktu_mulai)->format('H:i'),
                'habis' => Carbon::createFromFormat('Y-m-d H:i:s', $hs->waktu_habis)->format('H:i'),
                'hari' => Carbon::createFromFormat('Y-m-d H:i:s', $hs->waktu_mulai)->format('D'), 'id' => $hs->id);
            $a = order::find($hs->order_id);
            $b = User::find($a->user_id);
            $data2[] = array('name' => $b->name, 'band' => $b->nama_band);
        }

        $jumlah = count($data);

        return view('user.order_studio.schedule', compact('now', 'history', 'list', 'data2', 'data', 'jumlah'));
    }
}
