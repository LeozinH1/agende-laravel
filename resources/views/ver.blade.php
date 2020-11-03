@extends('templates.template')

@section('content')
   <h1>Home > Turmas > Ver</h2>

   @php
      $usuario = $turma->find($turma->id)->relUsuario;
   @endphp

   {{$turma->nome}} <br>
   {{$usuario->nome_completo}} <br>
   {{$turma->convite}} <br>

@endsection