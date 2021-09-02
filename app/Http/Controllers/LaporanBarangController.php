<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Transaksi_view;

class LaporanBarangController extends Controller
{
    public function index()
    {
        $data_barang = Barang::all();
        return view('laporanbarang.index',['data_barang' => $data_barang]);
    }
}
