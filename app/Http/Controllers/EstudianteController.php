<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstudianteRequest;
use App\Model\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index(){
        $estudiantes = Estudiante::orderBy('cui_pasaporte', 'desc')->paginate();
        return view('estudiante.index', compact('estudiantes'));
    }

    public function create(){
        return view('estudiante.create');
    }
    
    public function show(Estudiante $estudiante){
        return view('estudiante.show', compact('estudiante'));
    }

    public function store(StoreEstudianteRequest $request){
        $estudiante = Estudiante::create($request->all());
        //Crear request php artisan make:request StoreResultado
        return redirect()->route('estudiante.show', $estudiante);
    }
    
    public function edit(Estudiante $estudiante){
        return view('estudiante.edit', compact('estudiante'));
    }

    
    public function update(StoreEstudianteRequest $request, Estudiante $estudiante){
        $estudiante->update($request->all());
        //Crear request php artisan make:request StoreResultado
        return redirect()->route('estudiante.show', $estudiante);
    }

    public function destroy(Estudiante $estudiante){
        $estudiante->delete();
        return redirect()->route('estudiante.index');
    }
}
