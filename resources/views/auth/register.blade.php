@extends('layouts.base')

@section('title','Registrar nuevo usuario')

@section('contenido')

<section class="container">

    @if (count($errors) > 0)
        <div class="alert alert-danger">
    	    <strong>Whoops!</strong> Hubo algunos problemas con tu entrada.<br><br>
    		    <ul>
    			    @foreach ($errors->all() as $error)
    				<li>{{ $error }}</li>
    				@endforeach
    			</ul>
    	</div>
    @endif

    <div class="login">
            <h1>Registrar nuevo cliente</h1>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nombre</label>
                        	<div class="col-md-6">
                    	    	<input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    		</div>
                    </div>

                    <div class="form-group">
                    	<label class="col-md-4 control-label">Correo Electrónico</label>
                    		<div class="col-md-6">
                    			<input type="email" class="form-control" name="email" value="{{ old('email') }}">
                    		</div>
                    </div>

                    <div class="form-group">
                    	<label class="col-md-4 control-label">Contraseña</label>
                    		<div class="col-md-6">
                    			<input type="password" class="form-control" name="password">
                    		</div>
                    </div>

                    <div class="form-group">
    					<label class="col-md-4 control-label">Confirmar contraseña</label>
    						<div class="col-md-6">
    							<input type="password" class="form-control" name="password_confirmation">
    						</div>
    				</div>

                    <br>
    				<div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <p class="submit"><input type="submit" value="Registrarse"></p>
                    </div>

                    </div>
                </form>
    </div>

</section>

@endsection