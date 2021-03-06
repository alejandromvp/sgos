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
<h1>editar propiedad:  {{ $propiedad->desc_propiedad }} </h1>
	<form action="{{ route('propiedades.update', $propiedad->id_propiedad) }}" method="POST">
	{{csrf_field()}}
	{{method_field('PUT')}}
		<label for=""> id_propiedad</label>
		<input type="text" name="id_propiedad" id="id_propiedad" value="{{$propiedad->id_propiedad }}" class="form-control" disabled>
		<label for="desc_propiedad">
			Descripcion propiedad
		<input type="text" name="desc_propiedad" id="desc_propiedad" value="{{$propiedad->desc_propiedad }}" class="form-control">
		<hr>
		<input type="submit" value="enviar" class="btn btn-primary">
	</form>
@stop