@extends('layouts.app')

@section('contentheader_title')
	
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					@foreach ($nombre as $ev3)
    					{{$ev3->ruta}}
    				@endforeach


					@if ($nombre=='motormediano')
						<embed src="/aulaConocimiento/resources/docs_blocks/Accion/Bloque Motor mediano.pdf" type="application/pdf" width="800" height="700"></embed>	
					@elseif($nombre=='motorgrande')
						<embed src="/aulaConocimiento/resources/docs_blocks/Accion/Bloque Motor grande.pdf" type="application/pdf" width="800" height="700"></embed>		
					@elseif($nombre=='moverdireccion')
						<embed src="/aulaConocimiento/resources/docs_blocks/Accion/Bloque Mover la dirección.pdf" type="application/pdf" width="800" height="700"></embed>		
					
					@endif
				</div>
			</div>
		</div>
	</div>
@endsection
