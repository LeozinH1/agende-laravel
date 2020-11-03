<?php

namespace App\Http\Controllers;

use App\Http\Requests\TurmaRequest;

use App\Models\Models\Usuarios;
use App\Models\Models\Turmas;

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
        return view('index', compact('turmas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = 1;
        return view('create', compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TurmaRequest $request)
    {
        $cad = $this->turma->create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'criador' => $request->criador,
            'convite' => Str::random(5)
        ]);

        if($cad){
            return redirect('turmas');
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
        return view('ver', compact('turma'));
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
        return view('create', compact('turma', 'usuario'));
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
            'criador' => $request->criador,
        ]);

        return redirect('turmas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
