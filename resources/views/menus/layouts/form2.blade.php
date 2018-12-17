<div class="container mt-3">

	<table id="tablaAliments2" class="table table-striped table-hover">

		<thead>
			<tr>

				<th>Nombre de Producto </th>
				<th>Cantidad</th>
				<th width="8px">Borrar</th>
			</tr>
		</thead>

		<tbody>

			@foreach($menu->aliments as $aliment)
			<tr>
				<td>{{ $aliment->nombre}}</td>
				<td>{{ $aliment->cantidad}}</td>
				<td>
					@can('menus.destroy')
					{!! Form::open(['route' => ['menus.destroyAliment', $menu, $aliment],
					'method' => 'DELETE']) !!}
					<button class="btn btn-danger " data-toggle="tooltip" data-placement="top" title="Eliminar producto del menu"> <i class="fas fa-trash-alt"></i>
					</button>
					{!! Form::close()!!}

					@endcan
				</td>
			</tr>

			@endforeach

		</tbody>

	</table>

	@can('menus.edit')

	<div>


	</div>
	<div class="dropright mb-5 ">
		<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Añadir platos al menu
		</button>
		<div class="dropdown-menu " aria-labelledby="dropdownMenuButton">

			@foreach($diffs as $diff)


			{!! Form::open(['route' => ['menus.addAliment', $menu, $diff],
			'method' => 'PUT']) !!}

			{!! Form::submit($diff->nombre, ['class'=>'btn btn-success btn-block border border-dark'])!!}





			{!! Form::close()!!}
			@endforeach
		</div>
	</div>

	@endcan




</div>

<script>
	$(document).ready(function() {
		$('#tablaAliments2').DataTable();
	});

</script>
