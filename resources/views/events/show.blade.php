@extends('\layouts.app')

@section('content')
<div class="container">

	<div class="panel panel-default">

		<div class="panel-heading">

			<h2 class="text-center">EVENTOS</h2>

			@can('events.create')
			<a class="btn btn-primary" href="{{ route('events.create') }}">Nuevo Evento</a>
			@endcan

		</div>
		<div class="panel-body">

			<div class="card border border-primary rounded">

				<div class="card-header">
					<h4><strong>Nombre Cliente:</strong> {{ $event->nombre }} </h4>
					<h4><strong>Fecha Evento:</strong> {{ $event->dia }} </h4>

				</div>

				<table id="tablaEvents" class="table table-striped table-hover">


					<tbody>
						@foreach($event->menus as $menu)
						<tr>
							<div class="">
								<td class="">
									<p><strong>Menu :</strong> {{ $menu->nombre }}
								</td>
								<td>
									<strong> cantidad :</strong> {{ $menu->pivot->cantidad }} <strong> asistentes</strong>
								</td>
								<td>
									<strong> Observaciones:</strong> {{ $menu->pivot->comentario}}
								</td>

								<td>

									<strong> Detalle Menu:</strong>
									@foreach ($menu->aliments as $aliment)
									<br>
									{{ $aliment->nombre}}
									@endforeach


								</td>

							</div>

						</tr>
						@endforeach
					</tbody>

				</table>



				<div class="row justify-content-center mb-3">
					<a class="btn btn-primary" href="{{ route('events.index')}}">Volver</a>
				</div>
			</div>


		</div>





	</div>
</div>
<script>
	$(document).ready(function() {
		$('#tablaEvents').DataTable();
	});

</script>
@endsection
