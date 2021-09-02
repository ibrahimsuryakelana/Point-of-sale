<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manager;
use App\Manager_View; 

class ManagerController extends Controller
{
    public function index()
    {
        $data_manager = Manager::all();
        $data_manager_view = Manager_View::all();
        return view('manager.index',['data_manager' => $data_manager, 'data_manager_view' => $data_manager_view]);
    }
}
