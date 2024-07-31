<?php

namespace App\Http\Controllers;

use App\Models\Faixa;   
use Illuminate\Http\Request;

class FaixaController extends Controller
{
    /**
     * Store a newly created resource in storage.
     * tradução: Amazenagem da faixa
     */
    public function store(Request $request)
    {
        $faixa = Faixa::create($request->all());
        return response()->json($faixa, 201);
    }

    /**
     * Remove the specified resource from storage.
     * tradução: Remoção da Faixa
     */
    public function delete($id)
    {
        Faixa::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
