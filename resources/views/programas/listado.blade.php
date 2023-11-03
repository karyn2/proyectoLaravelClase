@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Programas</h1>
@stop

@section('content')
<div class="text-right mt-4 ml-4">
        <button class="btn btn-success">
            <i class="fas fa-plus"></i> Registrar
        </button>
</div>
<table class="table mt-4 text-center">
  <thead class="table-primary text-center">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Facultad</th>
      <th scope="col">Opción</th>
    </tr>
  </thead>
  <tbody>
    @php
        $i=1;
    @endphp
    @foreach($program as $f)
    <tr>
      <td>{{ $i }}</td>
      <td>{{ $f->codprograma }}</td>
      <td>{{ $f->nomprograma }}</td>
      <td>{{ $f->nomfacultad }}</td>
      <td>
      <button class="btn btn-primary">
        <i class="fas fa-pencil-alt"></i>
      </button>
      <button class="btn btn-danger">
        <i class="fas fa-trash"></i>
      </button>
      </td>
      @php 
      $i = $i+1;
      @endphp
    </tr>
  </tbody>
  @endforeach
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

