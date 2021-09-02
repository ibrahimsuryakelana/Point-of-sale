<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $primaryKey='id';
    protected $table = 'keranjang';
    protected $fillable = ['id','id_barang','jumlah_beli','status','total_keseluruhan','kembalian', 'tanggal'];

    public function barang()
{
    return $this->hasOne('App\Barang', 'id', 'id_barang');
}

}

