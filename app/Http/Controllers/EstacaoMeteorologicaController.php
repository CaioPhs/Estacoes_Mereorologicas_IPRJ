<?php

namespace App\Http\Controllers;

use App\Models\EstacaoMeteorologica;
use Illuminate\Http\Request;

class EstacaoMeteorologicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estacoes = EstacaoMeteorologica::all();
        return view('estacoes.index', compact('estacoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estacoes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        EstacaoMeteorologica::create($request->all());

        return redirect()->route('estacoes.index')->with('success', 'Estação criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(EstacaoMeteorologica $estacao)
    {
        return view('estacoes.show', compact('estacao'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EstacaoMeteorologica $estacao)
    {
        return view('estacoes.edit', compact('estacao'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EstacaoMeteorologica $estacao)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $estacao->update($request->all());

        return redirect()->route('estacoes.index')->with('success', 'Estação atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EstacaoMeteorologica $estacao)
    {
        $estacao->delete();

        return redirect()->route('estacoes.index')->with('success', 'Estação excluída com sucesso!');
    }
}