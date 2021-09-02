<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Exports\LaporanBarangExport;
use App\Imports\LaporanBarangImport;
use Maatwebsite\Excel\Facades\Excel;
  
class MyController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('import');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new LaporanBarangExport, 'laporanBarang.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new LaporanBarangImport,request()->file('file'));
           
        return back();
    }
}