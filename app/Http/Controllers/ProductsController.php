<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function list() {
        return view('products.list');
    }
    public function add() {
        return view('products.add');
    }
    public function addAction() {
        
    }
    public function edit() {
        return view('products.edit');
    }
    public function editAction() {
        
    }
    public function del() {
        
    }
}
