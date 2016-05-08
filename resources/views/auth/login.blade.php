@extends('layouts.base')

@section('title','Iniciar sesión usuario')

@section('contenido')

<section class="container">
    <div class="login">
        <h1>Iniciar Sesión</h1>
            <form method="post" action="index.html">
                <p><input type="text" name="login" value="" placeholder="Ingrese Email"></p>
                <p><input type="password" name="password" value="" placeholder="Ingrese Contraseña"></p>
              <p class="remember_me">
                <label>
                <input type="checkbox" name="remember_me" id="remember_me">
                Recuerdame en este computador
                </label>
              </p>
            <p class="submit"><input type="submit" name="commit" value="Iniciar sesión"></p>
            </form>
    </div>
    <div class="login-help">
        <a href="index.html">Olvidaste tu contraseña?</a>
    </div>
</section>

@endsection