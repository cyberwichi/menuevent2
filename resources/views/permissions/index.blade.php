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
     		
     		<table class="table table-striped table-hover">
     			
     			<thead>
     				<tr>
     					<th width="10px">ID </th>
     					<th>Nombre de Producto </th>
     					<th colspan="3"></th>
     					
     				</tr>
     				
     			</thead>
     			
     			<tbody>
     			
     				@foreach($aliments as $aliment)
     				<tr>
     				
     					<td>{{ $aliment->id }} </td>
     					<td>{{ $aliment->nombre }} </td>
						
     					<td>
     					@can('aliments.show')
     					<a class="btn btn-primary" href="{{ route('aliments.show',  $aliment->id ) }}">ver</a>
     					@endcan
     				
						</td>
    					<td>
     					@can('aliments.edit')
     					<a class="btn btn-primary" href="{{ route('aliments.edit', $aliment->id) }}">editar</a>
     					@endcan
						</td>
     					<td>
     					@can('aliments.destroy')
     					{!! Form::open(['route' => ['aliments.destroy', $aliment->id],
     						'method' => 'DELETE']) !!}
     						<button class="btn btn-danger">eliminar</button>
     						{!! Form::close()!!}
     					
     					@endcan

     					
     					</td>
     					
     				</tr>
     				@endforeach
     				
     				
     			</tbody>
     			
     		</table>
     		
     		
     	</div>
     	
     	
      	
      	
        
    </div>
</div>
@endsection



















