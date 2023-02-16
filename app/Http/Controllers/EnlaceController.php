<?php

namespace App\Http\Controllers;

use App\Models\Enlace;
use Illuminate\Http\Request;

class EnlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enlaces = Enlace::get();        
        return view('enlaces', ['enlaces' => $enlaces] );      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crearenlace');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enlace = new Enlace();
        $enlace->nombre = $request->nombre;
        $enlace->url = $request->url;
        $enlace->categoria = $request->categoria;
        try{
          $enlace->save();
        }
        catch(\Exception $e){
          return view('crearenlace', ['error' => "No se pudo crear el enlace, compruebe si ya \
               existe esa URL ($request->nombre : $request->url) en la lista de enlaces."]);
        }
              
        $enlaces = Enlace::get();        
        return view('enlaces', ['enlaces' => $enlaces] );         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enlace  $enlace
     * @return \Illuminate\Http\Response
     */
    public function show(Enlace $enlace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enlace  $enlace
     * @return \Illuminate\Http\Response
     */
    public function edit(Enlace $enlace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enlace  $enlace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enlace $enlace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enlace  $enlace
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enlace $enlace)
    {
        //
    }
}
