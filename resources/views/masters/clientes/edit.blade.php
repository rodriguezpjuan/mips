@extends('products.layout')
   
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar información del cliente</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
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
  
    <form action="{{ route('clientes.update',$cliente->id) }}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="form-group col-md-2">
                <label for="cli_rif">{{ __('R.I.F.') }}</label>
                <input type="text" name="cli_rif" value="{{ $cliente->cli_rif }}" placeholder="J123456789" class="form-control" required maxlength="10">
            </div>
            <div class="form-group col-md-10">
                <label for="cli_nombre">{{ __('Nombre del Cliente') }}</label>
                <input type="text" name="cli_nombre" value="{{ $cliente->cli_nombre }}" placeholder="Escriba el nombre del cliente aquí" class="form-control" required maxlength="150">
            </div>
            <div class="form-group col-md-12">
                <label for="cli_dir">{{ __('Dirección') }}</label>
                <input type="text" name="cli_dir" value="{{ $cliente->cli_dir }}" placeholder="Agregue una dirección aquí." class="form-control" maxlength="255">
            </div>
            <div class="form-group col-md-2">
                <label for="cli_telf1">{{ __('Teléfono 1') }}</label>
                <input type="text" name="cli_telf1" value="{{ $cliente->cli_telf1 }}" placeholder="+582611234567" class="form-control" maxlength="50">
            </div>
            <div class="form-group col-md-2">
                <label for="cli_telf2">{{ __('Teléfono 2') }}</label>
                <input type="text" name="cli_telf2" value="{{ $cliente->cli_telf2 }}" placeholder="+584141234567" class="form-control" maxlength="50">
            </div>
            <div class="form-group col-md-3">
                <label for="cli_correo1">{{ __('Correo Principal') }}</label>
                <input type="text" name="cli_correo1" value="{{ $cliente->cli_correo1 }}" placeholder="{{ __('Correo@empresa.com') }}" class="form-control" maxlength="90">
            </div>
            <div class="form-group col-md-3">
                <label for="cli_correo2">{{ __('Correo Alternativo') }}</label>
                <input type="text" name="cli_correo2" value="{{ $cliente->cli_correo2 }}" placeholder="{{ __('Correo@empresa.com') }}" class="form-control" maxlength="90">                            
            </div>
            <div class="form-group col-md-3">
                <label for="cli_tipo">{{__('Tipo de Cliente')}}</label>
                <select name="cli_tipo" id="cli_tipo" class="custom-select">
                    @if ({{$cliente->cli_tipo}} = 0)
                        <option value="0" selected>No Contribuyente</option> 
                    @else
                        <option value="0">No Contribuyente</option>
                    @endif
                    @if ({{$cliente->cli_tipo}} = 1)
                        <option value="1" selected>Contribuyente</option>
                    @else 
                        <option value="1">Contribuyente</option>
                    @endif
                    @if ({{$cliente->cli_tipo}} = 2)
                        <option value="2" selected>Natural</option>
                    @else 
                        <option value="2">Natural</option>
                    @endif
                    @if ({{ $cliente->cli_tipo }} = 3)
                        <option value="3" selected>Exento</option>
                    @else
                        <option value="3">Exento</option>
                    @endif
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="cli_activo">{{__('Cliente Activo')}}</label><br>
                <input name="cli_activo" value="{{ $cliente->cli_activo }}" type="checkbox" checked="checked"/> 
            </div>
            <div class="form-group col-md-3">
                <label for="cli_foto">{{__('Foto')}}</label>
                <input type="file" accept="image/*;capture=camera">
            </div>
            <div class="form-group col-md-12 text-right" style="align-items:right;">
                {{-- <input type="submit" Value="Guardar" class="btn btn-success"> --}}
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="reset" class="btn btn-danger">Cancelar</button>        
            </div>
        </div>
    </form>

    {{-- <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form> --}}
@endsection