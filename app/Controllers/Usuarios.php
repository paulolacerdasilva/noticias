<?php
class Usuarios extends Controller{
    public function cadastrar(){
       $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
       if(isset($formulario)):
        $dados = [
            'nome'=>trim($formulario['nome']),
            'email'=>trim($formulario['email']),
            'senha'=>trim($formulario['senha']),
            'confirma_senha'=>trim($formulario['confirma_senha']),
        ];
        var_dump($formulario);
        if(empty($formulario['nome'])):
            $dados['nome_erro'] = 'Preencha o campo nome';
        endif;
        if(empty($formulario['email'])):
            $dados['email_erro'] = 'Preencha o campo email';
        endif;
        if(empty($formulario['senha'])):
            $dados['senha_erro'] = 'Preencha o campo senha';
        endif;
        if(empty($formulario['confirma_senha'])):
            $dados['confirma_senha_erro'] = 'Preencha o campo confirma senha';
        endif;
       else:
            $dados=[
                'nome'=>'',
                'email'=>'',
                'senha'=>'',
                'confirma_senha'=>'',
            ];
       endif;

        $this->view('usuarios/cadastrar',$dados);
    }//fim da função cadastrar
}//fim da classe Usuarios