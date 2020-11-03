@extends('templates.template')

@section('content')
   <h1>Home > Turmas</h2>

   <a href="{{url("turmas/create")}}"> <button> Cadastrar </button> </a>

   <table border="1">
      <tr>
         <th>Turma</th>
         <th>Criador</th>
         <th>Ações</th>
      </tr>
         @foreach($turmas AS $item)

            @php
               $usuario = $item->find($item->criador)->relUsuario;
            @endphp

            <tr>
               <td>{{$item->nome}}</td>
               <td>{{$usuario->nome_completo}}</td>
               <td>
                  <a href="{{url("turmas/$item->id")}}"> <button> Visualizar </button> </a>
                  <a href="{{url("turmas/$item->id/edit")}}"> <button> Editar </button> </a>
                  <a href="{{url("turmas/$item->id")}}"> <button> Deletar </button> </a>
               </td>
            </tr>
         @endforeach
   </table>
@endsection