@extends('templates.template')

@section('head')
   <title>Ver Turma</title>
@endsection

@section('content')

   @php
      $usuario = $turma->find($turma->id)->relUsuario;
   @endphp

   <h1> {{$turma->nome}} </h1>
   <h4> {{$turma->descricao}} </h4>

   <br><br>

   <div class="row">

      <div class="col-6">
         <a href="" class="btn btn-success"> + Criar tarefa </a>
      </div>

      <div class="col-6">

         <form action="{{ route('turmas.destroy', $turma->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger float-right">Deletar turma</button>
         </form>

         <a href="" class="btn btn-light float-right mr-1"> Membros </a>
         <a href="{{url("turmas/$turma->id/edit")}}" class="btn btn-light float-right mr-1"> Editar </a>
      </div>
   </div>


   <div class="row mt-3 mb-3">
      <div class="col-6">
         <h3>Pendentes <span class="badge badge-danger">3</span></h3>
      </div>

      <div class="col-6">
         <button class="btn btn-light float-right" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            mostrar/esconder
         </button>
      </div>
   </div>

   <div class="collapse show" id="collapseExample">
      <div class="row">
         <div class="col-4 mb-4">
               <div class="card">
                  <div class="card-body">
                     <h5 class="card-title">Tarefa 1</h5>
                     <p class="card-text">Descrição da tarefa</p>
                     <a href="" class="card-link">Ver</a>
                  </div>
               </div>
         </div>
      </div>
   </div>

   <div class="row mt-3 mb-3">
      <div class="col-6">
         <h3>Concluídas <span class="badge badge-secondary">3</span></h3>
      </div>

      <div class="col-6">
         <button class="btn btn-light float-right" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
            mostrar/esconder
         </button>
      </div>
   </div>

   <div class="collapse" id="collapseExample2">
      <div class="row">
         <div class="col-4 mb-4">
               <div class="card">
                  <div class="card-body">
                     <h5 class="card-title">Tarefa 1</h5>
                     <p class="card-text">Descrição da tarefa</p>
                     <a href="" class="card-link">Ver</a>
                  </div>
               </div>
         </div>

         <div class="col-4 mb-4">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Tarefa 2</h5>
                  <p class="card-text">Descrição da tarefa</p>
                  <a href="" class="card-link">Ver</a>
               </div>
            </div>
         </div>

         <div class="col-4 mb-4">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Tarefa 3</h5>
                  <p class="card-text">Descrição da tarefa</p>
                  <a href="" class="card-link">Ver</a>
               </div>
            </div>
         </div>
      </div>
   </div>   

   <br><br>

   Criador: {{$usuario->nome_completo}} <br>
   Convite: {{$turma->convite}} <br>

   <a href="{{ route("turmas.index") }}" class="btn btn-light mt-3">Voltar</a>

@endsection