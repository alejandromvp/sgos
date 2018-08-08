@extends('home')

@section('contenido')
<h1>Propiedad actualizada correctamente</h1>

	<table class="table table-condensed">
		<thead class="thead-dark">
			<tr>
				<th>Id</th>
				<th>descripcion Propiedad</th>
			</tr>
		</thead>
		<tbody class="thead-light">
			<tr >
				<td style="background: white;font-weight: bold;">{{ $propiedad->id_propiedad }}</td>
				<td style="background: white;font-weight: bold;">{{ $propiedad->desc_propiedad }}</td>
		</tbody>
	</table>
	
	<a href="{{route('propiedades.index')}}" class="btn btn-primary">Regresar al inicio</a>
@stop



