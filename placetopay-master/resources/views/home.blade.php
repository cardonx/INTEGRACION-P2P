@extends('layouts.app')
@section('titulo_pagina','Inicio')
@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Prueba para candidato Ingeniero de integraciones</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <strong>Estimad@ {{Auth::user()->name}}, bienvenid@ al sistema...</strong>

                    <br>
                    <br>
                    <p align="justify">
                        El propósito de esta evaluación es verificar las habilidades para entender un
                        problema a partir de una documentación estándar.
                    </p>
                    <p align="justify"> 
                        Se requiere desarrollar una conexión en PHP utilizando el WebServices de PSE
                        descrito en el archivo anexo. Esta integración debe permitir realizar un pago básico
                        desde internet.
                    </p>
                    <p align="justify"> 
                        Mediante un formulario debe suministrar los datos necesarios para realizar el pago
                        (revisar parámetros de entrada del servicio). 
                    </p>
                    <p align="justify"> 
                        Debe mantener un registro de la
                        respuesta generada por el WebService, determinando su estado actual (Aprobado,
                        pendiente, fallido o rechazado). Listar cada intento de pago con el estado en que se
                        encuentre.
                    </p>

                    
                    <p>
                        <h4>Tener en cuenta</h4>
                        <li>Uso de Programación Orientada a Objetos</li>
                        <li>Conexión por  (con SoapClient)</li>
                        <li>Uso de cache (Cache Interface)</li>
                        <li>Separación de capas (mínimo MVC)</li>
                        <li>Uso de autoload (PSR 4)</li>
                        <li>Documentación/README</li>
                        <li>Formato de código (PSR 1 y 2)</li>
                        <li>Manejo de variables de entorno para los datos de conexión (con .env o
                            config.php o similares)</li>
                        <li>Uso de migraciones</li>
                        <li>Aplicar control de versiones (commits, descripciones, organización,
                            continuidad)</li>
                        <li>Aplicar pruebas unitarias</li>
                        <li>La información suministrada es confidencial y no debe ser replicada o
                            compartida para usos diferentes a los de este ejercicio.</li>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
