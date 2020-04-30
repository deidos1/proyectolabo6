<div class="modal fade modal-slide-in-right" aria-hidden="true"
		role="dialog" tabindex="-1" id="modal-delete-{{$paquete->id}}">
	<form action="{{ route('paquetes.destroy', $paquete->id) }}" method="POST" >
		@csrf
		@method('DELETE')
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title">Eliminar Paquete</h4>
				</div>
				<div class="modal-body">
					<p>Confirme si desea Eliminar
					   el paquete: <strong>{{ $paquete->nombre }}</strong> ,
					   con identificador: <strong>{{ $paquete->id }}</strong>
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Confirmar</button>
				</div>
			</div>
		</div>
	</form>
</div>