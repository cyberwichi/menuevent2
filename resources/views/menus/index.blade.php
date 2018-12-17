@extends('\layouts.app')

@section('content')
<div class="container">

	<div class="panel panel-default">

		<div class="panel-heading">

			<h2 class="text-center">MENUS</h2>

			@can('menus.create')
			<a class="btn btn-primary" href="{{ route('menus.create') }}">Nuevo Menu</a>
			@endcan

		</div>
		<div class="panel-body">

			<table id="tablaMenus" class="table table-striped table-hover">

				<thead>
					<tr>

						<th width="61%">Nombre de menu </th>
						<th width="15px">Precio</th>

						<th width="8%">Ver</th>
						@can('menus.edit')
						<th width="8%">Editar</th>
						@endcan
						@can('menus.destroy')
						<th width="8%">Borrar</th>
						@endcan
					</tr>

				</thead>

				<tbody>

					@foreach($menus as $menu)
					<tr>


						<td>{{ $menu->nombre }} </td>
						<td>{{ $menu->precio }}</td>


						<td>
							@can('menus.show')
							<a class="btn btn-primary" href="{{ route('menus.show',  $menu->id ) }}"><i class="fas fa-eye"></i></a>
							@endcan

						</td>
						<td>
							@can('menus.edit')
							<a class="btn btn-primary" href="{{ route('menus.edit', $menu->id) }}"><i class="fas fa-marker"></i></a>
							@endcan
						</td>
						<td>
							@can('menus.destroy')
							{!! Form::open(['route' => ['menus.destroy', $menu->id],
							'method' => 'DELETE']) !!}
							<button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
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
		$('#tablaMenus').DataTable();
	});

</script>
@endsection
