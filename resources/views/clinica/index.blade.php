@extends('vet.vetapp')
@section('content')

 <aside>
    	<h4>Menu</h4>
    	<hr class="lol">
    	<ul>
    		<a href="{{ url('./vet') }}"><li><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Inicio</li></a>
    		<a href="#"><li><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Usuarios</li></a>
    		<a href="#"><li><span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;Catalogo</li></a>
    		<a href="{{ url('./clinica') }}"><li><span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;clinica</li></a>
          
                
            </li>
    	
    		<a href="{{ url('./logout') }}"><li><span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;Salir</li></a>
    	</ul>
    </aside>
     <main>



					
<table class="table">
		<thead>
			<th>idClinica</th>
			<th>direccionClinica</th>
			<th>comunaClinica</th>
			<th>telefonoClinica</th>
			<th>administrador</th>
		</thead>
		@foreach($clinicas as $clinica)
			<tbody>
				<td>{{$clinica->id}}</td>
				<td>{{$clinica->direccionClinica}}</td>
				<td>{{$clinica->comunaClinica}}</td>
				<td>{{$clinica->telefonoClinica}}</td>
				<td>{{$clinica->administradorClinica}}</td>
<td>
					

						{!!link_to_route('clinica.edit', $title = 'Editar', $parameters = $clinica
					, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>


<td>
					

						{!!Form::open(['route'=>['clinica.destroy', $clinica], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
				</td>
				

			</tbody>
		@endforeach
	</table>

<div>
	{!!Form::open(['route'=>['clinica.create']])!!}
			{!!Form::submit('Cear una nueva clinica ',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}
</div>

</main>
@endsection