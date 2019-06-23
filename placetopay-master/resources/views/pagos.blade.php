@extends('layouts.app')
@section('titulo_pagina','Pagos')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                            <strong class="card-title">Pagos Registrados</strong>
                            <div class="pull-right">
                                <a href="{{route('crear_pago')}}" class="btn btn-primary">
                                    <i class="fa fa-plus"></i> Agregar Pago
                                </a>
                            </div>
                            
                        </div>
                        <div class="card-body">
                  <table id="pagos" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Descripción</th>
                        <th>Monto</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
                      </tr>
                      
                    </thead>
                    <tbody>
                        @foreach($pagos as $pago)
                          <tr>
                            <td>{{$pago->document}}</td>
                            <td>{{$pago->firstName}}</td>
                            <td>{{$pago->lastName}}</td>
                            <td>{{$pago->description}}</td>
                            <td>$ {{number_format($pago->totalAmount, 2, ',', '.')}} COP</td>
                            <td>{{$pago->transactionState}}</td>
                            <td>
                                <a href="{{route('detalles_pago',$pago->paymentId)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                            </td>
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
