<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    //
    public function list() {
        return view('clients.list');
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
