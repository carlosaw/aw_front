<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    //
    public function list() {
        $list = DB::select('SELECT * FROM vehicles');

        return view('vehicles.list', [
            'list' => $list
        ]);
    }
    public function add() {
        return view('vehicles.add');
    }
    public function addAction() {
        
    }
    public function edit() {
        return view('vehicles.edit');
    }
    public function editAction() {
        
    }
    public function del() {
        
    }
}
