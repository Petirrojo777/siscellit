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
							<th>NOMBRE</th>
							<th>FOTO</th>
							<th>PRECIO</th>
						</tr>
					</thead>
					<tbody>
						@foreach($productos as $item)
						<tr>
							<td>{{$item->ID_PRODUCTO}}</td>
							<td>{{$item->NO_PRODUCTO}}</td>
							<td><img src={{$item->PIC_PRODUCTO}} alt="Logo"></td>
							<td>{{$item->PRE_PRODUCTO}}</td>
							<td>
								<a href=""><button class="btn btn-info">Agregar al carrito</button>
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