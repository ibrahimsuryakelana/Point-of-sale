<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keranjang_view extends Model
{
    protected $primaryKey='id';
    protected $table = 'keranjang_view';
    protected $fillable = ['id','nama_barang','jumlah_beli','status','total_keseluruhan','kembalian'];
}
