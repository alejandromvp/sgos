@extends('home')

@section('contenido')
<br><br>
	<h1>Administracion Sgos Bancos</h1>
	<a href="{{ route('bancos.create')}}" class="btn btn-primary" style="margin-bottom: 0.9%">Crear Banco</a>
	<table class="table table-condensed">
		<thead class="thead-dark">
			<tr>
				<th>Id</th>
				<th>Id Propiedad</th>
				<th>descripcion Banco</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody class="thead-light">
			@foreach($bancos as $banco)
			<tr>
				<td >{{ $banco->id_banco }}</td>
				<td >{{ $banco->id_propiedad }}</th>
				<td style="font-weight: bold;">{{ $banco->desc_banco }}</td>
				<td>
					<a href="{{route('bancos.edit', $banco->id_banco)}}" class="btn btn-info btn-xs">editar</a>
					<form method="POST" action="{{route('bancos.destroy', $banco->id_banco)}}" style="display:inline;">
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