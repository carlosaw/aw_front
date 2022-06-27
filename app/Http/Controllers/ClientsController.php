<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientsController extends Controller
{   
    public function __construct() {
        $this->middleware('auth');
    }
    
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

            $c = new Client;
            $c->name = $name;
            $c->cpf = $cpf;
            $c->fone = $fone;
            $c->email = $email;
            $c->save();

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

            // 
            Client::find($id)->update([
                'name' => $name,
                'cpf' => $cpf,
                'fone' => $fone,
                'email' => $email
            ]);
            
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
        Client::find($id)->delete();
        // Volta pra Lista
        return redirect()->route('clients.list')
        ->with('danger', '❌ Cliente excluído com sucesso!');
        
    }

    // 
}
