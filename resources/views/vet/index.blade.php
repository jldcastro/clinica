@extends('vet.vetapp')


@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif


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
    	<h2>&nbsp;Inicio</h2><br>
    	<h3><strong>"Bienvenido al sistema de gestión de la Clínica Universidad del Bío-Bío"</strong></h3><br>
    	<p><strong>&nbsp; Hoy es <?php echo date('d-m-Y').'<br>&nbsp;&nbsp;La hora es '.date('H:i',time() - 10800); ?></strong></p>
    </main>
@endsection