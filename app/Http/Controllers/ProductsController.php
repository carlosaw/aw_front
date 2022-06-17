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

    public function addAction(Request $request) {
        if($request->filled('name', 'value_unit', 'quantity', 'discount', 'total')) {
            $name = $request->input('name');
            $value_unit = $request->input('value_unit');
            $quantity = $request->input('quantity');
            $discount = $request->input('discount');
            $total = $request->input('total');

            DB::insert('INSERT INTO products (name, value_unit, quantity, discount, total)
            VALUES (:name, :value_unit, :quantity, :discount, :total)', [
                'name' => $name,
                'value_unit' => $value_unit,
                'quantity' => $quantity,
                'discount' => $discount,
                'total' => $total
            ]);
            
            return redirect()
            ->route('products.list')
            ->with('success', 'Produto adicionado com sucesso!');
        } else {
            return redirect()
            ->route('products.add')
            ->with('warning', 'Preencha todos os campos!');
        }
    }

    public function edit($id) {
        $data = DB::select('SELECT * FROM products WHERE id = :id',[
            'id' => $id
        ]);

        if(count($data) > 0) {// Se tiver manda pra edit
            return view('products.edit', [
                'data' => $data[0]// Manda o primeiro item
            ]);
        } else {// Senão retorna pra lista
            return redirect()->route('products.list');
        } 
    }

    public function editAction(Request $request, $id) {
        if($request->filled('name')) {
            $name = $request->input('name');
            $value_unit = $request->input('value_unit');
            $quantity = $request->input('quantity');
            $discount = $request->input('discount');
            $total = $request->input('total');

            $data = DB::select('SELECT * FROM products WHERE id = :id', [
                'id' => $id
            ]);
    
            if(count($data) > 0) {// Se tiver manda pra edit
                DB::update('UPDATE products SET name = :name, value_unit = :value_unit, quantity = :quantity, discount = :discount, total = :total WHERE id = :id', [
                    'id' => $id,
                    'name' => $name,
                    'value_unit' => $value_unit,
                    'quantity' => $quantity,
                    'discount' => $discount,
                    'total' => $total
                ]);
            }
            return redirect()
            ->route('products.list')
            ->with('success', 'Produto editado com sucesso!!');
        } else {
            return redirect()
            ->route('products.edit', ['id' => $id])
            ->with('warning', 'Preencha todos os campos!');
        }
    }

    public function del() {
        
    }

    public function store(Request $request){
        $data = $request->all();
        if(!empty($data['titulo'])){
            $tarefa = $this->tarefa->create($data);
            return redirect()->route('tarefas.index')->with('success', 'Registro salvo');
        } else {
            return redirect()->route('tarefas.create')->with('warning', 'Campos obrigatórios');
        }
    }
}
