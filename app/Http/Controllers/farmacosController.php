<?php

namespace App\Http\Controllers;

use App\Models\farmaceuticos;
use Illuminate\Http\Request;

class farmacosController extends Controller
{
    public function farmaceuticos()
    {
        $consult = farmaceuticos::orderBy('id', 'desc')
            ->take(1)->get();
        $howmany = count($consult);
        if ($howmany == 0) {
            $nextid = 1;
        } else {
            $nextid = $consult[0]->id + 1;
        }
        return view('farmaceuticos')
            ->with('nextid', $nextid);
    }

    public function guardarFarmacos(Request $request)
    {
        $request->validate([
            'nombre' => 'required|regex:/^[A-Z, a-z][A-Z, a-z, ,á, é, í, ó, ú]+$/',
            'codigo' => 'required|regex:/^[A-Z, a-z][A-Z, a-z, ,á, é, í, ó, ú]+$/',
            'cantidad' => 'required|regex:/^[0-9]+$/',
            'tipo_producto' => 'required|regex:/^[A-Z, a-z][A-Z, a-z, ,á, é, í, ó, ú]+$/',
            'precio' => 'required|regex:/^[0-9]+$/',
            'descripcion' => 'required|regex:/^[A-Z, a-z][A-Z, a-z, ,á, é, í, ó, ú]+$/',
            'img' => 'image|mimes:jpeg,png',
        ]);

        $file = $request->file('img');
        if ($file <> "") {
            $img = $file->getClientOriginalName();
            $img2 = $request->id . $img;
            \Storage::disk('local')->put($img2, \File::get($file));
        } else {
            $img2 = "sinfoto.jpg";
        }

        $farmacos = new farmaceuticos;
        $farmacos->id = $request->id;
        $farmacos->nombre = $request->nombre;
        $farmacos->codigo = $request->codigo;
        $farmacos->fecha_llegada = $request->fecha_llegada;
        $farmacos->fecha_caducidad = $request->fecha_caducidad;
        $farmacos->cantidad = $request->cantidad;
        $farmacos->tipo_producto = $request->tipo_producto;
        $farmacos->precio = $request->precio;
        $farmacos->descripcion = $request->descripcion;
        $farmacos->cantidad = $request->cantidad;
        $farmacos->img = $img2;
        $farmacos->save();
        return redirect()->route('index');
    }
}
