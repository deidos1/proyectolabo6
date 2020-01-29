<div class="modal fade modal-slide-in-right" aria-hidden="true"
		role="dialog" tabindex="-1" id="modal-create">
	<form action="{{ route('guias.store') }}" method="POST" >
		@csrf
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h3 class="modal-title">Agregar Guia Turístico</h3>
				</div>
				<div class="modal-body">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre...">
                    </div>
                    <div class="form-group">
                        <label for="documento_identidad">Documento de Identidad</label>
                        <input type="text" name="documento_identidad" class="form-control" placeholder="Documento de identidad...">
                    </div>
                    <div class="form-group">
                        <label for="genero">Genero</label>
                        <select class="form-control" name="genero">
                            <option value="FEMENINO">FEMENINO</option>
                            <option value="MASCULINO">MASCULINO</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <input type="text" name="direccion" class="form-control" placeholder="Direccion...">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email...">
                    </div>
                    <div class="form-group">
                        <label for="idioma">Idioma</label>
                        <select class="form-control" name="id_idioma">
                            @foreach ($idiomas as $idioma)
                            	<option value="{{ $idioma->id}}">{{ $idioma->idioma }}</option>
                            @endforeach
                        </select>
                    </div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</div>
		</div>
	</form>
</div>
