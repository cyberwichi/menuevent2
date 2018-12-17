<div class="container mt-5">

	<table id="tablaMenus" class="table table-striped table-hover">

		<thead>
			<tr>

				<th width="150px">Nombre de Menu </th>
				<th width="10px">Cantidad</th>
				<th width="420px">Comentario</th>
				@can('events.edit')
				<th width="8px">Borrar</th>
				@endcan
			</tr>
		</thead>

		<tbody>

			@foreach($event->menus as $menu)
			<tr>
				<td>{{ $menu->nombre}}</td>
				<td>{{ $menu->pivot->cantidad}}</td>
				<td>{{ $menu->pivot->comentario}}</td>
				<td>
					@can('events.edit')
					{!! Form::open(['route' => ['events.destroyMenu', $event, $menu],
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

	@can('events.edit')

	<div>
		<spam>Añadir menus al evento</spam>

	</div>
	<div class="dropdown text-center">



		<div class="border border-primary rounded p-2">

			<strong class="">

				@foreach($diffs as $diff)
				{!! Form::model($diff, ['route'=>['events.addMenu', $event->id, $diff],
				'method'=>'PUT']) !!}

				{!! Form::checkbox('menu', $diff->id)!!}
				{!! Form::label('menu', $diff->nombre)!!}


				@endforeach

			</strong>

			<div class="">
				<strong>

					{!! Form::label('cantidad', 'cantidad')!!}
					{!! Form::text('cantidad', 1)!!}
					{!! Form::label('comentario', 'comentario')!!}
					{!! Form::text('comentario', null)!!}

					{!! Form::submit('Añadir Menu', ['class'=>'btn btn-primary '])!!}
					{!! Form::close() !!}

				</strong>
			</div>
		</div>

	</div>

	@endcan




</div>

<script>
	$(document).ready(function() {
		$('#tablaMenus').DataTable();
	});

</script>
