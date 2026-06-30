<?php 
class Paginas extends Controller{
    public function index(){
        $dados = [
            'titulo' => 'Página Inicial',
            'descricao' => 'Aula de PHP'
        ];
        $this->view('paginas/home', $dados);
    }
   public function sobre($id){
    echo $id.'<hr>';
   }

}//fim da classe Páginas