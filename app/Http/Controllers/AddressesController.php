<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressesController extends Controller
{
    //
    public function list() {
        return view('addresses.list');
    }
    public function add() {
        return view('addresses.add');
    }
    public function addAction() {
        
    }
    public function edit() {
        return view('addresses.edit');
    }
    public function editAction() {
        
    }
    public function del() {
        
    } 
}
