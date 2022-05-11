@extends('layouts.app')

@section('template_title')
    Suscripcion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Suscripcion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('suscripcions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Ciclo</th>
										<th>Precio</th>
										<th>Moneda</th>
										<th>Fecha Pago</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($suscripcions as $suscripcion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $suscripcion->nombre }}</td>
											<td>{{ $suscripcion->ciclo }}</td>
											<td>{{ $suscripcion->precio }}</td>
											<td>{{ $suscripcion->moneda }}</td>
											<td>{{ $suscripcion->fecha_pago }}</td>

                                            <td>
                                                <form action="{{ route('suscripcions.destroy',$suscripcion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('suscripcions.show',$suscripcion->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('suscripcions.edit',$suscripcion->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $suscripcions->links() !!}
            </div>
        </div>
    </div>
@endsection
