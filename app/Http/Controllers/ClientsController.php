<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    //
    public function list() {
        $list = DB::select('SELECT * FROM clients');
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

            DB::insert('INSERT INTO clients (name, cpf, fone, email)
            VALUES (:name, :cpf, :fone, :email)', [
                'name' => $name,
                'cpf' => $cpf,
                'fone' => $fone,
                'email' => $email
            ]);

            return redirect()->route('clients.list');
        } else {
            return redirect()
            ->route('clients.add')
            ->with('warning', 'Preencha todos os campos!');
        }
    }

    public function edit($id) {
        $data = DB::select('SELECT * FROM clients WHERE id = :id',[
            'id' => $id
        ]);

        if(count($data) > 0) {// Se tiver manda pra edit
            return view('clients.edit', [
                'data' => $data[0]// Manda o primeiro item
            ]);
        } else {// Senão retorna pra lista
            return redirect()->route('clients.list');
        } 
    }

    public function editAction() {
        
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
