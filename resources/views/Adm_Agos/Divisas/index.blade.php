@extends('home')

@section('contenido')
<br><br>
	<h1>Administracion Sgos divisas</h1>
	<a href="{{ route('divisas.create')}}" class="btn btn-primary" style="margin-bottom: 0.9%">Crear divisa</a>
	<table class="table table-condensed">
		<thead class="thead-dark">
			<tr>
				<th>Id</th>
				<th>Id Propiedad</th>
				<th>descripcion divisa</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody class="thead-light">
			@foreach($divisas as $divisa)
			<tr>
				<td >{{ $divisa->id_divisa }}</td>
				<td >{{ $divisa->id_propiedad }}</th>
				<td style="font-weight: bold;">{{ $divisa->desc_divisa }}</td>
				<td>
					<a href="{{route('divisas.edit', $divisa->id_divisa)}}" class="btn btn-info btn-xs">editar</a>
					<form method="POST" action="{{route('divisas.destroy', $divisa->id_divisa)}}" style="display:inline;">
						{{method_field('DELETE')}}
						{{csrf_field()}}
						<button type="submit" class="btn btn-danger">Eliminar</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@stop