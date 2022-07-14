<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class VehiclesController extends Controller
{   
    public function __construct() {
        $this->middleware('auth');
    }
    
    //
    public function list() {
        $search = request('search');
        if($search) {
            $list = Vehicle::where([
                ['plate', 'like', '%'.$search.'%']
            ])->get();           
        } else {
            $list = Vehicle::paginate(16);
        }
        
        //dd($list);
        return view('vehicles.list', [
            'list' => $list,
            'search' => $search
        ]);
    }

    public function add() {
        return view('vehicles.add');
    }

    public function addAction(Request $request) {
        if($request->filled('plate', 'brand', 'model', 'color', 'year', 'km')) {
            $plate = $request->input('plate');
            $brand = $request->input('brand');
            $model = $request->input('model');
            $color = $request->input('color');
            $year = $request->input('year');
            $km = $request->input('km');

            $v = new Vehicle();
            $v->plate = $plate;
            $v->brand = $brand;
            $v->model = $model;
            $v->color = $color;
            $v->year = $year;
            $v->km = $km;
            $v->save();
            
            return redirect()->route('vehicles.list')
            ->with('success', '✔ Veículo adicionado com sucesso!');
            
        } else {
            return redirect()
            ->route('vehicles.add')
            ->with('warning', '⚡ Preencha todos os campos!');
        }
    }

    public function edit($id) {
        $data = Vehicle::find($id);

        if($data) {// Se tiver manda pra edit
            return view('vehicles.edit', [
                'data' => $data// Manda o primeiro item
            ]);
        } else {// Senão retorna pra lista
            return redirect()->route('vehicles.list');
        } 
    }

    public function editAction(Request $request, $id) {
        if($request->filled('plate')) {// Pega tudo
            $plate = $request->input('plate');
            $brand = $request->input('brand');
            $model = $request->input('model');
            $color = $request->input('color');
            $year = $request->input('year');
            $km = $request->input('km');

            // Muda no banco
            Vehicle::find($id)->update([
                'plate' => $plate,
                'brand' => $brand,
                'model' => $model,
                'color' => $color,
                'year' => $year,
                'km' => $km
            ]);

            // Volta pra lista
            return redirect()->route('vehicles.list')
            ->with('success', '✔ Veículo atualizado com sucesso!');
            
        } else {
            return redirect()
            ->route('vehicles', ['id' => $id])
            ->with('warning', '⚡ Preencha todos os campos!');
        }
    }

    public function del($id) {
        Vehicle::find($id)->delete();
        
        // Volta pra Lista
        return redirect()->route('vehicles.list')
        ->with('danger', '❌ Veículo excluído com sucesso!');
    }
      
}