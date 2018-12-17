@extends('\layouts.app')

@section('content')
<div class="container">

	<div class="panel panel-default">

		<div class="panel-heading">

			<h2 class="text-center">PRODUCTOS</h2>

			@can('aliments.create')
			<a class="btn btn-primary" href="{{ route('aliments.create') }}">Nuevo Producto</a>
			@endcan

		</div>
		<div class="panel-body">

			<table id="tablaAliments" class="table table-striped table-hover">

				<thead>
					<tr>
						<th width="10px">ID </th>
						<th>Nombre de Producto </th>
						<th width="8px">Ver</th>
						@can('aliments.edit')
						<th width="8px">Editar</th>
						@endcan
						@can('aliments.destroy')
						<th width="8px">Borrar</th>
						@endcan

					</tr>

				</thead>

				<tbody>

					@foreach($aliments as $aliment)
					<tr>

						<td>{{ $aliment->id }} </td>
						<td>{{ $aliment->nombre }} </td>
						<div class=" ">

							<td>
								@can('aliments.show')
								<a class="btn btn-primary" href="{{ route('aliments.show',  $aliment->id ) }}"><i class="fas fa-eye"></i></a>
								@endcan
							</td>
							<td>


								@can('aliments.edit')
								<a class="btn btn-primary" href="{{ route('aliments.edit', $aliment->id) }}"><i class="fas fa-marker"></i></a>
								@endcan
							</td>
							<td>
								@can('aliments.destroy')
								{!! Form::open(['route' => ['aliments.destroy', $aliment->id],
								'method' => 'DELETE']) !!}
								<button class="btn btn-danger ">
									<i class="fas fa-trash-alt"></i></a>

								</button>
								{!! Form::close()!!}

								@endcan
							</td>

						</div>




					</tr>
					@endforeach


				</tbody>

			</table>


		</div>





	</div>
</div>
<script>
	$(document).ready(function() {
		$('#tablaAliments').DataTable();
	});

</script>
@endsection
