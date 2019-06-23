@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . 'Editar Cliente')
@section('header-title', 'Editar Cliente')
@section('estilos_adicionales')
    
@endsection
@section('content')
<form action="{{route('admin.cliente.update')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
{{csrf_field()}}
<input type="hidden" name="user_id" value="{{$cliente->user_id}}">
<input type="hidden" name="client_id" value="{{$cliente->client_id}}">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Registro de Cliente -> Dni: {{$cliente->client_dni}}</strong>
        </div>
        
          <div id="pay-invoice">
              <div class="card-body">
                      
                    <div class="form-group col-lg-3">
                          <label for="dni" class="control-label mb-1">DNI</label>
                          <div class="input-group">
                            <input id="dni" name="dni" type="text" class="form-control" required maxlength="10" value="{{$cliente->client_dni}}">
                            <div class="input-group-addon">
                                <span class="fa fa-address-card fa-lg"></span>
                            </div>
                          </div>
                      </div>
                      <div class="form-group col-lg-3">
                          <label for="gender" class="control-label mb-1">Genero</label>
                          <div class="input-group">
                            <select id="gender" name="gender" class="form-control" required>
                              @if($cliente->gender == "Masculino")
                              <option selected value="Masculino">Masculino</option>
                              <option value="Femenino">Femenino</option>
                              @else
                              <option value="Masculino">Masculino</option>
                              <option selected value="Femenino">Femenino</option>
                              @endif
                          </select>
                            <div class="input-group-addon">
                              <span class="fa fa-sitemap fa-lg"></span>
                            </div>
                          </div>
                      </div>
                      <div class="form-group col-lg-6">
                          <label for="email" class="control-label mb-1">Correo Electrónico</label>
                          <div class="input-group">
                            <input id="email" name="email" type="text" class="form-control" required value="{{$cliente->email}}">
                            <div class="input-group-addon">
                              <span class="fa fa-envelope fa-lg"></span>
                            </div>
                          </div>
                      </div>
                      <div class="form-group col-lg-6">
                          <label for="first_name" class="control-label mb-1">Nombre</label>
                          <div class="input-group">
                          <input id="first_name" name="first_name" type="text" class="form-control" required value="{{$cliente->first_name}}">
                          <div class="input-group-addon">
                              <span class="fa fa-user fa-lg"></span>
                         </div>
                          </div>
                      </div>

                      <div class="form-group col-lg-6">
                          <label for="last_name" class="control-label mb-1">Apellido</label>
                          <div class="input-group">
                          <input id="last_name" name="last_name" type="text" class="form-control" required value="{{$cliente->last_name}}">
                          <div class="input-group-addon">
                              <span class="fa fa-user fa-lg"></span>
                         </div>
                          </div>
                      </div>

                      
                      
                      <div class="form-group col-lg-4">
                          <label for="birth_date" class="control-label mb-1">Fecha de Nacimiento</label>
                          <div class="input-group">
                              <input id="birth_date" name="birth_date" type="date" class="form-control" required value="{{date('Y-m-d',strtotime($cliente->birth_date))}}">
                              <div class="input-group-addon">
                                  <span class="fa fa-calendar fa-lg"></span>
                              </div>
                          </div>
                      </div>
                      <div class="form-group col-lg-4">
                          <label for="password" class="control-label mb-1">Contraseña</label>
                          <div class="input-group">
                              <input id="password" name="password" type="password" class="form-control" required value="{{$cliente->password}}">
                              <div class="input-group-addon">
                                  <span class="fa fa-lock fa-lg"></span>
                              </div>
                          </div>
                      </div>
                      <div class="form-group col-lg-4">
                          <label for="re-password" class="control-label mb-1">Repetir Contraseña</label>
                          <div class="input-group">
                              <input id="re-password" name="re-password" type="password" class="form-control" required value="{{$cliente->password}}">
                              <div class="input-group-addon">
                                  <span class="fa fa-lock fa-lg"></span>
                              </div>
                          </div>
                      </div>
                     
                      
                  
              </div>
              
          </div>

        </div>
    
    </div>
<div class="col-12">
	<button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
		<i class="fa fa-save fa-lg"></i>&nbsp;Actualizar Cliente
		
		
	</button>
</div>
</form>               
@endsection
@section('script_adicionales')
	
    
@endsection