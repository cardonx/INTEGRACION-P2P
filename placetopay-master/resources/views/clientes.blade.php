@extends('layouts.app')
@section('titulo_pagina','Clientes')
@section('estilos_adicionales')
   
@endsection
@section('contenido')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                            <strong class="card-title">Pagos Registrados</strong>
                            <div class="pull-right">
                                <a href="{{route('crear_cliente')}}" class="btn btn-primary">
                                    <i class="fa fa-plus"></i> Agregar Cliente
                                </a>
                            </div>
                            
                        </div>
                        <div class="card-body">
                  <table id="clientes" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Tipo Documento</th>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $cliente)
                          <tr>
                            <td>{{$cliente->documentType}}</td>
                            <td>{{$cliente->document}}</td>
                            <td>{{$cliente->firstName}}</td>
                            <td>{{$cliente->lastName}}</td>
                            <td>{{$cliente->emailAddress}}</td>
                            <td>{{$cliente->phone}}</td>
                            
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                        </div>
                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script_adicionales')
    
@endsection