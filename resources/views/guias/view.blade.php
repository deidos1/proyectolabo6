<div class="modal fade modal-slide-in-right" aria-hidden="true"
		role="dialog" tabindex="-1" id="modal-show-{{ $guia->id }}">
	<form action="#" method="dialog" >
        @csrf
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h3 class="modal-title">Ver Guia Turistico</h3>
				</div>
				<div class="modal-body">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="{{ $guia->nombre }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="documento_identidad">Documento de Identidad</label>
                        <input type="text" name="documento_identidad" class="form-control" value="{{ $guia->documento_identidad }}" disabled>
					</div>

                    <div class="form-group">
                        <label for="genero">Genero</label>
                        <input type="text" name="genero" class="form-control" value="{{ $guia->genero }}" disabled>
                    </div>

                    <div class="form-group">
						<label for="direccion">Direccion</label>
						<input type="text" name="direccion" class="form-control" value="{{ $guia->direccion }}" disabled>
                    </div>

                    <div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" class="form-control" value="{{ $guia->email }}" disabled>
                    </div>

                    <div class="form-group">
						<label for="idioma">Idioma</label>
						<input type="text" name="id_idioma" class="form-control" value="{{ $guia->idioma }}" disabled>
                    </div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</form>
</div>
