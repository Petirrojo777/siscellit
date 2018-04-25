@extends('layouts.admin')

@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Productos</div>

				<div class="panel-body">

					<div class="row">
						@foreach($productos as $item)
						<div class="item col-xs-4 col-lg-4">
							<div class="thumbnail">
								<img class="group list-group-image" src={{$item->PIC_PRODUCTO}} alt="LOGO" />
								<div class="caption">
									<h4 class="group inner list-group-item-heading">
										{{$item->NO_PRODUCTO}}</h4>
										<p class="group inner list-group-item-text">
											{{$item->PRE_PRODUCTO}}</p>
										<div class="row">

											<div class="col-xs-12 col-md-6">
												<a class="btn btn-success" href="#">Agregar al carrito</a>
											</div>
										</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					<p>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection