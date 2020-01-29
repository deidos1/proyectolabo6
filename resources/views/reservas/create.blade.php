<div class="modal fade modal-slide-in-right" aria-hidden="true"
		role="dialog" tabindex="-1" id="modal-create">
	<form action="{{ route('reservas.store') }}" method="POST" >
		@csrf
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h3 class="modal-title">Agregar Reservacion</h3>
				</div>
				<div class="modal-body">
                    <div class="form-group">
                        <label for="id_cliente">Cliente</label>
												<select class="form-control" name="id_cliente">
                            @foreach ($clientes as $cliente)
                            	<option value="{{ $cliente->id}}">{{ $cliente->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="paquete">Tour</label>
                        <select class="form-control" name="id_paquete">
                            @foreach ($paquetes as $paquete)
                            <option value="{{ $paquete->id}}">{{ $paquete->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fecha_reserva">Fecha de Reservación</label>
                        <input type="date" name="fecha_reserva" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="user">Registrador</label>
                        <select class="form-control" name="user_id">
                            @foreach ($users as $user)
                            <option value="{{ $user->id}}">{{ $user->name }}</option>
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
