<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi_View extends Model
{
    protected $primaryKey='id';
    protected $table = 'transaksi_view';
    protected $fillable = ['id','id_barang','nama_barang','jumlah_beli','harga_barang','tanggal_beli'];
}
