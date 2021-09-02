<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Keranjang;
use App\Keranjang_view;
use App\Transaksi_View;
use App\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index()
    {
        $a = Keranjang::where('status', 'belum bayar')->first();

        if ($a == null){
            Keranjang::create([
                'status' => 'belum bayar',
                'total_keseluruhan' => 0,
                'kembalian' => 0,
                'tanggal' => Carbon::now()->format('Y-m-d')
            ]);

            $a = Keranjang::where('status', 'belum bayar')->first();
        }

        $data_keranjang = Transaksi_View::where('id_keranjang', $a->id)->get();
        
        $total = Transaksi_View::where('id_keranjang', $a->id)->sum('total_harga');

        $barangs = Barang::all();

        // dd($totall);
        return view('keranjang.index',['data_keranjang' => $data_keranjang , 'total' => $total, 'data_barang' => $barangs, 'a' => $a]);
    }
    public function create(Request $request)
    {
        $a = Barang::where('id', $request->id_barang)->first();
  
        if ($request->jumlah_beli > $a->stok_barang) {
            return redirect('/keranjang')->with('error','Stok Tidak Mencukupi, hanya tersedia : '. $a->stok_barang);
        }
        elseif ($request->jumlah_beli <= 0 ) {
            return redirect('/keranjang')->with('error','Harap isi dengan benar, pembelian minimal satu');
        }
        $barang_harga = Barang::find($request->id_barang)
        ->update(['stok_barang' => $a->stok_barang - $request->jumlah_beli]);

        $keranjang = new Transaksi;
        $keranjang->id_barang = $request->id_barang;
        $keranjang->id_keranjang = $request->id_keranjang;
        $keranjang->jumlah_beli = $request->jumlah_beli;
        $keranjang->total_harga = $a->harga_barang * $request->jumlah_beli;
        $keranjang->tanggal_beli = Carbon::now()->timezone('Asia/Jakarta');
        $keranjang->save();
    	
    	return redirect('/keranjang')->with('sukses','Barang berhasil di Tambahkan');
    }
    public function edit($id_keranjang)
    {
    	$keranjang = Keranjang::find($id_keranjang);
    	return view('keranjang/edit',['keranjang'=> $keranjang]); 
    }

    public function update(Request $request, $keranjang)
    {
    	$keranjang = Keranjang::find($keranjang);
    	$keranjang->update($request->all());
    	return redirect('/keranjang')->with('sukses','Data Berhasil Di Update');
    }

    public function delete($id)
    {
        $keranjang = Transaksi::find($id);
        // dd($keranjang);
        $a = Barang::find($keranjang->id_barang);

        Barang::find($keranjang->id_barang)->update([
            'stok_barang' => $keranjang->jumlah_beli + $a->stok_barang
        ]);

        $k = Transaksi::find($id);
        $k->delete();
        return redirect('/keranjang')->with ('sukses', 'Data Berhasil Di Hapus');  
    }

    public function bayar(Request $request, $id)
    {
        if ($request->uang < $request->totalll) {
            return redirect('/keranjang')->with('errorr','Uang Tidak Mencukupi');
        }
        elseif ($request->uang <= 0 ) {
            return redirect('/keranjang')->with('errorr','Harap isi dengan benar, uang harus diatas harga pembelian');
        }
        $a = Keranjang::find($id)->update([
            'total_keseluruhan' => $request->totalll,
            'kembalian' => ($request->uang - $request->totalll),
            'status' => 'bayar',
            'tanggal' => Carbon::now()
        ]);        

        return redirect('/keranjang')->with('sukses', 'Transaksi Sukses. Kembalian = '.($request->uang - $request->totalll));
    }

}
