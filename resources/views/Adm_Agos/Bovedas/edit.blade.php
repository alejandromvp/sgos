@extends('home')

@section('contenido')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h1>Editar Boveda:  {{ $boveda->desc_boveda }} </h1>
	<form action="{{ route('bovedas.update', $boveda->id_boveda) }}" method="POST">
	{{csrf_field()}}
	{{method_field('PUT')}}
		<label for="desc_boveda">
			Nombre
		<input type="text" name="desc_boveda" id="desc_boveda" value="{{$boveda->desc_boveda }}" class="form-control">
		<hr>
		<input type="submit" value="enviar" class="btn btn-primary">
	</form>
@stop