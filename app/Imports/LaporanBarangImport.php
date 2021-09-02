<?php
   
namespace App\Imports;
   
use App\LaporanBarang;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
    
class LaporanBarangImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new LaporanBarang([
            'id'=> $row['id'],
            'nama_barang'=> $row['nama_barang'], 
            'merek' => $row['merek'], 
            'distributor' => $row['distributor'], 
            'tanggal_masuk' => $row['tanggal_masuk'], 
            'harga_barang' => $row['harga_barang'], 
            'harga_beli' => $row['harga_beli'], 
            'stok_barang' => $row['stok_barang'], 
            'keterangan' => $row['keterangan'],
        ]);
    }
}