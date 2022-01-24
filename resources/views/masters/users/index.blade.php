@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="card" style="width: 100%;">
            <div class="card-header">
              <h2>Usuarios</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Fecha de creación</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <th scope="row">{{ $usuario->id }}</th>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->created_at }}</td>
                                <td>
                                    <a href="#" class="btn btn-primary"><i class="bi bi-eye"></i></a>
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
                        {!! $usuarios->links() !!}
                    </div>
                    <div class="col-md-2">
                        <a href="#" class="btn btn-primary text-right"><i class="bi bi-plus-circle-fill"></i> Nuevo</a>
                    </div>
                    </div>
              </div>
          </div>




    </div>

@endsection
