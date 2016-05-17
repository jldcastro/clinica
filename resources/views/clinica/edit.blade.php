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



		{!!Form::model($clinica,['route'=>['clinica.update',$clinica],'method'=>'PUT'])!!}


<h1>Editando la clinica con id: <?php echo $clinica->id; ?> </h1>

<div class="form-group">
		{!!Form::label('direccionClinica','Direccionclinica:')!!}
		{!!Form::text('direccionClinica',null,['class'=>'form-control','placeholder'=>'Ingresa la nueva direccion de la clinica'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('comunaClinica','Comunaclinica:')!!}
		{!!Form::text('comunaClinica',null,['class'=>'form-control','placeholder'=>'Ingresa la nueva comuna de la clinica'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('telefonoClinica','Telefonoclinica:')!!}
		{!!Form::text('telefonoClinica',null,['class'=>'form-control','placeholder'=>'Ingresa el nuevo telefono de la clinica'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('administradorClinica','Direcionclinica:')!!}
		{!!Form::text('administradorClinica',null,['class'=>'form-control','placeholder'=>'Ingrese el  nuevo administrador  de la clinica'])!!}
	</div>
	


	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

</main>
	@endsection