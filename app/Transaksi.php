<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $primaryKey='id';
    protected $table = 'transaksi';
    protected $fillable = ['id','id_barang','id_user','jumlah_beli','total_harga','tanggal_beli'];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
