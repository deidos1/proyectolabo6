@extends('layouts.admin')
@section('contenido')

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3><b>Listado de Paquetes Turisticos</b>
				<a href="" data-target="#modal-create" data-toggle="modal">
					<button class="btn btn-success"><b>+ Nuevo</b></button>
                </a>
			</h3>
		</div>
	</div>
	@include('paquetes.search')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-sm">
					<thead>
						<th>Id</th>
						<th>Tour</th>
						<th>Hora de Salida</th>
						<th>Hora de LLegada</th>
						<th>Guia</th>
						<th>Operaciones</th>
					</thead>

					@foreach ($paquetes as $paquete)
						<tr>
							<td>{{ $paquete->id }}</td>
							<td>{{ $paquete->nombre }}</td>
							<td>{{ $paquete->hora_salida }}</td>
							<td>{{ $paquete->hora_llegada }}</td>
							@foreach($guias as $guia)
								@if($paquete->id_guia==$guia->id)
									<td>{{$guia->nombre}}</td>
								@endif
							@endforeach
							<td>
								<a href="" data-target="#modal-show-{{ $paquete->id }}" data-toggle="modal">
									<button class="btn btn-info">Ver</button>
								</a>

								<a href="" data-target="#modal-edit-{{ $paquete->id }}" data-toggle="modal">
									<button class="btn btn-success">Editar</button>
                                </a>

								<a href="" data-target="#modal-delete-{{ $paquete->id }}" data-toggle="modal">
									<button class="btn btn-danger">Eliminar</button>
								</a>
							</td>
						</tr>
                        @include('paquetes.delete')
                        @include('paquetes.view')
                        @include('paquetes.edit')
					@endforeach
				</table>
				@include('paquetes.create')
			</div>
			{{$paquetes->render()}}
		</div>
	</div>

@endsection
