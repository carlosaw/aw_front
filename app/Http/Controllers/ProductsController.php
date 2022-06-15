<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function list() {
        $list = DB::select('SELECT * FROM products');

        return view('products.list', [
            'list' => $list
        ]);
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
