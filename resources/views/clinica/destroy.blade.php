@extends('vet.vetapp')
@section('content')

{!!Form::open(['route'=>['clinica.destroy', $clinica], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection