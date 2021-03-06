<?php

namespace App\Http\Controllers;

use App\Http\Requests\TurmaRequest;

use App\Models\Usuarios;
use App\Models\Turmas;

use Illuminate\Support\Str;

class TurmaController extends Controller
{

    private $usuario;
    private $turma;

    public function __construct(){
        $this->usuario = new Usuarios();
        $this->turma = new Turmas();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $turmas = $this->turma->all();
        // $usuarios = $this->usuario->all();

         return view('turmas.index', compact('turmas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('turmas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TurmaRequest $request)
    {
        $turma = $this->turma->create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'criador' => "1",
            'convite' => strtoupper(Str::random(5))
        ]);

        if($turma){
            return redirect('turmas/' . $turma->id)->with('success','Turma criada com sucesso.');
        }else{
            return redirect('turmas')->with('error','Erro ao criara turma.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turma = $this->turma->find($id);
        return view('turmas.ver', compact('turma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turma = $this->turma->find($id);
        $usuario = $this->usuario->all();
        return view('turmas.create', compact('turma', 'usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TurmaRequest $request, $id)
    {
        $this->turma->where(['id' => $id])->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'criador' => "1",
        ]);

        return redirect('turmas/' . $id)->with('success','Turma editada com sucesso.');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->turma->destroy($id);
        //return redirect('turmas');
        return redirect('turmas')->with('success','Turma apagada com sucesso.');
    }

}
