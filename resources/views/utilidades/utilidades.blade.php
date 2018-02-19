@extends ('layouts.app')

@section('title', 'utilidades')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Ingreso datos</div>
        <div class="panel-body">

          <form class="form-horizontal" role="form" method="POST" action="{{ url('/utilidades') }}">
            {{ csrf_field() }}

            <!-- Introduccion de cadena datos -->
            <div class="form-group{{ $errors->has('dato') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Cadena Datos</label>
              <div class="col-md-6">
                <input id="dato" type="text" class="form-control" name="Cadena" required autofocus>
                @if ($errors->has('dato'))
                <span class="help-block">
                  <strong>{{ $errors->first('dato') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <!-- URL del video -->
            <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
              <label for="url" class="col-md-4 control-label">URL</label>
              <div class="col-md-6">
                <input id="url" type="text" class="form-control" name="url" required autofocus>
                @if ($errors->has('url'))
                <span class="help-block">
                  <strong>{{ $errors->first('url') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  Save
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection()
