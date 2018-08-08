@extends('home')

@section('contenido')
<br><br>
	<h1>Administracion Sgos Bovedas</h1>
	<a href="{{ route('bovedas.create')}}" class="btn btn-primary" style="margin-bottom: 0.9%">Crear Boveda</a>
	<table class="table table-condensed">
		<thead class="thead-dark">
			<tr>
				<th>Id</th>
				<th>Id Propiedad</th>
				<th>descripcion Boveda</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody class="thead-light">
			@foreach($bovedas as $boveda)
			<tr>
				<td >{{ $boveda->id_boveda }}</td>
				<td >{{ $boveda->id_propiedad }}</th>
				<td style="font-weight: bold;">{{ $boveda->desc_boveda }}</td>
				<td>
					<a href="{{route('bovedas.edit', $boveda->id_boveda)}}" class="btn btn-info btn-xs">editar</a>
					<form method="POST" action="{{route('bovedas.destroy', $boveda->id_boveda)}}" style="display:inline;">
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