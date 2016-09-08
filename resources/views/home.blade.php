@extends('app')

@section('content')
@if(Session::has('question'))
<div class="alert alert-danger">
	<strong>Whoops!</strong> Al parecer algo salió mal. <br><br>
	{{Session::get('question')}}
</div>
@endif

@if(Session::has('updated'))
<div class="alert alert-succes">
	<strong>En hora buena.</strong> Su perfil ha sido actualizado <br><br>
	{{Session::get('updated')}}
</div>
@endif

@if(Session::has('recovered'))
<div class="aler alert-succes">
	{{-- <strong>Whoops!</strong> Al parecer algo esta mal <br><br> --}}
	{{Session::get('recovered')}}
</div>
@endif

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Inicio</div>

				<div class="panel-body">
					Bienvenido {{Auth::user()->name}}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
