<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distributor;

class DistributorController extends Controller
{
    public function index()
    {
        $data_distributor = Distributor::all();
        return view('distributor.index',['data_distributor' => $data_distributor]);
    }
    public function create(Request $request)
    {
    	Distributor::create($request->all());
    	
    	return redirect('/distributor')->with('sukses','Data Berhasil Di input');
    }
    public function edit($id_distributor)
    {
    	$distributor = Distributor::find($id_distributor);
    	return view('distributor/edit',['distributor'=> $distributor]); 
    }

    public function update(Request $request, $distributor)
    {
    	$distributor = Distributor::find($distributor);
    	$distributor->update($request->all());
    	return redirect('/distributor')->with('sukses','Data Berhasil Di Update');
    }

    public function delete($id_distributor)
    {
    	$distributor = Distributor::find($id_distributor);
        $distributor -> delete($distributor);
        return redirect('/distributor')->with ('sukses', 'Data Berhasil Di Hapus');  
    }
}
