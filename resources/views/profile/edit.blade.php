@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form class="form-horizontal" role="form" method="post" action="/edit">
        <fieldset>
        	{{csrf_field()}}
          <!-- Form Name -->
          <legend>Detalhes de cadastro</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Nome</label>
            <div class="col-sm-10">
              <input type="text" name="name" placeholder="Nome" class="form-control" value="{{$client['name']}}" disabled="true">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">E-mail</label>
            <div class="col-sm-10">
              <input type="text" name="email" placeholder="E-mail" class="form-control" value="{{$client['email']}}" disabled="true">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Data de nascimento</label>
            <div class="col-sm-10">
              <input type="date" name="birth_date" placeholder="Data de nascimento" class="form-control" value="{{$client['birth_date']}}">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Altura</label>
            <div class="col-sm-4">
              <input type="text" name="height" placeholder="Altura" class="form-control">
            </div>

            <label class="col-sm-2 control-label" for="textinput">Peso</label>
            <div class="col-sm-4">
              <input type="text" name="weight" placeholder="Peso" class="form-control">
            </div>
          </div>


          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div>
</div>


@endsection
