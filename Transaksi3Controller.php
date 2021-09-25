<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi3;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class Transaksi3Controller extends Controller
{
    public function show()
    {
        $data = DB::table('transaksi3')
            ->join('pelanggan3', 'transaksi3.id_pelanggan3', '=', 'pelanggan3.id_pelanggan3')
            ->join('petugas3', 'transaksi3.id_petugas3', '=', 'petugas3.id_petugas3')
            ->select('transaksi3.id_pelanggan3', 'transaksi3.id_petugas3', 'transaksi3.tgl_transaksi')
            ->get();
        return Response()->json($data);
    }

    public function store(Request $request)
    {
    $validator=Validator::make($request->all(),
    [
    'id_pelanggan3' => 'required',
    'id_petugas3' => 'required',
    ]
    );
    if($validator->fails()) {
    return Response()->json($validator->errors());
    }
    $simpan = Transaksi3::create([
    'id_pelanggan3' => $request->id_pelanggan3,
    'id_petugas3' => $request->id_petugas3,
    'tgl_transaksi' => date("Y-m-d")
    ]);

    if($simpan) {
    return Response()->json(['status'=>1]);
    }
    else {
    return Response()->json(['status'=>0]);
    }
    }
}
