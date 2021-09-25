<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk3;
use Illuminate\Support\Facades\Validator;

class Produk3Controller extends Controller
{
    public function show()
    {
       return Produk3::all();
    }

    public function store(Request $request)
 {
 $validator=Validator::make($request->all(),
 [
 'nama_produk' => 'required',
 'deskripsi' => 'required',
 'harga' => 'required',
 'foto_product' => 'required'
 ]
 );
 if($validator->fails()) {
 return Response()->json($validator->errors());
 }
 $simpan = Produk3::create([
 'nama_produk' => $request->nama_produk,
 'deskripsi' => $request->deskripsi,
 'harga' => $request->harga,
 'foto_product' => $request->foto_product
 ]);
 if($simpan) {
 return Response()->json(['status'=>1]);
 }
 else {
 return Response()->json(['status'=>0]);
 }
 }
}
