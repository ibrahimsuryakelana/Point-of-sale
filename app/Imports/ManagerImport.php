<?php
   
namespace App\Imports;
   
use App\Manager;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
    
class ManagerImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Manager([
            'id'=> $row['id'],
            'nama_barang'=> $row['nama_barang'], 
            'id_merek' => $row['id_merek'], 
            'id_distributor' => $row['id_distributor'], 
            'id_tanggal_masuk' => $row['id_tanggal_masuk'], 
            'harga_barang' => $row['harga_barang'], 
            'stok_barang' => $row['stok_barang'], 
            'keterangan' => $row['keterangan'],
        ]);
    }
}