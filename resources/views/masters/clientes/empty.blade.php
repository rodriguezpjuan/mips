@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="card" style="width: 100%;">
            <div class="card-header">
              <h2>Clientes</h2>
            </div>
            <div class="card-body" style="text-align: center;">
                <div>
                    <h3>No existen clientes regisrtrados.</h3>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-10">
                        
                    </div>
                    <div class="col-md-2">
                        <a href="clientes/create" class="btn btn-primary text-right"><i class="bi bi-plus-circle-fill"></i> Nuevo</a>
                    </div>
                    </div>
              </div>
          </div>




    </div>

@endsection
