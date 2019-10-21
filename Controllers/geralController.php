<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use App\produto;
use App\venda;
use Session;

class geralController extends Controller
{

    //--------------------- função para mosta pagina login
    public function login(){

       
        return view('login');
     }
     //------------------------------------------------------------------

     //--------------------- função para mosta pagina login
    public function validandologin(Request $request){

       
        
        // validação dos formularios
        $this->validate($request,[

            'email'=>'required|email',
            'password'=>'required'

        ]);

        $usuario = new usuario;
        $usuarios = usuario::all();
        $usuario->email_usuario = $request->email;
        $usuario->senha_usuario = $request->password;

       
        
        $dados = usuario::where('email_usuario',$request->email)->first();
        
        
            if($dados){

                //criando sessao
                Session::put('login','sim');
                //Session::put('id_usuario',$usuarios->id_usuario);
                Session::put('email_usuario',$usuario->email_usuario);

                return redirect('home');
                //return view('home',compact('sessao'));
            }
        
                return $dados;
     }
     //------------------------------------------------------------------
    
    //--------------------- função para mosta pagina home
    public function home(){

         
         
         $dados = produto::all();
         $usuario = usuario::all();
                  
       return view('home',compact('dados'),compact('usuario'));
    }
    //------------------------------------------------------------------
    
    //--------------------- função para mosta pagina cadastro usuario
   
    public function usuario(){

        return view('usuario');
    }
    //------------------------------------------------------------------
    public function adu_suario(Request $request){

        

        //criando a validação
        $this->validate($request,[

                'nome_usuario'=>'required',
                'senha_usuario'=>'required',
                'email_usuario'=>'required|email',
                'cep'=>'required',
                'rua'=>'required',
                'bairro'=>'required',
                'cidade'=>'required',
                'uf'=>'required',


        ]);

        $usuario = new usuario;
        
        $usuario->nome_usuario = $request->nome_usuario;
        $usuario->senha_usuario = $request->senha_usuario;
        $usuario->email_usuario = $request->email_usuario;
        $usuario->cep_usuario = $request->cep;
        $usuario->rua_usuario = $request->rua;
        $usuario->bairro_usuario = $request->bairro;
        $usuario->cidade_usuario = $request->cidade;
        $usuario->estado_usuario = $request->uf;

        $data = date('d/m/y') ;

        $usuario->dataCriacao_usuario = $data;

        $usuario->save();
            
        
            
            return view('usuario');
       
    }

    //------------------------------------------------------------------

    //--------------------- função para remover funcionario

    public function removerUsuario($id){

        usuario::destroy($id);

        return $id;

    }

    //------------------------------------------------------------------
    //--------------------- função para mosta pagina produto vendas
    public function produto(){

        return view('produto');
    }
    
    //------------------------------------------------------------------


    //-----------função para adicionar novo produto ----------------------------

    public function adc_produto(Request $request){

        $produto = new produto;
        
        $produto->nome_produto = $request->nome;
        $produto->preco_produto = $request->preco;
        $produto->quantidade_produto = $request->quantidade;
        $produto->dataCriacao_produto = $request->dataCriacao;
        $data = date('d/m/y') ;
        $produto->dataAlteracao_produto = $data;

        $produto->save();

        return view('produto');
    }

    //------------------------------------------------------------------

    //-----------------------removendo produto -------------


        public function removendoProduto($id){


          produto::destroy($id);

          return redirect('home');
        }

    //------------------------------------------------------------------
}
