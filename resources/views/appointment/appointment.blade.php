@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<form class="form-horizontal" role="form" method="post" action="/appointment">
		<div class="col-md-10 col-md-offset-1">
		    <div class="panel panel-default">
		        <div class="panel-heading">Marcar consulta</div>

		        <div class="panel-body">

		        	<div class="form-group">
		        		<label class="col-sm-2 control-label" for="specialty">Especialidade</label>
		        		<div class="col-md-10">
				        	<select name="specialty" class="mb-3 form-control custom-select">
				        		@foreach ($specialty as $spec)
				        			<option id="{{$spec['id']}}">{{$spec['name']}}</option>
				        		@endforeach
				        	</select>
				        </div>
		        	</div>

		        	<div class="form-group">
						<label class="col-sm-2 control-label" for="date">Data da consulta</label>
						<div class="col-md-10">
				        	<select name="date" class="mb-3 form-control custom-select">
				        		@foreach ($schedule as $sch)
									<optgroup label="{{$sch['date']}}">
										@foreach ($sch as $hour)
											<option id="{{$hour['id']}}">{{$hour['time']}}</option>
										@endforeach
									</optgroup>
								@endforeach
							</select>
						</div>
		        	</div>

		        	<div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Descrição (sintomas)</label>
            <div class="col-sm-10">
              <textarea name="description" class="form-control" style="max-width: 756px;" rows="4"></textarea>
            </div>
          </div>


		        </div>

		        <div class="panel-footer panel-custom text-center">
						<button class="btn btn-info" role="submit">Marcar consulta</button>
						<a href="/history" class="btn btn-default" role="button">Cancelar</a>
					</div>
		    </div>
		</div>
	</form>
	</div>
</div>


@endsection