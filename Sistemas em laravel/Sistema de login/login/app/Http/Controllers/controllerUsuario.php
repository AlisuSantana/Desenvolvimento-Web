<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelUsuario;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Classes\geradorSenha;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailRecSenha;

class controllerUsuario extends Controller
{
    private $objusuario;
    public function __construct(){
        $this->objUsuario = new modelUsuario;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::has('login'))
        {            
            return view('home');
        }else{
            return view('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if(Session::has('login'))
        {            
            return view('home');
        }else{
            return view('create');
        }
    }

    public function recuperaSenha()
    {
        if(Session::has('login')
        ){
            return view('home');
        }else{
        return view('recuperaSenha');
        }
    }

    public function efetuaLogin(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'senha' => 'required'
        ]);
        $dadosUsuario = $this->objUsuario->firstWhere(['nm_email' => $request->email]);
        if(!$dadosUsuario){
            return redirect('login')->with('erro_db', 'Usuário não cadastrado');
        }
        if(!Hash::check($request->senha, $dadosUsuario->nm_senha)){
            return redirect('login')->with('erro_db', 'Senha incorreta!');
        }
        Session::put('login', 'ativo');       
        Session::put('nm_usuarioLogado', $dadosUsuario->nm_usuario);
        return redirect('login'); 
    }

    public function logout(){
        Session::flush();
        return redirect('login');
    }

    public function solicitaRecSenha(Request $request){
        $validate = $this->validate($request,[
            'email' => 'required|email'
        ]);
        $dadosUsuario = $this->objUsuario->firstWhere(['nm_email' => $request->email]);
        if(!$dadosUsuario){
           return redirect('login/recuperaSenha')->with('erro_db', 'E-mail não associado a nenhum usuário!');
        }
        $novaSenha = geradorSenha::gerarSenha();
        $dadosUsuario->nm_senha = Hash::Make($novaSenha);
        $dadosUsuario->save();

        Mail::to($dadosUsuario->nm_email)->send(new EmailRecSenha($novaSenha));
        return redirect('login')->with('mensagem', 'E-mail enviado com sucesso! Verifique seu E-mail.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'usuario' => 'required|between:3,15|alpha_num',
            'senha' => 'required|between:6,12',
            'confirmaSenha' => 'required|same:senha',
            'email' => 'required|email',
            'termos' => 'accepted'
        ]);
        $dados = $this->objUsuario->where(['nm_usuario'=>$request->usuario])
                 ->orWhere(['nm_email'=>$request->email])->get();
        if($dados->count() != 0){
            return redirect('login/create')->with('erro_db', 'Já existe um usuário com esse nome ou E-mail');
        }
        $cadastroUsuario = $this->objUsuario->create([
            'nm_usuario' => $request->usuario,
            'nm_email' => $request->email,
            'nm_senha' => Hash::make($request->senha)
        ]);
        if($cadastroUsuario){
            return redirect('login')->with('mensagem', 'Usuário criado com sucesso!');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
