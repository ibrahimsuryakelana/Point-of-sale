<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Exports\ManagerExport;
use App\Imports\ManagerImport;
use Maatwebsite\Excel\Facades\Excel;
  
class NyController extends Controller
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
        return Excel::download(new ManagerExport, 'LaporanTransaksi.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new ManagerImport,request()->file('file'));
           
        return back();
    }
}