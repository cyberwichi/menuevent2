@extends('\layouts.app')


@section ('content')

	<div class="container">
		<h2>Producto</h2>
		<div class="card border border-primary rounded">

						<div class="card-header">						
							<h4><strong>Nuevo producto</strong>  </h4>
							
						</div>

						<div class="card-body">	
							
							{!! Form::open(['route'=>'aliments.store']) !!}
							
								@include('aliments.layouts.form')
							
							{!! Form::close() !!}
							
						</div>
		
		
		
	</div>

@endsection