
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
 <h1>Actualización Facultades</h1>
@stop

@section('content')
<form class="row g-3 needs-validation" novalidate action="{{url('/facultades/editar', $faculty->codfacultad)}}" method="POST">
    @csrf
  <div class="col-md-6">
    <label for="cod_facultad" class="form-label">Código Facultad</label>
    <input type="text" class="form-control" disabled name="cod_facultad" id="cod_facultad" required value="{{$faculty->codfacultad}}">
  </div>

  <div class="col-md-6">
    <label for="nom_facultad" class="form-label">Nombre Facultad</label>
    <input type="text" class="form-control" name="nom_facultad" id="nom_facultad" required value="{{$faculty->nomfacultad}}" >
  </div>

  <div class="col-12">
    <button class="btn btn-success my-4" type="submit">Actualizar</button>
  </div>
</form>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop