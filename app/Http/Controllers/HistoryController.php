<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Barang;
use App\Pesanan;
use App\User;
use App\PesananDetail;
use Illuminate\Support\Facades\DB;
use Alert;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        // $pesanans = Pesanan::find('user_id');
        // $pesanan = Pesanan::where('user_id'::user()->id)->where('status', '!=',0)->get();

        $id = Auth::id();
        $pesanans = DB::table('pesanans')->where('user_id',  $id)->get();
        return view('history.index', compact('pesanans'));


    }

    public function detail($id)
    {
    	$pesanan = Pesanan::where('id', $id)->first();
    	$pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

     	return view('history.detail', compact('pesanan','pesanan_details'));
    }
}
