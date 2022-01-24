@extends('layouts.app')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Información del cliente:</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('masters.clientes.index') }}"><i class="bi bi-arrow-return-left"></i> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $cliente->cli_nombre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>RIF:</strong>
                {{ $cliente->cli_rif }}
            </div>
        </div>
    </div>
@endsection