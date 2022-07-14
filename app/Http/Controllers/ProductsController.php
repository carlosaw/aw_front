<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{   
    public function __construct() {
        $this->middleware('auth');
    }
    
    //
    public function list() {
        $search = request('search');
        if($search) {
            $list = Product::where([
                ['name', 'like', '%'.$search.'%']
            ])->get();           
        } else {
            $list = Product::paginate(16);
        }
        
        //dd($list);
        return view('products.list', [
            'list' => $list,
            'search' => $search
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

            $p = new Product();
            
            $p->name = $name;
            $p->value_unit = $value_unit;
            $p->quantity = $quantity;
            $p->discount = $discount;
            $p->total = $total;
            $p->save();

            return redirect()->route('products.list')
            ->with('success', '✔ Produto adicionado com sucesso!');
            
        } else {
            return redirect()
            ->route('products.add')
            ->with('warning', '⚡ Preencha todos os campos!');
        }
    }

    public function edit($id) {
        $data = Product::find($id);

        if($data) {// Se tiver manda pra edit
            return view('products.edit', [
                'data' => $data// Manda o primeiro item
            ]);
        } else {// Senão retorna pra lista
            return redirect()->route('products.list');
        } 
    }

    public function editAction(Request $request, $id) {
        if($request->filled('name')) {// Pega os inputs
            $name = $request->input('name');
            $value_unit = $request->input('value_unit');
            $quantity = $request->input('quantity');
            $discount = $request->input('discount');
            $total = $request->input('total');

            // Muda no banco
            Product::find($id)->update([
                'name' => $name,
                'value_unit' => $value_unit,
                'quantity' => $quantity,
                'discount' => $discount,
                'total' => $total
            ]);

            // Volta pra Lista
            return redirect()->route('products.list')
            ->with('success', '✔ Produto atualizado com sucesso!');
            
        } else {
            return redirect()
            ->route('products.edit', ['id' => $id])
            ->with('warning', '⚡ Preencha todos os campos!');
        }
    }

    public function del($id) {
        Product::find($id)->delete();
        // Volta pra Lista
        return redirect()->route('products.list')
        ->with('danger', '❌ Produto excluído com sucesso!');        
    }

}
