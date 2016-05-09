@extends('layouts.base')

@section('title','Restablecer contraseña')

@section('contenido')

<section class="container">
    @if (session('status'))
        <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
	    <strong>Whoops!</strong> There were some problems with your input.<br><br>
	    <ul>
	        @foreach ($errors->all() as $error)
		        <li>{{ $error }}</li>
		    @endforeach
	    </ul>
	    </div>
    @endif

    <div class="login">
        <h1>Restablecer Contraseña</h1>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label class="col-md-4 control-label">Correo Electrónico</label>
    	            <div class="col-md-6">
    		            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
    		        </div>
            </div>

            <br>
        		<div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                       <p class="submit"><input type="submit" value="Enviar contraseña"></p>
                    </div>
                </div>

            </form>
    </div>
</section>

@endsection