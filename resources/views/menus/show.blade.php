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
		<div class="panel-body ">

			<div class="card border border-primary rounded p-3">

				<div class="card-header">
					<h4><strong>Menu nombre:</strong> {{ $menu->nombre }} </h4>
					<h4><strong>Precio menu:</strong> {{ $menu->precio }} € </h4>

				</div>
				<table id="tablaAliments" class="table table-striped table-hover">

					<thead>
						<tr>

							<th>Nombre de Producto </th>
							<th>cantidad</th>
						</tr>
					</thead>
					<tbody>
						@foreach($menu->aliments as $aliment)
						<tr>
							<td>{{ $aliment->nombre}}</td>
							<td>{{ $aliment->cantidad}}</td>

						</tr>


						@endforeach





					</tbody>

				</table>



				<div class="row justify-content-center mb-3">
					<a class="btn btn-primary" href="{{ route('menus.index')}}">Volver</a>
				</div>
			</div>


		</div>





	</div>
</div>
<script>
	$(document).ready(function() {
		$('#tablaAliments').DataTable();
	});

</script>
@endsection
