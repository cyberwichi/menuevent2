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

			<table id="tablaEvents" class="table table-striped table-hover">

				<thead>
					<tr>
						<th width="10px">ID </th>
						<th>Nombre cliente </th>
						<th>Fecha evento </th>

						<th width="8px">Ver</th>
						@can('events.edit')
						<th width="8px">Editar</th>
						@endcan
						@can('events.destroy')
						<th width="8px">Borrar</th>
						@endcan

					</tr>

				</thead>

				<tbody>

					@foreach($events as $event)
					<tr>

						<td>{{ $event->id }} </td>
						<td>{{ $event->nombre }} </td>
						<td>{{ $event->dia }} </td>




						<td>
							@can('events.show')
							<a class="btn btn-primary" href="{{ route('events.show',  $event->id ) }}"><i class="fas fa-eye"></i></a>
							@endcan

						</td>
						<td>
							@can('events.edit')
							<a class="btn btn-primary" href="{{ route('events.edit', $event->id) }}"><i class="fas fa-marker"></i></a>
							@endcan
						</td>
						<td>
							@can('events.destroy')
							{!! Form::open(['route' => ['events.destroy', $event->id],
							'method' => 'DELETE']) !!}
							<button class="btn btn-danger"> <i class="fas fa-trash-alt"></i>
							</button>
							{!! Form::close()!!}

							@endcan


						</td>

					</tr>
					@endforeach


				</tbody>

			</table>


		</div>





	</div>
</div>
<script>
	$(document).ready(function() {
		$('#tablaEvents').DataTable();
	});

</script>
@endsection
