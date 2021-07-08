<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelDepartamento;

class controllerDepartamento extends Controller
{   
    private $objDep;
    public function __construct(){
        $this->objDep = new modelDepartamento();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deps = $this->objDep->all();
        return view('indexDep', compact('deps'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createDep');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cadastroDep = $this->objDep->create([
            'nm_departamento' =>$request->nomeDep
        ]);
        if($cadastroDep){
            return redirect('departamento')->with('mensagem', 'Departamento cadastrado com sucesso!');
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
        $dep = $this->objDep->find($id);
        return view('showDep', compact('dep'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dep = $this->objDep->find($id);
        return view('createDep', compact('dep'));
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
        $updateDep = $this->objDep->where(['cd_departamento' => $id])->update([
            'nm_departamento' => $request->nomeDep
        ]);
        if($updateDep){
            return redirect('departamento')->with('mensagem', 'Departamento atualizado com sucesso!');
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
        $this->objDep->destroy($id);
    }
}
