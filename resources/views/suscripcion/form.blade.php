<div class="box box-info padding-1">
    <div class="box-body">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="form-group">
                        {{ Form::label('nombre') }}
                        {{ Form::text('nombre', $suscripcion->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('ciclo') }}
                        {{ Form::text('ciclo', $suscripcion->ciclo, ['class' => 'form-control' . ($errors->has('ciclo') ? ' is-invalid' : ''), 'placeholder' => 'Ciclo']) }}
                        {!! $errors->first('ciclo', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('precio') }}
                        {{ Form::text('precio', $suscripcion->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
                        {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('moneda') }}
                        {{ Form::text('moneda', $suscripcion->moneda, ['class' => 'form-control' . ($errors->has('moneda') ? ' is-invalid' : ''), 'placeholder' => 'Moneda']) }}
                        {!! $errors->first('moneda', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('fecha_pago') }}
                        {{ Form::text('fecha_pago', $suscripcion->fecha_pago, ['class' => 'form-control' . ($errors->has('fecha_pago') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de pago']) }}
                        {!! $errors->first('fecha_pago', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>
            </div>
        </div>
    
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-outline-success">Agregar</button>
    </div>
</div>