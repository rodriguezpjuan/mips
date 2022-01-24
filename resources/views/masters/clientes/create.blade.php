@extends('layouts.app')

@section('content')

	<div class="container">

        @extends('common.error')

        <div class="card" style="width: 100%;">
            <div class="card-header">
              <h2>Clientes</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('clientes.store') }}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                    @csrf
                	<div class="row">
	                	<div class="form-group col-md-2">
	                		<label for="cli_rif">{{ __('R.I.F.') }}</label>
	                		<input type="text" name="cli_rif" placeholder="J123456789" class="form-control" required maxlength="10">
	                	</div>
	                	<div class="form-group col-md-10">
	                		<label for="cli_nombre">{{ __('Nombre del Cliente') }}</label>
	                		<input type="text" name="cli_nombre" placeholder="Escriba el nombre del cliente aquí" class="form-control" required maxlength="150">
	                	</div>
	                	<div class="form-group col-md-12">
	                		<label for="cli_dir">{{ __('Dirección') }}</label>
	                		<input type="text" name="cli_dir" placeholder="Agregue una dirección aquí." class="form-control" maxlength="255">
	                	</div>
                        <div class="form-group col-md-2">
                            <label for="cli_telf1">{{ __('Teléfono 1') }}</label>
                            <input type="text" name="cli_telf1" placeholder="+582611234567" class="form-control" maxlength="50">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="cli_telf2">{{ __('Teléfono 2') }}</label>
                            <input type="text" name="cli_telf2" placeholder="+584141234567" class="form-control" maxlength="50">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="cli_correo1">{{ __('Correo Principal') }}</label>
                            <input type="text" name="cli_correo1" placeholder="{{ __('Correo@empresa.com') }}" class="form-control" maxlength="90">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="cli_correo2">{{ __('Correo Alternativo') }}</label>
                            <input type="text" name="cli_correo2" placeholder="{{ __('Correo@empresa.com') }}" class="form-control" maxlength="90">                            
                        </div>
                        <div class="form-group col-md-3">
                            <label for="cli_tipo">{{__('Tipo de Cliente')}}</label>
                            <select name="cli_tipo" id="cli_tipo" class="custom-select">
                                <option value="0" selected="selected">No Contribuyente</option>
                                <option value="1">Contribuyente</option>
                                <option value="2">Natural</option>
                                <option value="3">Exento</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="cli_activo">{{__('Cliente Activo')}}</label><br>
                            <input name="cli_activo" type="checkbox" checked="checked"/> 
                        </div>
                        <div class="form-group col-md-3">
                            <label for="cli_foto">{{__('Foto')}}</label>
                            <input type="file" accept="image/*;capture=camera">
                        </div>
                        <div class="form-group col-md-12 text-right" style="align-items:right;">
                            <input type="submit" Value="Guardar" class="btn btn-success">
                            <button type="reset" class="btn btn-danger">Cancelar</button>        
                        </div>
                	</div>
                </form>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <a href="/clientes" class="btn btn-warning"><i class="bi bi-arrow-return-left"></i> Volver</a>
                    </div>
              </div>
          </div>
    </div>

@endsection