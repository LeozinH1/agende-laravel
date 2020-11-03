@extends('templates.template')

@section('content')
   <h1>Home > Turmas > Cadastrar</h2>

   <form name="cad_turma" id="cad_turma" action="{{url("turmas")}}" method="POST">

      @csrf

      @if(isset($errors) && count($errors) > 0)
         <div>
            @foreach($errors->all() as $erro)
               {{$erro}} <br>
            @endforeach
         </div>
      @endif
      

      <label for="nome"> Nome </label>
      <input type="text" name="nome" id="nome" required>

      <br>

      <label for="descricao"> Descrição </label>
      <input type="text" name="descricao" id="descricao" required>

      <br>

      <input type="text" name="criador" id="criador" value="{{$usuario}}" required>

      <br>

      <input type="submit" value="Cadastrar">
   </form>
@endsection