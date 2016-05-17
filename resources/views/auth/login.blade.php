@extends('vet.vetapp')
@section('content')
<main>
			<div class="panel panel-default">
				<div class="panel-heading">Ingrese su e-mail y contraseña</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							 Error<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('./') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-mail</label>
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
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Recuerdame
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Ingresar</button>
								<a href="{{ url('./registre') }}" class="btn btn-primary registrar">Registrese</a>
								<a class="btn btn-link" href="{{ url('/password/email') }}">¿Olvido contraseña?</a>
							</div>
						</div>
					</form>
				</div>
	</div>
</main>
@endsection
