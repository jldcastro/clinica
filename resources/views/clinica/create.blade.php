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
    	

{!!Form::open(['route'=>'clinica.store', 'method'=>'POST'])!!}

<div class="form-group">
{!!Form::label('id','id:')!!}
{!!Form::text('id',null,['class'=>'form-control','placeholder'=>'ingres idClinica'])!!}
</div>
<div class="form-group">
{!!Form::label('direccionClinica')!!}
{!!Form::text('direccionClinica',null,['class'=>'form-control','placeholder'=>'ingres direccionClinica'])!!}
</div>
<div class="form-group">
{!!Form::label('comunaClinica')!!}
{!!Form::text('comunaClinica',null,['class'=>'form-control','placeholder'=>'ingres e comunaClinica'])!!}
</div>
<div class="form-group">
{!!Form::label('telefonoClinica')!!}
{!!Form::text('telefonoClinica',null,['class'=>'form-control','placeholder'=>'ingres e telefonoClinica'])!!}
</div>
<div class="form-group">
{!!Form::label('administradorClinica')!!}
{!!Form::text('administradorClinica',null,['class'=>'form-control','placeholder'=>'ingres e administradorClinica'])!!}
</div>		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

</main>

@endsection