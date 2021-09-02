<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $primaryKey='id';
    protected $table = 'barang';
    protected $fillable = ['id','nama_barang','id_merek','id_distributor','tanggal_masuk','harga_barang','harga_beli', 'stok_barang','keterangan'];

    public function barang()
    {                        //buat nampilin id
        return $this->hasMany(Barang::class);
    }
    public function merk()
    {                 //buat nampilin namanya bukan id
        return $this->hasOne('App\Merk', 'id', 'id_merek');
    }

    public function distributor()
    {
        return $this->hasOne('App\Distributor', 'id', 'id_distributor');
    }
    public function manager()
    {                 //buat nampilin namanya bukan id
        return $this->hasOne('App\Barang', 'id', 'id_barang');
    }
}
