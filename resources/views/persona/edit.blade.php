@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form action="{{route('persona.update',$persona->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="status" value="0">
                        <div class="form-group">
                            <label for="nombres">Nombres y Apellidos</label>
                            <input type="text" name="nombres" class="form-control" value="{{$persona->nombres}}">
                        </div>
                        <div class="form-group">
                            <label for="documento">Numero de Documento (Passaporte o RUT)</label>
                            <input type="text" name="documento" class="form-control" value="{{$persona->documento}}">
                        </div>
                        <div class="form-group">
                            <label for="sexo">Sexo (MASCULINO, FEMENINO)</label>
                            <select name="sexo" class="form-control">
                                @foreach($sexos as $sexo)
                                <option @if ($persona->sexo== $sexo)
                                    selected
                                    @endif
                                    value="{{$sexo}}">{{$sexo}}</option>
                                @endforeach
                                <!-- <option value="MASCULINO">MASCULINO</option>
                                <option value="FEMENINO">FEMENINO</option> -->
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="edad">Edad</label>
                            <input type="text" name="edad" class="form-control" value="{{$persona->edad}}">
                        </div>

                        <div class="form-group">
                            <label for="origen">Origen</label>
                            <select name="origen" class="form-control">
                                @foreach($sitios as $sitio)
                                <option @if ($persona->sitio== $sitio)
                                    selected
                                    @endif
                                    value="{{$sitio}}">{{$sitio}}</option>
                                @endforeach
                                <!-- <option value="IQUIQUE">IQUIQUE</option>
                                <option value="SANTIAGO">SANTIAGO</option> -->
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="sexo">Fecha de Ingreso ('un dia antes de la fecha de recepcion')</label>
                            <input type="datetime-local" name="recepcion_muestra_fecha" class="form-control" value="{{$recepcion}}">

                        </div>


                        <br>
                        <br>
                        <input type="submit" value="GUARDAR" class="btn btn-primary">

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

<script>


</script>

@endsection