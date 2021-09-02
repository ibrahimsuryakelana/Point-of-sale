<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merk;

class MerkController extends Controller
{
    public function index()
    {
        $data_merk = Merk::all();
        return view('merk.index',['data_merk' => $data_merk]);
    }
    public function create(Request $request)
    {
    	Merk::create($request->all());
    	
    	return redirect('/merk')->with('sukses','Data Berhasil Di input');
    }
    public function edit($id_merk)
    {
    	$merk = Merk::find($id_merk);
    	return view('merk/edit',['merk'=> $merk]); 
    }

    public function update(Request $request, $merk)
    {
    	$merk = Merk::find($merk);
    	$merk->update($request->all());
    	return redirect('/merk')->with('sukses','Data Berhasil Di Update');
    }

    public function delete($id_merk)
    {
    	$merk = Merk::find($id_merk);
        $merk -> delete($merk);
        return redirect('/merk')->with ('sukses', 'Data Berhasil Di Hapus');  
    }
}
