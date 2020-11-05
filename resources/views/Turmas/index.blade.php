@extends('templates.template')

@section('head')
   <title>Turmas</title>
@endsection

@section('content')
   <h3 class="mb-5 mt-5">MINHAS TURMAS</h3>
   
   <div class="row mb-3">
      <div class="col-12">
         <form class="form-inline">
            <div class="form-group mr-2">
               <input type="text" class="form-control" id="cod_convite" name="cod_convite" placeholder="Convite" required>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
            <label class="mr-2 ml-2"> ou </label>
            <a href="{{url("turmas/create")}}" class="btn btn-success"> + Criar turma </a>
         </form>

   

         
      </div>


   </div>


   <div class="row mt-3 mb-3">
      <div class="col-6">
         <h3>Participo <span class="badge badge-secondary">3</span></h3>
      </div>

      <div class="col-6">
         <button class="btn btn-light float-right" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            mostrar/esconder
         </button>
      </div>
   </div>

   <div class="collapse show" id="collapseExample">
      <div class="row">
         @foreach($turmas AS $item)

            @php
               $usuario = $item->find($item->id)->relUsuario;
            @endphp

            <div class="col-4 mb-4">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">{{$item->nome}}</h5>
                        <p class="card-text">{{$item->descricao}}</p>
                        <a href="{{url("turmas/$item->id")}}" class="card-link">Ver</a>
                     </div>
                  </div>
            </div>

         @endforeach

      </div>
   </div>


   <div class="row mt-3 mb-3">
      <div class="col-6">
         <h3>Gerencio <span class="badge badge-secondary">3</span></h3>
      </div>

      <div class="col-6">
         <button class="btn btn-light float-right" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
            mostrar/esconder
         </button>
      </div>
   </div>

   <div class="collapse show" id="collapseExample2">
      <div class="row">
         <div class="col-4 mb-4">
               <div class="card">
                  <div class="card-body">
                     <h5 class="card-title">Turma 1</h5>
                     <p class="card-text">Descrição da turma</p>
                     <a href="" class="card-link">Ver</a>
                  </div>
               </div>
         </div>

         <div class="col-4 mb-4">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Turma 2</h5>
                  <p class="card-text">Descrição da turma</p>
                  <a href="" class="card-link">Ver</a>
               </div>
            </div>
         </div>

         <div class="col-4 mb-4">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Turma 3</h5>
                  <p class="card-text">Descrição da turma</p>
                  <a href="" class="card-link">Ver</a>
               </div>
            </div>
         </div>
      </div> 
   </div> 


   @if(session('success'))
      <div id="message" class="alert alert-success" role="alert">
         {{session('success')}}
      </div>
   @endif

   <script>
      $("#message").delay(3200).fadeOut(300);
   </script>
@endsection