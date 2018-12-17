@extends('\layouts.app')


@section ('content')



<div class="container">
	<h2 class="text-center">ROLES</h2>
	<h3 class="text-center">NUEVO ROL</h3>
	<div class="card border border-primary rounded">

		<div class="card-header">


		</div>

		<div class="card-body">

			{!! Form::open(['route'=>'roles.store']) !!}

			@include('roles.partials.form')

			{!! Form::close() !!}

		</div>



	</div>
</div>

@endsection
