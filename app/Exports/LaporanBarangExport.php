<?php
  
namespace App\Exports;
  
use App\LaporanBarang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
  
class LaporanBarangExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return LaporanBarang::all();
    }
    public function headings(): array
    {
        return ['id', 'Nama Barang', 'Id Merek', 'Id Distributor', 'Tanggal Masuk','Harga Jual Barang ','Harga Beli Barang', 'Stok Barang', 'Keterangan','Created At','Update At' ];
    }
}
