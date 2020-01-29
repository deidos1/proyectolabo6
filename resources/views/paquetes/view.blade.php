<div class="modal fade modal-slide-in-right" aria-hidden="true"
		role="dialog" tabindex="-1" id="modal-show-{{ $paquete->id }}">
	<form action="#" method="dialog" >
        @csrf
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h3 class="modal-title">Ver Paquete Turistico</h3>
				</div>
				<div class="modal-body">
                    <div class="form-group">
                        <label for="nombre">Tour</label>
                        <input type="text" name="nombre" class="form-control" value="{{ $paquete->nombre }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="hora_salida">Hora de Salida</label>
                        <input type="time" name="hora_salida" class="form-control" value="{{ $paquete->hora_salida }}" disabled>
											</div>

                    <div class="form-group">
                        <label for="hora_llegada">Hora de Llegada</label>
                        <input type="time" name="hora_llegada" class="form-control" value="{{ $paquete->hora_llegada }}" disabled>
                    </div>

                    <div class="form-group">
						<label for="guia">Guia</label>
						<input type="text" name="id_guia" class="form-control" value="{{ $paquete->guia}}" disabled>
                    </div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</form>
</div>
