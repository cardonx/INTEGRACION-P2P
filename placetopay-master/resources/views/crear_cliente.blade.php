@extends('layouts.app')
@section('titulo_pagina','Inicio')
@section('contenido')
<div class="container">
  <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pagos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <form action="{{route('store_cliente')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                  {{csrf_field()}}
                    <div class="row">
                      <div class="form-group col-md-4">
                        <label for="documentType">Tipo Documento</label>
                        <select id="documentType" name="documentType" class="form-control" required>
                            <option value="">Selecciones..</option>
                            <option value="CC">Cedula de Ciudadania</option>
                            <option value="CE">Cedula de Extranjeria</option>
                            <option value="TI">Tarjeta de Identidad</option>
                            <option value="PPN">Pasaporte</option>
                            <option value="NIT">Nuemro de Identificacion Tributaria</option>
                            <option value="SSN">NUmero de Seguro Social</option>
                        </select> 
                      </div>
                      
                      <div class="form-group col-md-4">
                          <label for="document">Documento</label>
                          <input id="document" name="document" type="text" class="form-control" required maxlength="13">   
                      </div>
                      <div class="form-group col-md-4">
                          <label for="emailAddress" class="control-label mb-1">Correo Electrónico</label>
                          <input id="emailAddress" name="emailAddress" type="text" class="form-control" required>
                      </div>                   
                      <div class="form-group col-md-4">
                          <label for="firstName">Nombre</label>
                          <input id="firstName" name="firstName" type="text" class="form-control" required >
                      </div> 
                      <div class="form-group col-lg-4">
                          <label for="lastName" >Apellido</label>
                          <input id="lastName" name="lastName" type="text" class="form-control" required >  
                      </div> 
                      <div class="form-group col-md-4">
                          <label for="phone" class="control-label mb-1">Telefono</label>
                          <input id="phone" name="phone" type="text" class="form-control" required>  
                      </div>
                    </div>      
                    <div class="col-12">
                      <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <i class="fa fa-save fa-lg"></i>&nbsp;Agregar Cliente
                      </button>
                    </div>
                  </form> 
                </div>
            </div>
        </div>
    </div>
</div>              
@endsection
@section('script_adicionales')
	
@endsection