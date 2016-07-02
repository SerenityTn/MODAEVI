<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cliente;

class ClientesController extends Controller{
    public function index(){
        $clientes = Cliente::latest()->get();
        return view('clientes.index', compact("clientes"));
    }

    public function create(){
        return view('clientes.create');
    }

    public function store(Request $request){
        $cliente = new Cliente($request->input());
        $cliente->save();
        return redirect()->to(route('admin.cliente.index'));
    }

    public function filter(){

    }

    public function show($id){

    }

    public function edit($cliente){
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $cliente){
        $cliente->fill($request->input());
        $cliente->save();
        return redirect()->to(route('admin.cliente.index'));
    }

    public function destroy($cliente){
        $cliente->delete();
        return redirect()->to(route('admin.cliente.index'));
    }
}
