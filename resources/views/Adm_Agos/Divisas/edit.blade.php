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
<h1>Editar Boveda:  {{ $divisa->desc_divisa }} </h1>
	<form action="{{ route('divisas.update', $divisa->id_divisa) }}" method="POST">
	{{csrf_field()}}
	{{method_field('PUT')}}
		<label for="desc_divisa">
			Nombre
		<input type="text" name="desc_divisa" id="desc_divisa" value="{{$divisa->desc_divisa }}" class="form-control">
		<hr>
		<input type="submit" value="enviar" class="btn btn-primary">
	</form>
@stop