@extends('layouts.admin')
@section('contenido')

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3><b>Listado de Guias Turisticos</b>
				<a href="" data-target="#modal-create" data-toggle="modal">
					<button class="btn btn-success"><b>+ Nuevo</b></button>
                </a>
			</h3>
		</div>
	</div>
	@include('guias.search')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-sm">
					<thead>
						<th>Id</th>
						<th>Nombre</th>
						<th>Documento de Identidad</th>
						<th>Genero</th>
						<th>Direccion</th>
            <th>Email</th>
          	<th>Idioma</th>
					</thead>

					@foreach ($guias as $guia)
						<tr>
							<td>{{ $guia->id }}</td>
							<td>{{ $guia->nombre }}</td>
							<td>{{ $guia->documento_identidad }}</td>
							<td>{{ $guia->genero }}</td>
              <td>{{ $guia->direccion }}</td>
              <td>{{ $guia->email }}</td>
							@foreach($idiomas as $idioma)
								@if($guia->id_idioma==$idioma->id)
									<td>{{$idioma->idioma}}</td>
								@endif
							@endforeach
							<td>
								<a href="" data-target="#modal-show-{{ $guia->id }}" data-toggle="modal">
									<button class="btn btn-info">Ver</button>
								</a>

								<a href="" data-target="#modal-edit-{{ $guia->id }}" data-toggle="modal">
									<button class="btn btn-success">Editar</button>
                                </a>

								<a href="" data-target="#modal-delete-{{ $guia->id }}" data-toggle="modal">
									<button class="btn btn-danger">Eliminar</button>
								</a>
							</td>
						</tr>
                        @include('guias.delete')
                        @include('guias.view')
                        @include('guias.edit')
					@endforeach
				</table>
				@include('guias.create')
			</div>
			{{$guias->render()}}
		</div>
	</div>

@endsection
