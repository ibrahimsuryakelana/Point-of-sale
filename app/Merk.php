<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $primaryKey='id';
    protected $table = 'merk';
    protected $fillable = ['id','merk'];

    public function merk()
    {
        return $this->hasMany(Merk::class);
    }
}
