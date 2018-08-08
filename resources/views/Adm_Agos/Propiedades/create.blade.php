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
<h1>Crear propiedad</h1>
	<form action="{{ route('propiedades.store')}}" method="POST">
	{{csrf_field()}}
	{{method_field('POST')}}
		<label for="desc_propiedad" style="font-weight: bold;">Nombre Propiedad:	
		<input type="text" name="desc_propiedad" id="desc_propiedad" value="{{old('desc_propiedad')}}" class="form-control">
		<hr>
		<input type="submit" value="enviar" class="btn btn-primary">
	</form>
@stop