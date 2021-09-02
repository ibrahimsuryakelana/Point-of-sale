<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager_view extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'manager_view';
    protected $fillable = ['id', 'id_barang', 'nama_barang','jumlah_beli','total_harga','tanggal_beli'];
}
