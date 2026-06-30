<?php 
class Paginas extends Controller{
    public function index(){
        $dados = [
            'titulo' => 'Página Inicial',
            'descricao' => 'Aula de PHP'
        ];
        $this->view('paginas/home', $dados);
    }
   public function sobre(){
    $dados = [
        'titulo' => 'Sobre Nós',
        'descricao' => 'Página sobre o Portal Noticias'
    ];
     $this->view('paginas/sobre', $dados);
   }//fim da funcao sobre

}//fim da classe Páginas