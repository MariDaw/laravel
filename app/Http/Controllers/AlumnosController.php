<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\examen;

class alumnos extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
         $ordenes = ['nombre'];
         $orden = request()->query('orden') ?: 'nombre';
         abort_unless(in_array($orden, $ordenes), 404);

         $alumnos = DB::table('alumnos')
            ->orderBy($orden);

        $paginator = $alumnos->paginate(1);
        $paginador->appends(compact(
            'nombre',
            'orden'
        ));

        return view('alumno.index', [
            'alumnos' => $paginador,
        ]);

     }

     public function create()
     {
         $alumnos = (object) [
             'nombre' => null,
         ];

         return view ('alumno.create', [
             'nombre' => $alumnos,
         ]);
     }

     public function store()
     {
         $validos = $this->validar();

         DB::table('alumno')->insert([
             'nombre' =>$validos['nombre'],
         ]);

         return redirect('/alumno')
            ->with('success', 'Nombre bien insertado.');
     }

     public function edit($id)
     {
         $alumnos = $this->findAlumno($id);

         return view('alumno.edit', [
             'alumno' => $alumnos,
         ]);
     }

     public function update($id)
     {
         $validados = $this->validar();
         $this->findAlumno($id);

         DB::table('alumno')
            ->where('id', $id)
            ->update([
                'nombre' => $validados['nombre'],
        ]);

        return redirect('/alumno')
            ->with('success', 'Nombre bien modificado.');
     }

     private function validar()
     {
         $validados = request()->validate([
             'nombre' => 'required|max:15',
         ]);

         return $validados;
     }

     private function findAlumno($id)
     {
         $alumnos = DB::table('alumno')
            ->where('id', $id)
            ->get();
        
        abort_if($alumnos->isEmpty(), 404);

        return $alumnos->first();
     }
}
