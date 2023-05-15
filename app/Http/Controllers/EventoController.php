<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
=======
use App\Models\tipoevento;
>>>>>>> be0e96c7078bf928b19e5abab03d6c0c977432ed

use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        //
=======
        return tipoevento::all();
>>>>>>> be0e96c7078bf928b19e5abab03d6c0c977432ed
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        //
=======
        $inputs=$request->input();
        $respuesta=tipoevento::create($inputs);
        return response()->json([
            'datos'=>$respuesta,
            'mensaje'=>'Evento creado de manera correcta',
        ]);
>>>>>>> be0e96c7078bf928b19e5abab03d6c0c977432ed
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
<<<<<<< HEAD
        //
=======
        $existe=tipoevento::find($id);

        if( isset($existe)){
            return response()->json([
                'datos'=>$existe,
                'mensaje'=>'Evento encontrado de manera correcta',
            ]);
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'no existe el evento',
            ]);
        }
>>>>>>> be0e96c7078bf928b19e5abab03d6c0c977432ed
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
<<<<<<< HEAD
        //
=======
        $existe=tipoevento::find($id);
        if( isset($existe)){
            $existe->Descripcion=$request->Descripcion;
            
            if( $existe->save()){
                return response()->json([
                    'datos'=>$existe,
                    'mensaje'=>'Evento actualizado de manera correcta',
                ]);
            }
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'no existe el eveno',
            ]);
        }
>>>>>>> be0e96c7078bf928b19e5abab03d6c0c977432ed
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
        //
=======
        $existe=tipoevento::find($id);

        if( isset($existe)){
           $res= tipoevento::destroy($id);
           if($res){
             return response()->json([
                'datos'=>$existe,
                'mensaje'=>'Evento eliminado de manera correcta',
            ]);
           }   else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'no existe el evento',
            ]);
        }        
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'no existe el evento',
            ]);
        }
>>>>>>> be0e96c7078bf928b19e5abab03d6c0c977432ed
    }
}
