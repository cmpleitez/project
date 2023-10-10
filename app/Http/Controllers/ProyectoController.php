<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proyecto;
use PDF;


class ProyectoController extends Controller
{
    
    public function index()
    {
        $data['proyectos'] = proyecto::All();
        return view('index', $data);
    }

    public function create()
    {
        return view('create');
    }

    public function edit($id)
    {
        $proyecto = proyecto::find($id);
        $data['proyecto'] = $proyecto;
        return view('edit', $data);
    }

    
    public function store(Request $request)
    {
        Proyecto::create($request->all());
        return redirect()->route('index');
    }


    public function delete($id)
    {
        $proyecto = proyecto::find($id);
        $proyecto->delete();
        return redirect()->route('index');
    }

    public function update(Request $request, $id)
    {
        $proyecto = proyecto::find($id);
        $proyecto->NombreProyecto = $request->NombreProyecto;
        $proyecto->fuenteFondos = $request->fuenteFondos;
        $proyecto->MontoPlanificado = $request->MontoPlanificado;
        $proyecto->MontoPatrocinado = $request->MontoPatrocinado;
        $proyecto->MontoFondosPropios = $request->MontoFondosPropios;
        if ( !$proyecto->save() ) {
            return 'Falló el intento de actualizar el proyecto';
        };
        return redirect()->route('index');
    }

    public function report()
    {
        $proyectos = proyecto::All();
        $data['proyectos'] = $proyectos;
        Return PDF::loadView('report', $data)->stream('report.pdf');
    }


}
