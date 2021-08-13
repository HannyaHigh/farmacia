<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\farmaceuticos;

class carritofarmaciaController extends Controller
{
    public function productos(){
        $productos = farmaceuticos::all();
        return view('productos', compact('productos'));
    }

    public function carrito(){
        return view('carrito');
    }
    public function agregar($id)
    {
        $productos = farmaceuticos::find($id);
        if (!$productos) {
            abort(404);
        }
        $carrito = session()->get('carrito');
        if (!$carrito) {
            $carrito = [
                $id => [
                    "nombre" => $productos->nombre,
                    "descripcion" => $productos->descripcion,
                    "precio" => $productos->precio,
                    "cantidad" => 1,
                    "img" => $productos->img
                ]
            ];
            session()->put('carrito', $carrito);
            return redirect()->back()->with('success', 'Producto añadido al carrito con éxito');
        }
        if (isset($carrito[$id])) {
            $carrito[$id]['cantidad']++;
            session()->put('carrito', $carrito);
            return redirect()->back()->with('success', 'Producto añadido al carrito con éxito');
        }


        $carrito[$id] = [
            "nombre" => $productos->nombre,
            "descripcion" => $productos->descripcion,
            "precio" => $productos->precio,
            "cantidad" => 1,
            "img" => $productos->img,
        ];
        session()->put('carrito', $carrito);
        return redirect()->back()->with('success', 'Producto añadido al carrito con éxito');
    }

    public function actualizar(Request $request)
    {
        if ($request->id and $request->cantidad) {
            $carrito = session()->get('carrito');
            $carrito[$request->id]['cantidad'] = $request->cantidad;
            session()->put('carrito', $carrito);
            return redirect()->back()->with('success', 'Producto se actualizo  con éxito');
        }
    }
    public function borrar(Request $request)
    {
        if ($request->id) {
            $carrito = session()->get('carrito');
            if (isset($carrito[$request->id])){
                unset($carrito[$request->id]);
                session()->put('carrito', $carrito);
            }
            
        }
        session()->flash('success', 'Producto borrado con exito');
    }
}

