@extends('templates.template')

@section('head')
   <title>@if(isset($turma)) Editar Turma @else Criar Turma @endif</title>
@endsection

@section('content')
   
   @if(isset($turma))
   <form name="edit_turma" id="edit_turma" action="{{url("turmas/$turma->id")}}" method="POST">
      @method("PUT")
   @else
   <form name="cad_turma" id="cad_turma" action="{{url("turmas")}}" method="POST">
   @endif
      @csrf

      <h3>@if(isset($turma)) EDITAR @else CADASTRAR @endif</h3>

      @if(isset($errors) && count($errors) > 0)
         <div>
            @foreach($errors->all() as $erro)
               <div id="message" class="alert alert-danger" role="alert">
                  {{$erro}}
               </div>
            @endforeach
         </div>
      @endif

      <div class="form-group">
         <label for="nome"> Nome </label>
         <input type="text" name="nome" id="nome" value="{{$turma->nome ?? ''}}" class="form-control" required>
      </div>

      <div class="form-group">
         <label for="descricao"> Descrição </label>
         <textarea class="form-control" name="descricao" id="descricao" rows="3" required>{{$turma->descricao ?? ''}}</textarea>
      </div>

      <input type="submit" value="@if(isset($turma)) Editar @else Cadastrar @endif" class="btn btn-primary">
      <a href="{{ route("turmas.index") }}" class="btn btn-light">Voltar</a>
   </form>

   <script>
      $("#message").delay(3200).fadeOut(300);
   </script>

@endsection