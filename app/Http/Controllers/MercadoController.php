<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mercado;

class MercadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dadosMercado = Mercado::all();
        $couting = $dadosMercado->count();
        return 'Mercado' . $couting . ' - ' . $dadosMercado;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dadosMercado = $request -> all();
        $validar = Validator::make($dadosMercado,[
            'filiais' => 'required',
            'funcionarios' => 'required',
            'produtos' => 'required',
            'fornecedores' => 'required',
            'setores' => 'required'
        ]);

        
        if($validar->fails()){
            return 'Dados inseridos inválidos!'. $validar->error(true). 500;
        }
        
        $registrosMercado = Gatinhosz::create($dadosMercado);

        if($registrosMercado){
            return 'Dados cadastrados ' . $registrosMercado . 201;
        }
        else{
            return 'Erro ao cadastrar.' . 500;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
