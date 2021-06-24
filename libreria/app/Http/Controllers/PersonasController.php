<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas=DB::select("SELECT * FROM users");
       return view('personas.index')
       
        ->with('personas',$personas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos=$request->all();
        // dd($datos);
        $Usuario=new User();
         
         $Usuario->name=$datos['name'];
         $Usuario->email=$datos['email'];
         $Usuario->clie_telefono=$datos['clie_telefono'];
         
         $Usuario->clie_cedula=$datos['clie_cedula'];
         $Usuario->clie_genero=$datos['clie_genero'];
         $Usuario->clie_direccion=$datos['clie_direccion'];
         $Usuario->clie_tipo=$datos['clie_tipo'];
         $Usuario->clie_estadocivil=$datos['clie_estadocivil'];
         $Usuario->clie_usuario=$datos['clie_usuario'];
         $Usuario->clie_fenac=$datos['clie_fenac'];

         $Usuario->password=bcrypt($datos['password']);
        $Usuario->save();



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
