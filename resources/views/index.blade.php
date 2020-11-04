@extends('templates.template')

@section('head')
   <title>Turmas</title>
@endsection

@section('content')
   <h3>TURMAS</h3>
   
   <a href="{{url("turmas/create")}}"> <button class="btn btn-primary float-right mt-3 mb-3 mr-0"> Cadastrar </button> </a>

   <table class="table table-bordered">
      <thead>
         <tr>
            <th>Turma</th>
            <th>Criador</th>
            <th>Ações</th>
         </tr>
      </thead>
      <tbody>
         @foreach($turmas AS $item)

            @php
                $usuario = $item->find($item->id)->relUsuario;
            @endphp

            <tr>
               <td>{{$item->nome}}</td>
               <td>{{$usuario->nome_completo}}</td>
               <td>
                  <a href="{{url("turmas/$item->id")}}" class="btn btn-primary"> Visualizar </a> 
                  <a href="{{url("turmas/$item->id/edit")}}" class="btn btn-primary"> Editar </a> 
                  <form action="{{ route('turmas.destroy', $item->id) }}" method="POST" style="display: inline;">
                     @csrf
                     @method('delete')
                     <button type="submit" class="btn btn-primary">Deletar</button>
                  </form>
               </td>
            </tr>
         @endforeach
      </tbody>
   </table>

   <script>
      $("#message").delay(3200).fadeOut(300);
   </script>
@endsection