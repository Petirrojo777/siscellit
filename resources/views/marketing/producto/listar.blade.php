@extends('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Productos</h3>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="table-responsive">
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Foto</th>
							<th>Precio</th>
						</tr>
					</thead>
					<tbody>
						@foreach($productos as $item)
						<tr>
							<td>{{$item->ID_PROD}}</td>
							<td>{{$item->NOM_PROD}}</td>
							<td>{{$item->PIC_PROD}}</td>
							<td>{{$item->PRE_PROD}}</td>
							<td>
								<a href=""><button class="btn btn-info">Editar</button>
								<a href=""><button class="btn btn-danger">Eliminar</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			{!!$productos-> render()!!}
		</div>
	</div>

		
</div>
@endsection