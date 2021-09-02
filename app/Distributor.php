<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    protected $primaryKey='id';
    protected $table = 'distributor';
    protected $fillable = ['id','nama_distributor','alamat','no_telp'];

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
