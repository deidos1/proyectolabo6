<div class="modal fade modal-slide-in-right" aria-hidden="true"
		role="dialog" tabindex="-1" id="modal-create">
	<form action="{{ route('paquetes.store') }}" method="POST" >
		@csrf
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h3 class="modal-title">Agregar Paquete Turístico</h3>
				</div>
				<div class="modal-body">
                    <div class="form-group">
                        <label for="nombre">Tour</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre del tour...">
                    </div>
                    <div class="form-group">
                        <label for="hora_salida">Hora de Salida</label>
                        <input type="time" name="hora_salida" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="hora_llegada">Hora de Llegada</label>
                        <input type="time" name="hora_llegada" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="guia">Guia</label>
                        <select class="form-control" name="id_guia">
                            @foreach ($guias as $guia)
                            <option value="{{ $guia->id}}">{{ $guia->nombre }}</option>
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
