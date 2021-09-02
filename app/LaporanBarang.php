<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanBarang extends Model
{
    protected $primaryKey='id';
    protected $table = 'barang';
    protected $fillable = ['id','nama_barang','id_merek','id_distributor','tanggal_masuk','harga_barang','stok_barang','keterangan'];

}
