@extends('home')

@section('contenido')
<h1>Divisas actualizada correctamente</h1>

	<table class="table table-condensed">
		<thead class="thead-dark">
			<tr>
				<th>Id</th>
				<th>id Propiedad</th>
				<th>descripcion Divisa</th>
			</tr>
		</thead>
		<tbody class="thead-light">
			<tr >
				<td style="background: white;font-weight: bold;">{{ $boveda->id_boveda }}</td>
				<td style="background: white;font-weight: bold;">{{ $boveda->id_propiedad }}</td>
				<td style="background: white;font-weight: bold;">{{ $boveda->desc_divisa }}</td>
		</tbody>
	</table>
	
	<a href="{{route('divisas.index')}}" class="btn btn-primary">Regresar al inicio</a>
@stop



