@extends('templates.template')

@section('head')
   <title>Turmas</title>
@endsection

@section('content')
   <h1>Home > Turmas</h2>

   <a href="{{url("turmas/create")}}"> <button> Cadastrar </button> </a>

   @if (session('success'))
      <div id="message">
         {{ session('success') }}
      </div>
   @endif

   <table border="1">
      <tr>
         <th>Turma</th>
         <th>Criador</th>
         <th>Ações</th>
      </tr>
         @foreach($turmas AS $item)

            @php
                $usuario = $item->find($item->id)->relUsuario;
            @endphp

            <tr>
               <td>{{$item->nome}}</td>
               <td>{{$usuario->nome_completo}}</td>
               <td>
                  <a href="{{url("turmas/$item->id")}}"> <button> Visualizar </button> </a>
                  <a href="{{url("turmas/$item->id/edit")}}"> <button> Editar </button> </a>    
                  <form action="{{ route('turmas.destroy', $item->id) }}" method="POST">
                     @csrf
                     @method('delete')
                     <button type="submit">Deletar</button>
                  </form>
               </td>
            </tr>
         @endforeach
   </table>

   <script>
      $("#message").delay(3200).fadeOut(300);
   </script>
@endsection