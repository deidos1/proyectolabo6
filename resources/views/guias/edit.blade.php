<div class="modal fade modal-slide-in-right" aria-hidden="true"	role="dialog" tabindex="-1" id="modal-edit-{{ $guia->id }}">
	<form action="{{ route('guias.update', $guia->id ) }}" method="POST">
        @csrf
        @method('PUT')
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
                    <h3 class="modal-title">Editar Guia Turistico</h3>
				</div>
				<div class="modal-body">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="{{ $guia->nombre }}">
                    </div>
                    <div class="form-group">
                        <label for="documento_identidad">Documento de Identidad</label>
                        <input type="text" name="documento_identidad" class="form-control" value="{{ $guia->documento_identidad }}">
                    </div>
                    <div class="form-group">
                        <label for="genero">Genero</label>
                        <select class="form-control" name="genero">
                            <option value="FEMENINO" {{ $guia->genero == "FEMENINO"? 'selected':''}}>FEMENINO</option>
                            <option value="MASCULINO" {{ $guia->genero == "MASCULINO"? 'selected':''}}>MASCULINO</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <input type="text" name="direccion" class="form-control" value="{{ $guia->direccion }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" value="{{ $guia->email }}">
                    </div>
                    <div class="form-group">
                        <label for="idioma">Idioma</label>
                        <select class="form-control" name="id_idioma">
                            @foreach ($idiomas as $idioma)
                                <option value="{{ $idioma->id }}" {{ $guia->idioma == $idioma->id? 'selected':''}}>{{ $idioma->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Actualizar</button>
				</div>
			</div>
		</div>
	</form>
</div>
