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
            if(in_array("",$formulario)):
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
            else: 
                if(Checa::checarNome($formulario['nome'])):
                    $dados['nome_erro'] = 'O nome informado é inválido';
                elseif(Checa::checarEmail($formulario['email'])):
                        $dados['email_erro'] = 'O email informado é inválido';
                elseif(strlen($formulario['senha']) < 7 ):
                        $dados['senha_erro'] = 'A senha deve ter no mínimo 6 caracteres';
                elseif($formulario['senha'] != $formulario['confirma_senha']):
                        $dados['confirma_senha_erro'] = 'Senhas diferentes';
                else:
                    echo "Pode realizar o cadastro";
                endif;
            endif;
        endif;
        else:
                    $dados=[
                        'nome'=>'',
                        'email'=>'',
                        'senha'=>'',
                        'confirma_senha'=>'',
                        'nome_erro'=>'',
                        'email_erro'=>'',
                        'senha_erro'=>'',
                        'confirma_senha_erro'=>'',
                    ];
        endif;
        
        $this->view('usuarios/cadastrar',$dados);
    }//fim da função cadastrar
}//fim da classe Usuarios