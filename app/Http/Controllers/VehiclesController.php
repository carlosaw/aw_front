<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    //
    public function list() {
        $list = DB::select('SELECT * FROM vehicles');

        return view('vehicles.list', [
            'list' => $list
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

            DB::insert('INSERT INTO vehicles (plate, brand, model, color, year, km)
            VALUES (:plate, :brand, :model, :color, :year, :km)', [
                'plate' => $plate,
                'brand' => $brand,
                'model' => $model,
                'color' => $color,
                'year' => $year,
                'km' => $km
            ]);
            
            return redirect()
            ->route('vehicles.list')
            ->with('success', 'Veículo adicionado com sucesso!');;
        } else {
            return redirect()
            ->route('vehicles.add')
            ->with('warning', 'Preencha todos os campos!');
        }
    }

    public function edit($id) {
        $data = DB::select('SELECT * FROM vehicles WHERE id = :id',[
            'id' => $id
        ]);

        if(count($data) > 0) {// Se tiver manda pra edit
            return view('vehicles.edit', [
                'data' => $data[0]// Manda o primeiro item
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
            DB::update('UPDATE vehicles SET plate = :plate, brand = :brand, model = :model, color = :color, year = :year, km = :km WHERE id = :id', [
                'id' => $id,
                'plate' => $plate,
                'brand' => $brand,
                'model' => $model,
                'color' => $color,
                'year' => $year,
                'km' => $km
            ]);
            // Volta pra lista
            return redirect()
            ->route('vehicles.list')
            ->with('success', 'Veículo editado com sucesso!');
        } else {
            return redirect()
            ->route('vehicles', ['id' => $id])
            ->with('warning', 'Preencha todos os campos!');
        }
    }

    public function del($id) {
        DB::delete("DELETE FROM vehicles WHERE id = :id", [
            'id' => $id
        ]);
        // Volta pra Lista
        return redirect()
        ->route('vehicles.list')
        ->with('success', 'Veículo excluído com sucesso!');
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
