@extends('templates.template')

@section('content')
   <h1>Home > Turmas > @if(isset($turma)) Editar @else Cadastrar @endif</h2>


   @if(isset($turma))
   <form name="edit_turma" id="edit_turma" action="{{url("turmas/$turma->id")}}" method="POST">
      @method("PUT")
   @else
   <form name="cad_turma" id="cad_turma" action="{{url("turmas")}}" method="POST">
   @endif
      @csrf

      @if(isset($errors) && count($errors) > 0)
         <div>
            @foreach($errors->all() as $erro)
               {{$erro}} <br>
            @endforeach
         </div>
      @endif
      

      <label for="nome"> Nome </label>
      <input type="text" name="nome" id="nome" value="{{$turma->nome ?? ''}}" required>

      <br>

      <label for="descricao"> Descrição </label>
      <input type="text" name="descricao" id="descricao" value="{{$turma->descricao ?? ''}}" required>

      <br>

      <input type="text" name="criador" id="criador" value="{{$turma->criador ?? $usuario}}" required>

      <br>

      <input type="submit" value="@if(isset($turma)) Editar @else Cadastrar @endif">
   </form>
@endsection