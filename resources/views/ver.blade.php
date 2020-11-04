@extends('templates.template')

@section('head')
   <title>Ver Turma</title>
@endsection

@section('content')
   <h3>VISUALIZAR</h3>

   @php
      $usuario = $turma->find($turma->id)->relUsuario;
   @endphp

   {{$turma->nome}} <br>
   {{$usuario->nome_completo}} <br>
   {{$turma->convite}} <br>

   <a href="{{ route("turmas.index") }}" class="btn btn-light mt-3">Voltar</a>

@endsection