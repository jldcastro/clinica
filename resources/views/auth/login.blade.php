@extends('layouts.base')

@section('title','Iniciar sesión usuario')

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
        <h1>Iniciar Sesión</h1>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <p><input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Ingrese Email"></p>
                </div>

                <div class="form-group">
                    <p><input type="password" class="form-control" name="password" value="" placeholder="Ingrese Contraseña"></p>
                </div>

              <div class="form-group">
                <p class="remember_me">
                    <label>
                        <input type="checkbox" name="remember" id="remember_me">
                        Recuerdame en este computador
                    </label>
                </p>
              </div>

              <div class="form-group">
                <p class="submit"><input type="submit" value="Iniciar sesión"></p>
              </div>

            </form>
         </div>
            <div class="login-help">
                <a href="{{ url('/password/email') }}">Olvidaste tu contraseña?</a>
                <a href="{{ url('/auth/register') }}">Registrarse</a>
            </div>
        </div>
</section>

@endsection