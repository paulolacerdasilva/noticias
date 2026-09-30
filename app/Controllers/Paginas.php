<?php 
class Paginas extends Controller{
    public function __construct(){
        $this->postModel = $this->model('Post');
    }//fim da função construtora

    public function index(){
       $dados = [
            'posts'=> $this->postModel->lerTresPosts()
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