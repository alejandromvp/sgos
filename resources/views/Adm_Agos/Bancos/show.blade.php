@extends('home')

@section('contenido')
<h1>Banco actualizada correctamente</h1>

	<table class="table table-condensed">
		<thead class="thead-dark">
			<tr>
				<th>Id</th>
				<th>id Propiedad</th>
				<th>descripcion Banco</th>
			</tr>
		</thead>
		<tbody class="thead-light">
			<tr >
				<td style="background: white;font-weight: bold;">{{ $bancos->id_banco }}</td>
				<td style="background: white;font-weight: bold;">{{ $bancos->id_propiedad }}</td>
				<td style="background: white;font-weight: bold;">{{ $bancos->desc_banco }}</td>
		</tbody>
	</table>
	
	<a href="{{route('bancos.index')}}" class="btn btn-primary">Regresar al inicio</a>
@stop



