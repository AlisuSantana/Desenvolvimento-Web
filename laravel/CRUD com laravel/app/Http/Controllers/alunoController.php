<?php

namespace App\Http\Controllers;

use App\Http\Requests\alunoRequest;
use App\Models\modelAlunos; 

class alunoController extends Controller
{
    
    public function index(){
        $registroAluno = $this->objAluno->all();
        return view('index', compact('registroAluno'));
    }

    public function create(){
        return view('create');
    }

    private $objAluno;
    public function __construct()    {
        $this->objAluno = new modelAlunos();
    }

    public function store(alunoRequest $request){
        $storeAluno = $this->objAluno->create([
            'nm_aluno'=>$request->nmAluno,
            'nm_mae_aluno'=>$request->nmMae,
            'nm_pai_aluno'=>$request->nmPai
        ]);
        if($storeAluno){
            return redirect('/aluno')->with('mensagem', 'Aluno cadastrado com sucesso!');
        }
    }

    public function show($id){
        $aluno = $this->objAluno->find($id);
        return view('show', compact('aluno'));
    }

    public function edit($id){
        $aluno = $this->objAluno->find($id);
        return view('create', compact('aluno'));
    }

    public function update(alunoRequest $request, $id){
        $updateAluno = $this->objAluno->where(['cd_aluno'=>$id])->update([
            'nm_aluno'=>$request->nmAluno,
            'nm_mae_aluno'=>$request->nmMae,
            'nm_pai_aluno'=>$request->nmPai

        ]);
        if($updateAluno){
            return redirect('aluno/')->with('mensagem', 'Aluno atualizado com secesso!');
        }
    }

    public function destroy($id){
        $this->objAluno->destroy($id);
    }

    
}
