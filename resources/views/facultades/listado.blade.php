
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
 <h1>FACULTADES</h1>
@stop

@section('content')
<div class="text-right mt-4 ml-4">
        <button class="btn btn-success">
            <i class="fas fa-plus"></i> Registrar
        </button>
</div>
<table class="table mt-4 table-warning">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Opción</th>
    </tr>
  </thead>
  <tbody>


    <tr>
      <td>1</td>
      <td>200</td>
      <td>INGENIERÍA</td>
      <td>
      <button class="btn btn-primary">
        <i class="fas fa-pencil-alt"></i>
      </button>
      <button class="btn btn-danger">
        <i class="fas fa-trash"></i>
      </button>
      </td>
    </tr>
  </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop