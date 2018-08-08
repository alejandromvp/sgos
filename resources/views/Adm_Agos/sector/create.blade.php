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
<h1>Crear Sector</h1>
	<form action="{{ route('sectores.store')}}" method="POST">
	{{csrf_field()}}
	{{method_field('POST')}}
	
		<label for="id_propiedad" style="font-weight: bold;">Id Propiedad:	
		<select class="form-control" name="id_propiedad">
			@foreach ($propiedades as $propiedad)
                <option >{{$propiedad->id_propiedad}}</option>
            @endforeach
		</select>
		<hr>
		<label for="desc_sector" style="font-weight: bold;">Descripcion Sector:	
		<input type="text" name="desc_sector" id="desc_sector" value="{{old('desc_sector')}}" class="form-control">
		<hr>
		<input type="submit" value="enviar" class="btn btn-primary">
	</form>
@stop