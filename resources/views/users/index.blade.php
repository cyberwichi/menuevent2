@extends('\layouts.app')


@section ('content')



<div class="container">
	<h2 class="text-center">USUARIOS</h2>

	<!--		paginacion-->
	{{ $users->render()}}

	<div class="row justify-content-center container">

		@if (session('status'))
		<div class="alert alert-success" role="alert">
			{{ session('status') }}
		</div>
		@endif
		<style>


		</style>
		<div class="card-columns ">
			@foreach($users as $user)

			<div class="card card2 border border-primary rounded ">

				<div class="card-header">
					<h4><strong>Usuario id:</strong> {{ $user->id }} </h4>

				</div>

				<div class="card-body">

					<p class="card-title"><strong>Nombre :</strong> {{ $user->name }}</p>

				</div>

				<div class='m-2 d-flex justify-content-around'>



					@can('users.show')

					<a href="{{ route('users.show', $user->id) }}" title="Ver Usuario" class="btn btn-sm btn-success  "><i class="fas fa-eye"></i></a>

					@endcan

					@can('users.edit')

					<a href="{{ route('users.edit', $user->id) }}" title="Editar usuario" class="btn btn-sm btn-primary  "><i class="fas fa-marker"></i></a>

					@endcan

					@can('users.destroy')

					{!! Form::open(['route'=> ['users.destroy', $user->id],
					'method' => 'DELETE' ]) !!}

					<button title="Eliminar usuario" class="btn  btn-danger fas fa-trash-alt "></button>


					{!! Form::close() !!}


					@endcan


				</div>


			</div>
			@endforeach

		</div>
	</div>
	{{ $users->render()}}
	</ div>

	@endsection
