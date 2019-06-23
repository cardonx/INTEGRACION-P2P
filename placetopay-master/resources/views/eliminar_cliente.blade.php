@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . 'Eliminar Cliente')
@section('header-title', 'Eliminar Cliente')
@section('estilos_adicionales')
    
@endsection
@section('content')
<form action="{{route('admin.cliente.destroy',$cliente->user_id)}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
@method('DELETE')
@csrf
<input type="hidden" name="user_id" value="{{$cliente->user_id}}">
<input type="hidden" name="client_id" value="{{$cliente->client_id}}">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Registro de Cliente -> {{$cliente->client_dni}}</strong>
        </div>
        
          <div id="pay-invoice">
              <div class="card-body">
                      
                      
                    
                      
                      <div class="form-group col-lg-4">
                          <label for="first_name" class="control-label mb-1">Nombre</label>
                          <div class="input-group">
                          <input id="first_name" name="first_name" type="text" class="form-control" readonly value="{{$cliente->first_name}}">
                          <div class="input-group-addon">
                              <span class="fa fa-user fa-lg"></span>
                         </div>
                          </div>
                      </div>

                      <div class="form-group col-lg-4">
                          <label for="last_name" class="control-label mb-1">Apellido</label>
                          <div class="input-group">
                          <input id="last_name" name="last_name" type="text" class="form-control" readonly value="{{$cliente->last_name}}">
                          <div class="input-group-addon">
                              <span class="fa fa-user fa-lg"></span>
                         </div>
                          </div>
                      </div>

                      <div class="form-group col-lg-4">
                          <label for="email" class="control-label mb-1">Correo Electrónico</label>
                          <div class="input-group">
                            <input id="email" name="email" type="text" class="form-control" readonly value="{{$cliente->email}}">
                            <div class="input-group-addon">
                              <span class="fa fa-envelope fa-lg"></span>
                            </div>
                          </div>
                      </div>
                      <div class="form-group col-lg-6">
                          <label for="gender" class="control-label mb-1">Genero</label>
                          <div class="input-group">
                            <input id="first_name" name="first_name" type="text" class="form-control" readonly value="{{$cliente->gender}}">
                            <div class="input-group-addon">
                              <span class="fa fa-sitemap fa-lg"></span>
                            </div>
                          </div>
                          </div>
                      <div class="form-group col-lg-6">
                          <label for="birth_date" class="control-label mb-1">Fecha de Nacimiento</label>
                          <div class="input-group">
                              <input id="birth_date" name="birth_date" type="date" class="form-control" readonly value="{{date('Y-m-d',strtotime($cliente->birth_date))}}">
                              <div class="input-group-addon">
                                  <span class="fa fa-calendar fa-lg"></span>
                              </div>
                          </div>
                      </div>                    
                      <div class="form-group col-lg-12">
                        <br>
                        <button id="payment-button" type="submit" class="btn btn-lg btn-danger btn-block">
                          <i class="fa fa-times fa-lg"></i>&nbsp;Eliminar Cliente
                        </button>                  
                      </div>
              
          </div>

        </div>
    
    </div>

</div>
</form>               
@endsection
@section('script_adicionales')
	
@endsection