<div class="modal fade modal-slide-in-right" aria-hidden="true"
		role="dialog" tabindex="-1" id="modal-show-{{ $reserva->id }}">
	<form action="#" method="dialog" >
        @csrf
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h3 class="modal-title">Ver Reservacion</h3>
				</div>
				<div class="modal-body">
                    <div class="form-group">
                        <label for="cliente">Cliente</label>
                        <input type="text" name="id_cliente" class="form-control" value="{{ $reserva->id_cliente}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="paquete">Tour</label>
                        <input type="text" name="id_paquete" class="form-control" value="{{ $reserva->id_paquete }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="fecha_reserva">Hora de Salida</label>
                        <input type="date" name="fecha_reserva" class="form-control" value="{{ $reserva->fecha_reserva }}" disabled>
					</div>

            <div class="form-group">
						<label for="user">Guia</label>

						<input type="text" name="user_id" class="form-control" value="{{ $reserva->user_id==$user->id? $user->name:'' }}" disabled>
            </div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</form>
</div>
