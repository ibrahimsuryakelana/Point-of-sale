<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan_Barang_View extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'laporan_barang_view';
    protected $fillable = ['id','nama_barang','id_merek','id_distributor','tanggal_masuk','harga_barang','stok_barang','keterangan'];
}
