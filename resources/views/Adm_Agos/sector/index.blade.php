@extends('home')

@section('contenido')
<br><br>
	<h1>Administracion Sgos Sectores</h1>
	<a href="{{ route('sectores.create')}}" class="btn btn-primary" style="margin-bottom: 0.9%">Crear Sector</a>
	<table class="table table-condensed">
		<thead class="thead-dark">
			<tr>
				<th>Id</th>
				<th>Id Propiedad</th>
				<th>descripcion Sector</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody class="thead-light">
			@foreach($sectores as $sector)
			<tr>
				<td >{{ $sector->id_sector }}</td>
				<td >{{ $sector->id_propiedad }}</th>
				<td style="font-weight: bold;">{{ $sector->desc_sector }}</td>
				<td>
					<a href="{{route('sectores.edit', $sector->id_sector)}}" class="btn btn-info btn-xs">editar</a>
					<form method="POST" action="{{route('sectores.destroy', $sector->id_sector)}}" style="display:inline;">
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