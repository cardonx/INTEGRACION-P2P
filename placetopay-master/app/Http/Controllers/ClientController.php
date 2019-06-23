<?php

namespace App\Http\Controllers;

use Integracion\Http\Request;
use App\Person;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Integracion\Http\Response
     */
    public function index()
    {
        $clientes=Person::all();
        //dd($clientes);
        return view('clientes',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Integracion\Http\Response
     */
    public function create()
    {
        return view('crear_cliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Integracion\Http\Request  $request
     * @return \Integracion\Http\Response
     */
    public function store(Request $request)
    {
        $cliente=Person::where('document','=',$request->document)
                        ->where('documentType','=',$request->documentType)
                        ->first();
        if(!is_null($cliente)){
            return back()->withFlashDanger('Ya existe un Cliente con el mismo numero y tipo de Documento');
        }else{
            $cliente=new Person;
            $cliente->documentType=$request->documentType;
            $cliente->document=$request->document;
            $cliente->firstName=$request->firstName;
            $cliente->lastName=$request->lastName;
            $cliente->emailAddress=$request->emailAddress;
            $cliente->phone=$request->phone;
            $cliente->save();
            return redirect()->route('clientes')->withFlashSuccess('Cliente registrado con exito');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Integracion\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Integracion\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Integracion\Http\Request  $request
     * @param  int  $id
     * @return \Integracion\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Integracion\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
