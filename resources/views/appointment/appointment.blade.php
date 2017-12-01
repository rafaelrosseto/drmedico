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
				        	<select name="date" class="mb-3 form-control custom-select">
				        		<option>Mustard</option>
							    <option>Ketchup</option>
							    <option>Relish</option>
				        	</select>
				        </div>
		        	</div>

		        	<div class="form-group">
						<label class="col-sm-2 control-label" for="date">Data da consulta</label>
						<div class="col-md-10">
				        	<select name="date" class="mb-3 form-control custom-select">
							  <optgroup label="Picnic">
							    <option>Mustard</option>
							    <option>Ketchup</option>
							    <option>Relish</option>
							  </optgroup>
							  <optgroup label="Camping">
							    <option>Tent</option>
							    <option>Flashlight</option>
							    <option>Toilet Paper</option>
							  </optgroup>
							</select>
						</div>
		        	</div>

		        	<div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Descrição (sintomas)</label>
            <div class="col-sm-10">
              <textarea class="form-control" style="max-width: 756px;" rows="4"></textarea>
            </div>
          </div>


		        </div>

		        <div class="panel-footer panel-custom text-center">
						<a href="/appointment" class="btn btn-info" role="button">Marcar consulta</a>
						<a href="/history" class="btn btn-default" role="button">Cancelar</a>
					</div>
		    </div>
		</div>
	</form>
	</div>
</div>


@endsection