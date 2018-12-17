@extends('\layouts.app')


@section ('content')

	
	
	<div class="container">
		<h2>Producto</h2>
		<div class="card border border-primary rounded">

						<div class="card-header">						
							<h4><strong>Producto id:</strong> {{ $aliment->id }} </h4>
							
						</div>

						<div class="card-body">	
							
							{!! Form::model($aliment, ['route'=>['aliments.update', $aliment->id],
							'method'=>'PUT']) !!}
							
								@include('aliments.layouts.form')
							
							{!! Form::close() !!}
							
						</div>
		
		
		
	</div>

@endsection