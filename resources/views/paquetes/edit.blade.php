<div class="modal fade modal-slide-in-right" aria-hidden="true"	role="dialog" tabindex="-1" id="modal-edit-{{ $paquete->id }}">
	<form action="{{ route('paquetes.update', $paquete->id ) }}" method="POST">
        @csrf
        @method('PUT')
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
                    <h3 class="modal-title">Editar Paquete Turistico</h3>
				</div>
				<div class="modal-body">
                    <div class="form-group">
                        <label for="nombre">Tour</label>
                        <input type="text" name="nombre" class="form-control" value="{{ $paquete->nombre }}">
                    </div>
                    <div class="form-group">
                        <label for="hora_salida">Hora de Salida</label>
                        <input type="time" name="hora_salida" class="form-control" value="{{ $paquete->hora_salida }}">
                    </div>
                    <div class="form-group">
                        <label for="hora_llegada">Hora de Llegada</label>
                        <input type="time" name="hora_llegada" class="form-control" value="{{ $paquete->hora_llegada }}">
                    </div>
                    <div class="form-group">
                        <label for="guia">Guia</label>
                        <select class="form-control" name="id_guia">
                            @foreach ($guias as $guia)
                                <option value="{{ $guia->id }}" {{ $paquete->guia == $guia->id? 'selected':''}}>{{ $guia->nombre }}</option>
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
