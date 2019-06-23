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

                <form method="post" action="{{route('guardar_pago')}}" accept-charset="UTF-8">
                    <input type="hidden" name="reference" value="{{md5(date('c'))}}">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-12"><center><h2>Información del Cliente</h2></center></div>
                        <div class="form-group col-md-4">
                            <label for="bankInterface">Tipo de Cuenta</label>
                            <select id="bankInterface" name="bankInterface" class="form-control" required>
                                <option value="">Seleccione....</option>
                                <option value="0">PERSONAS</option>
                                <option value="1">EMPRESAS</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="payer">Cliente</label>
                            <select id="payer" name="payer" class="form-control" required>
                                <option value="">Seleccione....</option>
                                @foreach($personas as $cliente)
                                <option value="{{$cliente->id}}">{{$cliente->firstName}} {{$cliente->lastName}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="bankCode">Entidad Financiera</label>
                            <select id="bankCode" name="bankCode" class="form-control" required>
                                <option value="">Seleccione....</option>
                                @foreach($bancos as $banco)

                                <option value="{{$banco->bankCode}}">{{$banco->bankName}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12"><center><h2>Información del Pago</h2></center></div>
                        
                        <div class="form-group col-md-8">
                            <label for="description">Descripción del Pago</label>
                            <input type="text" name="description" id="description" required class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="totalAmount">Monto Total a Pagar</label>
                            <input type="number" step="0.01" name="totalAmount" id="totalAmount" class="form-control">
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Guardar</button>
                </form>
                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


