<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Transaksi_View;
use App\Transaksi;
use Carbon\Carbon;
use App\Barang;
use App\User;
use App\Kerangjang;

class TransaksiController extends Controller
{
    public function index()
    {
        $data_transaksi_view = Transaksi_View::all();
        $data_barang = Barang::all();
        $data_user = User::all();
        $data_transaksi = Transaksi::all();
        return view('transaksi.index',['data_transaksi' => $data_transaksi, 'data_barang' => $data_barang, 'data_user' => $data_user, 'data_transaksi_view' => $data_transaksi_view]);
    }
   
    public function edit($id_transaksi)
    {
    	$transaksi = Transaksi::find($id_transaksi);
    	return view('transaksi/edit',['transaksi'=> $transaksi]); 
    } 
    
    public function create(Request $request)
    {
            $a = Barang::where('id', $request->id_barang)->first();
            $barang_harga = Barang::find($request->id_barang)
            // ->first()
            ->update(['stok_barang' => $a->stok_barang - $request->jumlah_beli]);
            dd($a);
            $transaksi = new Transaksi;
            $transaksi->id_barang = $request->id_barang;
            $transaksi->id_user = $request->id_user;
            $transaksi->jumlah_beli = $request->jumlah_beli;
            $transaksi->total_harga = $a->harga_barang * $request->jumlah_beli;
            $transaksi->tanggal_beli = Carbon::now()->timezone('Asia/Jakarta');
            $transaksi->save();
    
            return redirect('/transaksi')->with('sukses','Data Berhasil Di input');
    }

    public function update(Request $request, $transaksi)
    {
    	$transaksi = Transaksi::find($transaksi);
    	$transaksi->update($request->all());
    	return redirect('/transaksi*')->with('sukses','Data Berhasil Di Update');
    }

    public function delete($id_transaksi)
    {
    	$transaksi = Transaksi::find($id_transaksi);
        $transaksi -> delete($transaksi);
        return redirect('/transaksi')->with ('sukses', 'Data Berhasil Di Hapus');  
    }
}
