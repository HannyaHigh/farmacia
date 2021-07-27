<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientes;
class clientesController extends Controller
{
    public function clientes()
    {
        $consult = clientes::orderBy('idcliente', 'desc')
            ->take(1)->get();
        $howmany = count($consult);
        if ($howmany == 0) {
            $nextid = 1;
        } else {
            $nextid = $consult[0]->idcliente + 1;
        }
        return view('cliente')
            ->with('nextid', $nextid);
    }

    public function guardarCliente(Request $request){
        $request->validate([
            'nombre' => 'required|regex:/^[A-Z, a-z][A-Z, a-z, ,á, é, í, ó, ú]+$/',
            'app' => 'required|regex:/^[A-Z, a-z][A-Z, a-z, ,á, é, í, ó, ú]+$/',
            'apm' => 'required|regex:/^[A-Z, a-z][A-Z, a-z, ,á, é, í, ó, ú]+$/',
            'telefono' => 'required|regex:/^[0-9]{10}$/',
            'municipio' => 'required|regex:/^[A-Z, a-z][A-Z, a-z, ,á, é, í, ó, ú]+$/',
            'calle' => 'required|regex:/^[A-Z, a-z][A-Z, a-z, ,á, é, í, ó, ú]+$/',
            'nocalle' => 'required|regex:/^[0-9]{3}$/',
        ]);

        $clientes = new clientes;
        $clientes->idcliente = $request->idcliente;
        $clientes->nombre = $request->nombre;
        $clientes->app = $request->app;
        $clientes->apm = $request->apm;
        $clientes->sexo = $request->sexo;
        $clientes->telefono = $request->telefono;
        $clientes->municipio = $request->municipio;
        $clientes->calle = $request->calle;
        $clientes->nocalle = $request->nocalle;
        $clientes->save();

        return redirect()->route('index');

    }

    public function reporteclientes(){
        $consulta = clientes::withTrashed()->get();
        return view('reporteclientes')->with('consulta', $consulta);
    }
}
