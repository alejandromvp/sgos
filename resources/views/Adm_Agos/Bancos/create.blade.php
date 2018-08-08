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
<h1>Crear banco</h1>
	<form action="{{ route('bancos.store')}}" method="POST">
	{{csrf_field()}}
	{{method_field('POST')}}
		{{-- <label for="id_propiedad" style="font-weight: bold;">Id Propiedad:	
		<input type="text" name="id_propiedad" id="id_propiedad" value="{{old('id_propiedad')}}" class="form-control"> --}}
		<label for="id_propiedad" style="font-weight: bold;">Id Propiedad:	
		<select class="form-control" name="id_propiedad">
			@foreach ($propiedades as $propiedad)
                <option >{{$propiedad->id_propiedad}}</option>
            @endforeach
		</select>

		<hr>
		<label for="desc_banco" style="font-weight: bold;">Descripcion Boveda:	
		<input type="text" name="desc_banco" id="desc_banco" value="{{old('desc_banco')}}" class="form-control">
		<hr>
		<input type="submit" value="enviar" class="btn btn-primary">
	</form>
@stop