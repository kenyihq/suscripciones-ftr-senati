@extends('layouts.app')

@section('template_title')
    {{ $suscripcion->name ?? 'Show Suscripcion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Suscripciones</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('suscripcions.index') }}">Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $suscripcion->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Ciclo:</strong>
                            {{ $suscripcion->ciclo }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $suscripcion->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Moneda:</strong>
                            {{ $suscripcion->moneda }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Pago:</strong>
                            {{ $suscripcion->fecha_pago }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
