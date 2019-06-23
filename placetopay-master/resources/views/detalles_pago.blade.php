@extends('layouts.app')
@section('titulo_pagina','Destalles Pago')
@section('estilos_adicionales')
   
@endsection
@section('contenido')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">
                        Transaction ID: 
                        {{$consulta->transactionID}} - 
                        {{$consulta->document}} - 
                        {{$consulta->firstName}} {{$consulta->lastName}} - 
                        {{$consulta->description}} - 
                        ${{$consulta->totalAmount}}
                        @if($consulta->transactionState=='OK')
                            <span class="badge badge-success pull-right">{{$consulta->transactionState}}</span>
                        @endif
                        @if($consulta->transactionState=='PENDING')
                            <span class="badge badge-warning pull-right">{{$consulta->transactionState}}</span>
                        @endif
                        @if($consulta->transactionState=='NOT_AUTHORIZED')
                            <span class="badge badge-danger pull-right">{{$consulta->transactionState}}</span>
                        @endif
                        @if($consulta->transactionState=='FAILED')
                            <span class="badge badge-danger pull-right">{{$consulta->transactionState}}</span>
                        @endif
                    </strong>                    
                </div>
                <div class="card-body ">
                    
                       <center><h4>Datos Registrados</h4></center>
                    <br>
                    <div class="row">
                    <div class="col-md-3 form-group">
                        <label for="cliente">Documento</label>
                        <span class="form-control">{{$consulta->document}}</span>
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="cliente">Cliente</label>
                        <span class="form-control">{{$consulta->firstName}} {{$consulta->lastName}}</span>
                    </div> 
                    <div class="col-md-3 form-group">
                        <label for="cliente">Email</label>
                        <span class="form-control">{{$consulta->emailAddress}}</span>
                    </div>
                    <br>
                    <div class="col-md-3 form-group">
                        <label for="cliente">Telefono</label>
                        <span class="form-control">{{$consulta->phone}}</span>
                    </div>
                    <br>
                </div>

                    <center><h4>Servicio Adquirido</h4></center>
                    <br>
                    <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="cliente">Descripción</label>
                        <span class="form-control">{{$consulta->description}}</span>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="cliente">Valor Monetario</label>
                        <span class="form-control">{{$consulta->totalAmount}}</span>
                    </div>
                    <br>
                </div>
                    <center><h4>Detalles del Pago</h4></center>
                    <br>
                    <div class="row">
                        <div class="col-md-4 form-group">
                        <label for="cliente">Transaction ID</label>
                        <span class="form-control">{{$consulta->transactionID}}</span>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="cliente">Fecha/Hora</label>
                        <span class="form-control">{{$consulta->updated_at}}</span>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="cliente">Respuesta</label>
                        <span class="form-control">{{$consulta->responseReasonText}}</span>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="cliente">Código de Trazabilidad</label>
                        <span class="form-control">{{$consulta->trazabilityCode}}</span>
                        
                    </div>
                    
                    <div class="col-md-7 form-group">
                        <label for="cliente">Código de Referencia</label>
                        <span class="form-control">{{$consulta->reference}}</span>
                    </div> 
                    </div>
                    
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
            
@endsection
@section('script_adicionales')
    
@endsection