<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Client;

class ClientsController extends Controller
{
    //
    public function list() {
        $list = Client::all();
        return view('clients.list', [
            'list' => $list
        ]);
    }

    public function add() {
        return view('clients.add');
    }

    public function addAction(Request $request) {
        if($request->filled('name', 'cpf', 'fone', 'email')) {
            $name = $request->input('name');
            $cpf = $request->input('cpf');
            $fone = $request->input('fone');
            $email = $request->input('email');

            $a = new Client;
            $a->name = $name;
            $a->cpf = $cpf;
            $a->fone = $fone;
            $a->email = $email;
            $a->save();

            return redirect()->route('clients.list')
            ->with('success', '✔ Cliente adicionado com sucesso!');
            
        } else {
            return redirect()
            ->route('clients.add')
            ->with('warning', '⚡ Preencha todos os campos!');
        }
    }

    public function edit($id) {
        $data = Client::find($id);

        if($data) {// Se tiver manda pra edit
            return view('clients.edit', [
                'data' => $data// Manda o primeiro item
            ]);
        } else {// Senão retorna pra lista
            return redirect()->route('clients.list');
        } 
    }

    public function editAction(Request $request, $id) {
        if($request->filled('name')) { // Pega os inputs
            $name = $request->input('name');
            $cpf = $request->input('cpf');
            $fone = $request->input('fone');
            $email = $request->input('email');

            $a = new Client;
            $a->name = $name;
            $a->cpf = $cpf;
            $a->fone = $fone;
            $a->email = $email;
            $a->save();
            
            // Volta pra Lista 
            return redirect()->route('clients.list')
            ->with('success', '✔ Cliente atualizado com sucesso!');
            
        } else {
            return redirect()
            ->route('clients.edit', ['id' => $id])
            ->with('warning', '⚡ Não houve modificação!');;
        }
    }
    
    public function del($id) {
        DB::delete("DELETE FROM clients WHERE id = :id", [
            'id' => $id
        ]);
        // Volta pra Lista
        return redirect()->route('clients.list')
        ->with('danger', '❌ Cliente excluído com sucesso!');
        
    }

    // 
}
