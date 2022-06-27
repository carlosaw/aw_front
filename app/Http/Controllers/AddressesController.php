<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class AddressesController extends Controller
{   
    public function __construct() {
        $this->middleware('auth');
    }
    
    // INDEX
    public function list() {
        $list = Address::all();
        return view('addresses.list', [
            'list' => $list
        ]);
    }

    // CREATE
    public function add() {
        return view('addresses.add');
    }

    // STORE
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

            return redirect()->route('addresses.list')
            ->with('success', '✔ Endereço adicionado com sucesso!');
            
        } else {
            return redirect()
            ->route('addresses.add')
            ->with('warning', '⚡ Preencha todos os campos!')
            ->withInput();
        }
    }

    // EDIT
    public function edit($id) {
        $data = Address::find($id);

        if($data) {// Se tiver manda pra edit
            return view('addresses.edit', [
                'data' => $data// Manda o primeiro item
            ]);
        } else {// Senão retorna pra lista
            return redirect()->route('addresses.list');
        }
    
    }

    // UPDATE
    public function editAction(Request $request, $id) {
        // Pega os dados dos inputs
        if($request->filled('street_num', 'cep', 'district', 'city', 'state')) {
            $street_num = $request->input('street_num');
            $cep = $request->input('cep');
            $district = $request->input('district');
            $city = $request->input('city');
            $state = $request->input('state');

            Address::find($id)->update([
                'street_num' => $street_num,
                'cep' => $cep,
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
    
    // DESTROY
    public function del($id) {
        Address::find($id)->delete();
               
        return redirect()->route('addresses.list')
        ->with('danger', '❌ Endereço excluído com sucesso!');        
    }
    
}
