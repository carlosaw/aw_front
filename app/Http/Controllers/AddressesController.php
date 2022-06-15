<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AddressesController extends Controller
{
    //
    public function list() {
        $list = DB::select('SELECT * FROM addresses');

        return view('addresses.list', [
            'list' => $list
        ]);
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
