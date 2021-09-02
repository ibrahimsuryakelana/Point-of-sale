<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use Carbon\Carbon;
use App\Merk;
use App\Distributor;

class BarangController extends Controller
{
    public function index()
    {
        $data_merk = Merk::all();
        $data_distributor = Distributor::all();
        $data_barang = Barang::all();
        return view('barang.index',['data_barang' => $data_barang, 'data_merk' => $data_merk, 'data_distributor' => $data_distributor]);
    }
    public function create(Request $request)
    {
    	Barang::create($request->all());
    	return redirect('/barang')->with('sukses','Data Berhasil Di input');
    }
    
    public function edit($id_barang)
    {
        $data_merk = Merk::all();
    	$barang = Barang::find($id_barang);
    	return view('barang/edit',['barang'=> $barang, 'data_merk' => $data_merk]); 
    }

    public function update(Request $request, $barang)
    {
    	$barang = Barang::find($barang);
    	$barang->update($request->all());
    	return redirect('/barang')->with('sukses','Data Berhasil Di Update');
    }

    public function delete($id_barang)
    {
    	$barang = Barang::find($id_barang);
        $barang -> delete($barang);
        return redirect('/barang')->with ('sukses', 'Data Berhasil Di Hapus');  
    }
}
