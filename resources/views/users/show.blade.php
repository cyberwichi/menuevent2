@extends('\layouts.app')


@section ('content')



<div class="container">
	<h2 class="text-center">USUARIOS</h2>

	<div class="card border border-primary rounded">

		<div class="card-header">
			<h4><strong>Usuario id:</strong> {{ $user->id }} </h4>

		</div>

		<div class="card-body">
			<p class="card-title"><strong>Nombre :</strong> {{ $user->name }}</p>
			<p class="card-text"><strong>Correo electronico :</strong> {{ $user->email }}</p>
			</p>

			<p class="text-muted">Fecha de alta : {{ $user->created_at }}</p>
			<p class="text-muted">Ultima actualización : {{ $user->updated_at }}</p>
		</div>


		<div class="row justify-content-center">
			<a class="btn btn-primary" href="{{ route('users.index')}}">Volver</a>
		</div>
	</div>

	@endsection
