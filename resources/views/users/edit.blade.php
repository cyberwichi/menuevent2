@extends('\layouts.app')


@section ('content')



<div class="container">
	<h2 class="text-center">USUARIOS</h2>
	<h3 class="text-center">EDITAR USUARIO</h3>
	<div class="card border border-primary rounded">

		<div class="card-header">
			<h4><strong>Usuario id:</strong> {{ $user->id }} </h4>

		</div>


		<div class="card-body">

			{!! Form::model($user, ['route'=>['users.update', $user->id],
			'method'=>'PUT']) !!}

			@include('users.partials.form')

			{!! Form::close() !!}

		</div>





	</div>

	@endsection
