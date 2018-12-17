@extends('\layouts.app')


@section ('content')



<div class="container">
	<h2 class="text-center">ROLES</h2>
	<h3 class="text-center">EDITAR ROL</h3>
	<div class="card border border-primary rounded">

		<div class="card-header">
			<h4><strong>Rol id:</strong> {{ $role->id }} </h4>

		</div>

		<div class="card-body">

			{!! Form::model($role, ['route'=>['roles.update', $role->id],
			'method'=>'PUT']) !!}

			@include('roles.partials.form')

			{!! Form::close() !!}

		</div>


		<div class="row justify-content-center">
		</div>
	</div>

	@endsection
