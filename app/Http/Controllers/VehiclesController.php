<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    //
    public function list() {
        return view('vehicles.list');
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
