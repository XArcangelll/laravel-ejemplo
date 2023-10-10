<?php

namespace App\Http\Controllers;

use App\Http\Requests\CursoRequest;
use App\Models\Curso;
use App\Models\Marca;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::orderby("id","desc")->paginate(10); 

        return view('cursos.index',compact('cursos'));
    }

    public function create(){

        $marcas = Marca::all();

        return view('cursos.create',compact('marcas'));
    }

    // public function show($id){

    //     $curso = Curso::find($id);
    //     if($curso && $curso->id == $id) return view('cursos.show',compact('curso'));

    //     return redirect()->route("cursos.index");

    // }


    //otro metodo pero no tan validado
    public function show(Curso $curso){

    return view('cursos.show',compact('curso'));


    }

    public function store(CursoRequest $request){

        // $request->validate([
        //     aqui opndrias la validacion
        // ],[aqui pondrias los mensajes],[aqui pondrias los atributos]);

    //   $curso = new Curso();
    //   $curso->name = $request->name;
    //   $curso->descripcion = $request->descripcion;
    //   $curso->categoria = $request->categoria;
    //   $curso->save();

    $curso = Curso::create($request->all());

      return redirect()->route("cursos.show",$curso)->with("success","Curso registrado Correctamente");
    }

    // public function edit($id){

    //     $curso = Curso::find($id);
    //     if($curso && $curso->id == $id) return view('cursos.edit',compact('curso'));

    //     return redirect()->route("cursos.index");

    // }

    public function edit(Curso $curso){
            
        return view('cursos.edit',compact('curso'));

    }

    public function update(CursoRequest $request,Curso $curso){

        //rule tomara $this->id el segundo parametro osea $id
        //$curso = Curso::find($id);
        // $id->name = $request->name;
        // $id->descripcion = $request->descripcion;
        // $id->categoria = $request->categoria;
        // $id->save();
        $curso->update($request->all());

        return redirect()->route("cursos.show",$curso)->with("success","Actualizado correctamente");
    }

    public function destroy(Curso $curso){
        $curso->delete();

        return redirect()->route("cursos.index")->with("success","Borrado Correctamente");
    }

    // public function update(Request $request,Curso $curso){


    //     $curso->name = $request->name;
    //     $curso->descripcion = $request->descripcion;
    //     $curso->categoria = $request->categoria;
    //     $curso->save();
    //     return redirect()->route("cursos.show",$curso->id)->with("success","Actualizado Correctamente");
    // }

}
