<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Marca::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre'=>'required',
        ]);
        $marca = Marca::create(
            $request->all()
        );
        return response()->json([
            'mensaje'=>'Marca creada exitosamente.',
            'marca'=>$marca
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $marca = Marca::find($id);
        if(!$marca){
            return response()->json([
                'mensaje' => 'Marca no encontrada.'
            ], 404);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $marca = Marca::find($id);
        if(!$marca){
            return response()->json([
                'mensaje' => 'Marca no encontrada.'
            ], 404);
        }
        return response()->json($marca,200);
        $request->validate([
            'nombre'=>'required',
        ]);
        $marca->update($request->all());
        return response()->json([
            'mensaje'=>'Categoria actualizada exitosamente.',
            'categoria'=>$marca
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $marca = Marca::find($id);
        if(!$marca){
            return response()->json([
                'mensaje' => 'Marca no encontrada.'
            ], 404);
        }
        $marca->delete();
        return response()->json([
            'mensaje'=>'Marca eliminada exitosamente.'
        ],200);


    }
}
