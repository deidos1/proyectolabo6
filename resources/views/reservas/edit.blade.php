<div class="modal fade modal-slide-in-right" aria-hidden="true"	role="dialog" tabindex="-1" id="modal-edit-{{ $reserva->id }}">
	<form action="{{ route('reservas.update', $reserva->id ) }}" method="POST">
        @csrf
        @method('PUT')
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
                    <h3 class="modal-title">Editar Reservacion</h3>
				</div>
				<div class="modal-body">
                    <div class="form-group">
                        <label for="cliente">Cliente</label>
                        <select class="cliente" name="id_cliente">
                            @foreach ($clientes as $cliente)
                                <option value="{{ $cliente->id }}" {{ $reserva->id_cliente == $cliente->id? 'selected':''}}>{{ $cliente->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="paquete">Tour</label>
                        <select class="paquete" name="id_paquete">
                            @foreach ($paquetes as $paquete)
                                <option value="{{ $paquete->id }}" {{ $reserva->id_paquete == $paquete->id? 'selected':''}}>{{ $paquete->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fecha_reserva">Fecha de Reservacion</label>
                        <input type="date" name="fecha_reserva" class="form-control" value="{{ $reserva->fecha_reserva }}">
                    </div>
                    <div class="form-group">
                        <label for="guia">Registrador</label>
                        <select class="user" name="user_id">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ $reserva->user_id == $user->id? 'selected':''}}>{{ $user->name }}</option>
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
