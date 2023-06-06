<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
        'apellidos' => 'required',
        'nombre' => 'required',
        'documento' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'email' => 'required'
        ]);

        $cliente = new Cliente;
        $cliente->apellidos = $request->apellidos;
        $cliente->nombre = $request->nombre;
        $cliente->documento = $request->documento;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->email = $request->email;
        $cliente->save();

        return response()->json([
            "message" => "Cliente creado correctamente",
            "cliente" => $cliente
        ], 201);
    }
}
