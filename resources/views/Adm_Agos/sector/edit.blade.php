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
<h1>Editar Boveda:  {{ $sector->desc_sector }} </h1>
	<form action="{{ route('sectores.update', $sector->id_sector) }}" method="POST">
	{{csrf_field()}}
	{{method_field('PUT')}}
		<label for="desc_sector">
			Nombre
		<input type="text" name="desc_sector" id="desc_sector" value="{{$sector->desc_sector }}" class="form-control">
		<hr>
		<input type="submit" value="enviar" class="btn btn-primary">
	</form>
@stop