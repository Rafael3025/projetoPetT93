<?php

namespace App\Http\Controllers;

use App\Models\Adocoes;
use Illuminate\Http\Request;
use App\Models\{
    HistoricoAdocoes,
    Status,
    Clientes,
    Pet
};

class AdocoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adocoes = Adocoes::orderBy
        ('adocoes')->paginate(5);
        return
        view ('adocoes.index')
        ->with(compact('adocoes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Adocoes $adocoes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Adocoes $adocoes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Adocoes $adocoes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adocoes $adocoes)
    {
        //
    }
}
