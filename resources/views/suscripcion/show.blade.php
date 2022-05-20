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
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right"><strong>{{ __('Nombre') }}</strong></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $suscripcion->nombre }}" disabled>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right"><strong>{{ __('Ciclo') }}</strong></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $suscripcion->ciclo }}" disabled>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right"><strong>{{ __('Precio') }}</strong></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $suscripcion->precio }}" disabled>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right"><strong>{{ __('Moneda') }}</strong></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $suscripcion->moneda }}" disabled>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right"><strong>{{ __('Fecha de pago') }}</strong></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $suscripcion->fecha_pago }}" disabled>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
