@extends('\layouts.app')
@section ('content')
<div class="container">
	<h2 class="text-center">USUARIOS</h2>
	<h3 class="text-center">NUEVO USUARIO</h3>
	<div class="card border border-primary rounded">
		<div class="card-body">

			{!! Form::open(['route'=>'users.store']) !!}
			@include('users.partials.form')
			{!! Form::close() !!}

		</div>
	</div>
</div>
@endsection
