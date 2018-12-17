@extends('\layouts.app')

@section('content')
<div class="container">
   
    <div class="panel panel-default">
    	
    	<div class="panel-heading">
    	
    		<h2 class="text-center">PRODUCTOS</h2>
    		
			@can('aliments.create')
				<a class="btn btn-primary" href="{{ route('aliments.create') }}">Nuevo Producto</a>
			@endcan	
   	
    	</div>
     	<div class="panel-body">
     		
     			<div class="card border border-primary rounded">

						<div class="card-header">						
							<h4><strong>Producto id:</strong> {{ $aliment->id }} </h4>
							
						</div>

						<div class="card-body">	
							<p class="card-title"><strong>Nombre :</strong> {{ $aliment->nombre }} </p>						 
							<p class="card-text"><strong>Descripcion :</strong> {{ $aliment->descripcion }} </p></p>
							<p class="card-text"><strong>Cantidad por menu:</strong> {{ $aliment->cantidad }} </p></p>
							
							<p class="text-muted">Fecha de creacion : {{ $aliment->created_at }}</p>
							<p class="text-muted">Ultima actualización : {{ $aliment->updated_at }}</p>
						</div>
		
		
							<div class="row justify-content-center mb-3">
							<a class="btn btn-primary" href="{{ route('aliments.index')}}">Volver</a>
							</div>
				</div>
     		
     		
     	</div>
     	
     	
      	
      	
        
    </div>
</div>
@endsection