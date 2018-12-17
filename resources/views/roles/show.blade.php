@extends('\layouts.app')


@section ('content')



<div class="container">
	<h2 class="text-center">ROLES</h2>
	<div class="card border border-primary rounded">

		<div class="card-header">
			<h4><strong>Rol id:</strong> {{ $role->id }} </h4>

		</div>

		<div class="card-body">
			<p class="card-title"><strong>Nombre :</strong> {{ $role->name }}</p>
			<p class="card-title"><strong>Slug :</strong> {{ $role->slug }}</p>

			<p class="card-text"><strong>Descripcion :</strong> {{ $role->description }}</p>
			</p>

			<p class="text-muted">Fecha de creacion : {{ $role->created_at }}</p>
			<p class="text-muted">Ultima actualización : {{ $role->updated_at }}</p>
		</div>


		<div class="row justify-content-center">
			<a class="btn btn-primary" href="{{ route('roles.index')}}">Volver</a>
		</div>
	</div>

	@endsection
