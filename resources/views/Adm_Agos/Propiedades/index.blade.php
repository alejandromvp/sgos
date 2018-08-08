@extends('home')

@section('contenido')
<br><br>
	<h1>Administracion Sgos Propiedades</h1>
	<a href="{{ route('propiedades.create')}}" class="btn btn-primary" style="margin-bottom: 0.9%">Crear Propiedad</a>
	<table class="table table-condensed">
		<thead class="thead-dark">
			<tr>
				<th>Id</th>
				<th>descripcion Propiedad</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody class="thead-light">
			@foreach($propiedades as $propiedad)
			<tr >
				<td class="success">{{ $propiedad->id_propiedad }}</td>
				<td style="font-weight: bold;">{{ $propiedad->desc_propiedad }}</td>
				<td>
					<a href="{{route('propiedades.edit', $propiedad->id_propiedad)}}" class="btn btn-info btn-xs">editar</a>
					<form method="POST" action="{{route('propiedades.destroy', $propiedad->id_propiedad)}}" style="display:inline;">
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