<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource. 
     * tradução: Listagem do display das musicas do album
     */
    public function index()
    {
        return Album::with('faixas')->get();
    }
    /**
     * Store a newly created resource in storage.
     * tradução: Amazenagem do album
     */
    public function store(Request $request)
    {
        $album = Album::create($request->all());
        return response()->json($album, 201);
    }

    /**
     * Display the specified resource.
     * tradução: Sistema de pesquisa da faixa especifica
     */
    public function show($id)
    {
        return Album::with('faixas')->find($id);
    }

    /**
     * Update the specified resource in storage.
     * tradução: Atualização do sistema
     */
    public function update(Request $request, $id)
    {
        $album = Album::findOrFail($id);
        $album->update($request->all());
        return response()->json($album, 200);
    }

    /**
     * Remove the specified resource from storage.
     * Para deletar ou remover
     */
    public function delete($id)
    {
        Album::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}