<?php

namespace App\Http\Controllers;

use App\Models\vendedores;
use App\Models\cargos;
use Illuminate\Http\Request;

class clientController extends Controller
{
    public function index(){
        return view('index');
    }

    public function vendedores(){
        $consult = vendedores::orderBy('idvendedor', 'desc')
            ->take(1)->get();
        $howmany = count($consult);
        if ($howmany == 0){
            $nextid = 1;
        }else{
            $nextid = $consult[0]->idvendedor + 1;
        }
        $cargos = cargos::orderBy('cargo')->get();
        return view('vendedores')
            ->with('cargos', $cargos)
            ->with('nextid', $nextid);
    }

    public function guardarVendedor(Request $request){
        $request->validate([
            'nombre' => 'required|regex:/^[A-Z, a-z][A-Z, a-z, ,á, é, í, ó, ú]+$/',
            'app' => 'required|regex:/^[A-Z, a-z][A-Z, a-z, ,á, é, í, ó, ú]+$/',
            'apm' => 'required|regex:/^[A-Z, a-z][A-Z, a-z, ,á, é, í, ó, ú]+$/',
            'email' => 'required|email',
            'contra' => 'required|regex:/^[0-9]{5}$/',
        ]);

        $vendedores = new vendedores;
        $vendedores->idvendedor = $request->idvendedor;
        $vendedores->nombre = $request->nombre;
        $vendedores->app = $request->app;
        $vendedores->apm = $request->apm;
        $vendedores->email = $request->email;
        $vendedores->contra = $request->contra;
        $vendedores->fechanac = $request->fechanac;
        $vendedores->sexo = $request->sexo;
        $vendedores->idcargo = $request->idcargo;
        $vendedores->save();

        return redirect()->route('index');
    }


    public function reportevendedores(){
        $consulta = vendedores::withTrashed()->join('cargos', 'vendedores.idcargo', '=', 'cargos.idcargo')
            ->select(
                'vendedores.idvendedor',
                'vendedores.nombre',
                'vendedores.app',
                'vendedores.apm',
                'vendedores.email',
                'vendedores.deleted_at',
                'cargos.cargo as tipocargo'
            )
            ->orderBy('nombre')
            ->get();
        return view('reportevendedores')->with('consulta', $consulta);
    }
}
