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
	<form action="{{ route('divisas.store')}}" method="POST">
	{{csrf_field()}}
	{{method_field('POST')}}
		<label for="id_propiedad" style="font-weight: bold;">Id Propiedad:	
		<input type="text" name="id_propiedad" id="id_propiedad" value="{{old('id_propiedad')}}" class="form-control">
		<hr>
		<label for="desc_divisa" style="font-weight: bold;">Descripcion Divisa:	
		<input type="text" name="desc_divisa" id="desc_divisa" value="{{old('desc_divisa')}}" class="form-control">
		<hr>
		<input type="submit" value="enviar" class="btn btn-primary">
	</form>
@stop