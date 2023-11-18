<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreResultadoRequest;
use App\Resultado;
use Illuminate\Http\Request;

class ResultadoController extends Controller
{
    public function index()
    {
        $resultados =  Resultado::orderBy('id', 'asc')->paginate();
        return view('resultado.index', compact('resultados'));
    }

    public function create(){
        return view('resultado.create');
    }

    public function store(StoreResultadoRequest $request){
        //Crear request php artisan make:request StoreResultado

        $reslutado = new Resultado();
        $reslutado->nombre = $request->name;
        $reslutado->save();

        //return $request->all();
        return redirect()->route('resultado.index');
    }

    public function edit(Resultado $resultado){
        return view('resultado.edit', compact('resultado'));
    }

    public function update(Request $request, Resultado $resultado){
        
        $request->validate([
            'nombre' => 'required'
        ]);


        $resultado->nombre = $request->nombre;
        $resultado->save();

        //return $request->all();
        return redirect()->route('resultado.index');
    }
}
