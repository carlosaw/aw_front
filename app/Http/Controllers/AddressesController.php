<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Address;

class AddressesController extends Controller
{
    //
    public function list() {
        $list = Address::all();
        return view('addresses.list', [
            'list' => $list
        ]);
    }

    public function add() {
        return view('addresses.add');
    }

    public function addAction(Request $request) {
        if($request->filled('street_num', 'cep', 'district', 'city', 'state')) {
            $street_num = $request->input('street_num');
            $cep = $request->input('cep');
            $district = $request->input('district');
            $city = $request->input('city');
            $state = $request->input('state');

            $a = new Address;
            $a->street_num = $street_num;
            $a->cep = $cep;
            $a->district = $district;
            $a->city = $city;
            $a->state = $state;
            $a->save();
            
            // DB::insert('INSERT INTO addresses (street_num, cep, district, city, state)
            // VALUES (:street_num, :cep, :district, :city, :state)', [
            //     'street_num' => $street_num,
            //     'cep' => $cep,
            //     'district' => $district,
            //     'city' => $city,
            //     'state' => $state
            // ]);

            return redirect()->route('addresses.list')
            ->with('success', '✔ Endereço adicionado com sucesso!');
            
        } else {
            return redirect()
            ->route('addresses.add')
            ->with('warning', '⚡ Preencha todos os campos!')
            ->withInput();
        }
    }
    public function edit($id) {
        $data = DB::select('SELECT * FROM addresses WHERE id = :id',[
            'id' => $id
        ]);

        if(count($data) > 0) {// Se tiver manda pra edit
            return view('addresses.edit', [
                'data' => $data[0]// Manda o primeiro item
            ]);
        } else {// Senão retorna pra lista
            return redirect()->route('addresses.list');
        }
    
    }

    public function editAction(Request $request, $id) {
        if($request->filled('street_num')) {// Pega os inputs
            $street_num = $request->input('street_num');
            $cep = $request->input('cep');
            $district = $request->input('district');
            $city = $request->input('city');
            $state = $request->input('state');

            // Muda no banco
            DB::update('UPDATE addresses SET street_num = :street_num, cep = :cep, district = :district, city = :city, state = :state
                WHERE id = :id', [
                'id' => $id,
                'street_num' => $street_num,
                'cep'  => $cep,
                'district' => $district,
                'city' => $city,
                'state' => $state
            ]);
            // Volta pra lista
            return redirect()->route('addresses.list')
            ->with('success', '✔ Endereço atualizado com sucesso!');
            
        } else {
            return redirect()
            ->route('addresses.edit', ['id' => $id])
            ->with('warning', '⚡ Preencha todos os campos!');
        }
    }

    public function del($id) {
        DB::delete("DELETE FROM addresses WHERE id = :id", [
            'id' => $id
        ]);
        // Volta pra Lista
        return redirect()->route('addresses.list')
        ->with('danger', '❌ Endereço excluído com sucesso!');
        
    }
    
}
