<?php
  
namespace App\Exports;
  
use App\Manager_View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
  
class ManagerExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Manager_view::all();
    }
    public function headings(): array
    {
        return ['id','id_barang', 'Nama Barang', 'Jumlah Beli', 'Total Harga', 'Tanggal Beli','Created At','Update At' ];
    }
}
