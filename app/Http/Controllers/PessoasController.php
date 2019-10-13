<?php

namespace Unesc\Http\Controllers;

use Illuminate\Http\Request;
use Unesc\Pessoa;

class PessoasController extends Controller
{
    public function index() {

        $titulo = 'Pessoas';
        $pessoas = Pessoa::all();

        return view('pessoas.index', ["titulo" => $titulo, "pessoas" => $pessoas]);
    }

    public function create() {

        $titulo = "Nova Pessoa";

        return view('pessoas.create', ["titulo" => $titulo]);
    }

    public function store(Request $request) {
        $formData = $request->all();

        Pessoa::create($formData);

        return redirect('/pessoas');
    }

    public function edit($id) {

        $titulo = "Editar Pessoa";

        $Pessoa = Pessoa::find($id);

        return view('pessoas.edit', ["titulo" => $titulo, "pessoa" => $Pessoa]);
    }

    public function update(Request $request, $id) {
        $formData = $request->all();

        $Pessoa = Pessoa::find($id);

        $Pessoa->update($formData);

        return redirect('/pessoas');
    }

    public function destroy($id) {
        $pessoa = Pessoa::find($id);

        $pessoa->delete();

        return redirect('/pessoas');
    }
}
