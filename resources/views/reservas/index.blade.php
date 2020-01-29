@extends('layouts.admin')
@section('contenido')

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3><b>Listado de Reservaciones</b>
				<a href="" data-target="#modal-create" data-toggle="modal">
					<button class="btn btn-success"><b>+ Nuevo</b></button>
                </a>
			</h3>
		</div>
	</div>
	@include('reservas.search')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-sm">
					<thead>
            <th>Id</th>
            <th>Cliente</th>
            <th>Tour</th>
						<th>Fecha de Reserva</th>
						<th>Registrador</th>
						<th>Operaciones</th>
					</thead>

					@foreach ($reservas as $reserva)
						<tr>
              <td>{{ $reserva->id }}</td>
							@foreach($clientes as $cliente)
								@if($reserva->id_cliente==$cliente->id)
									<td>{{ $cliente->nombre}}</td>
								@endif
							@endforeach
							@foreach($paquetes as $paquete)
								@if($reserva->id_paquete==$paquete->id)
									<td>{{ $paquete->nombre}}</td>
								@endif
							@endforeach
							<td>{{ $reserva->fecha_reserva }}</td>
							@foreach($users as $user)
								@if($reserva->user_id==$user->id)
									<td>{{ $user->name}}</td>
								@endif
							@endforeach
							<td>
								<a href="" data-target="#modal-show-{{ $reserva->id }}" data-toggle="modal">
									<button class="btn btn-info">Ver</button>
								</a>

								<a href="" data-target="#modal-edit-{{ $reserva->id }}" data-toggle="modal">
									<button class="btn btn-success">Editar</button>
                                </a>

								<a href="" data-target="#modal-delete-{{ $reserva->id }}" data-toggle="modal">
									<button class="btn btn-danger">Eliminar</button>
								</a>
							</td>
						</tr>
                        @include('reservas.delete')
                        @include('reservas.view')
                        @include('reservas.edit')
					@endforeach
				</table>
				@include('reservas.create')
			</div>
			{{$reservas->render()}}
		</div>
	</div>

@endsection
