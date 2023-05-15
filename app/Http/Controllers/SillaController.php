<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

=======
use App\Models\tiposilla;
>>>>>>> be0e96c7078bf928b19e5abab03d6c0c977432ed
use Illuminate\Http\Request;

class SillaController extends Controller
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
        return tiposilla::all();
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
        $respuesta=tiposilla::create($inputs);
        return response()->json([
            'datos'=>$respuesta,
            'mensaje'=>'Silla creado de manera correcta',
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
        $existe=tiposilla::find($id);

        if( isset($existe)){
            return response()->json([
                'datos'=>$existe,
                'mensaje'=>'Silla encontrado de manera correcta',
            ]);
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'no existe la silla',
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
        $existe=tiposilla::find($id);
        if( isset($existe)){
            $existe->Descripcion=$request->Descripcion;
            
            if( $existe->save()){
                return response()->json([
                    'datos'=>$existe,
                    'mensaje'=>'Silla actualizado de manera correcta',
                ]);
            }
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'no existe la silla',
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
        $existe=tiposilla::find($id);

        if( isset($existe)){
           $res= tiposilla::destroy($id);
           if($res){
             return response()->json([
                'datos'=>$existe,
                'mensaje'=>'Silla eliminada de manera correcta',
            ]);
           }   else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'no existe la silla',
            ]);
        }        
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'no existe la silla',
            ]);
        }
>>>>>>> be0e96c7078bf928b19e5abab03d6c0c977432ed
    }
}
