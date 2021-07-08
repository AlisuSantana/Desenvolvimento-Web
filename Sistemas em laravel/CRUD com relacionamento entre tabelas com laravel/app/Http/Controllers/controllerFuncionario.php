<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelFuncionario;
use App\Models\modelDepartamento;


class controllerFuncionario extends Controller
{
    private $objFun;
    private $objDep;
    public function __construct(){
        $this->objFun = new modelFuncionario();
        $this->objDep = new modelDepartamento();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funs = $this->objFun->all();
        return view('indexFun', compact('funs'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $deps = $this->objDep->all();
        return view('createFun', compact('deps'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cadastroFun = $this->objFun->create([
            'nm_funcionario' =>$request->nomeFun,
            'cd_departamento' =>$request->id_dep
        ]);
        if($cadastroFun){
            return redirect('funcionario')->with('mensagem', 'funcionario cadastrdo com sucesso!');
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
        $fun = $this->objFun->find($id);
        return view('showFun', compact('fun'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fun = $this->objFun->find($id);
        $deps = $this->objDep->all();
        return view('createFun', compact('fun', 'deps'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateFun = $this->objFun->where(['cd_funcionario' => $id])->update([
            'nm_funcionario' => $request->nomeFun,
            'cd_departamento' => $request->id_dep
        ]);
        if($updateFun){
            return redirect('funcionario')->with('mensagem', 'Funcionário atualizado com sucesso!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->objFun->destroy($id);
    }
}
