@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	@if ($client['weight'] == null)
    	<div class="alert alert-warning">
    		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    		<strong>Complete seu cadastro!</strong> Clique <a href="/edit">aqui</a> para preencher outras informações e poder marcar consultas.
    	</div>
    	@endif
    	@isset ($warning_1)
    	<div class="alert alert-info">
    		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    		<strong>Atenção!</strong> Após completar seu cadastro pela primeira vez, as atualizações serão a partir dos dados de suas consultas.
    	</div>
    	@endisset
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bem vindo, {{$client['name']}}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Ficha</h3>
                    <dl class="dl-horizontal">
					  <dt>Nome:</dt>
					  <dd>{{$client['name']}}</dd>
					  <dt>Idade:</dt>
					  <dd>{{$client['age']}}</dd>
					  <dt>Data de nasc:</dt>
					  <dd>{{$client['birth_date']}}</dd>
					  <dt>Peso:</dt>
					  <dd>{{$client['weight']}}</dd>
					  <dt>Altura:</dt>
					  <dd>{{$client['height']}}</dd>
					</dl>
					<div class="row">
						<div class="col-md-12"><b>Última consulta:</b> @if ($client['last_appointment']) {{$client['last_appointment']}} @else Sem registros @endif</div>
					</div>
					

					


					<div class="panel-footer panel-custom text-center">
						<a href="/appointment" class="btn btn-info" role="button">Marcar consulta</a>
						<a href="/history" class="btn btn-info" role="button">Ver histórico</a>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
