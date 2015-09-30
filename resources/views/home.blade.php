@extends('app')
 
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Consulta de Puestos de Votacion</div>
					<div class="form-group">
					</div>
					<div class="form-group" align="center">
						{!! Form::open(array('action' => 'HomeController@consultar',
						'class' => 'form-inline',
						'method' => 'get')) !!}
							{!! Form::text('cedula', null, array(
							'id'      => 'cedula',
							'class'    => 'form-control',
							'placeholder' => 'Cedula'
							)) !!}
							{!! Form::submit('Consultar', array(							
							'class'    => 'btn btn-info',							
							)) !!}							
						{!! Form::close() !!}
						<!--
						<form class="form-inline" role="form">
							<input type="text" class="form-control" id="cedula" placeholder="Cedula">
							<input type="submit" class="btn btn-default">
						</form>
						-->
					</div>
			</div>
		</div>
	</div>
</div>
@endsection

 
