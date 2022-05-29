@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h5>Bienvenido {{ Auth::user()->name }}</h5>
                    <a type="button" class="btn btn-warning" href="/suscripcions">MIS SUSCRIPCIONES</a>
                </div>
            </div>
            <div style="margin:10px auto;">
                <center>
                    <img class="img-fluid rounded" src="{{ asset('img/min.gif') }}" alt="gif divertido">
                </center>
            </div>
        </div>
        
    </div>
</div>
@endsection
