@extends('layouts.app')

@section('content')

    <div class="container">

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card" style="width: 100%;">
            <div class="card-header">
              <h2>Clientes</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">R.I.F.</th>
                        <th scope="col">Descripci&oacuten Cliente</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Fecha de creación</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $cliente)
                            <tr>
                                <th scope="row">{{ $cliente->cli_rif }}</th>
                                <td>{{ $cliente->cli_nombre }}</td>
                                <td>{{ $cliente->cli_correo1 }}</td>
                                <td>{{ $cliente->created_at->format('d/m/Y') }}</td>
                                <td>
                                    <a href="{{ route('clientes.show',$cliente->id) }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                    <a href="#" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                    <a></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>

            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-10">
                        {!! $clientes->links() !!}
                    </div>
                    <div class="col-md-2">
                        <a href="clientes/create" class="btn btn-primary text-right"><i class="bi bi-plus-circle-fill"></i> Nuevo</a>
                    </div>
                    </div>
              </div>
          </div>




    </div>

@endsection
