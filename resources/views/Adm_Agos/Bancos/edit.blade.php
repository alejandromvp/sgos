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
<h1>Editar Banco:  {{ $banco->desc_banco }} </h1>
	<form action="{{ route('bancos.update', $banco->id_banco) }}" method="POST">
	{{csrf_field()}}
	{{method_field('PUT')}}
		<label for="desc_banco">
			Nombre
		<input type="text" name="desc_banco" id="desc_banco" value="{{$banco->desc_banco }}" class="form-control">
		<hr>
		<input type="submit" value="enviar" class="btn btn-primary">
	</form>
@stop