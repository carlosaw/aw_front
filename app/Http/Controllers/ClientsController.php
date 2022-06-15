<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    //
    public function list() {
        $list = DB::select('SELECT * FROM clients');
        return view('clients.list', [
            'list' => $list
        ]);
    }
    public function add() {
        return view('clients.add');
    }
    public function addAction() {
        
    }
    public function edit() {
        return view('clients.edit'); 
    }
    public function editAction() {
        
    }
    public function del() {
        
    }
}
