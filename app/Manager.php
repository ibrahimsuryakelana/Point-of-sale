<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $primaryKey='id';
    protected $table = 'transaksi';
    protected $fillable = ['id','id_barang','id_user','jumlah_beli','total_harga','tanggal_beli'];
}
