<?php
class Controller{
    public function model($model){
        require_once '../app/Models/'.$model.'.php';
        return new $model;
    }//fim da função model

    public function view($view, $dados = []){
        $arquivo = ('../app/Views/'.$view.'.php');
        if(file_exists($arquivo)){
            require_once $arquivo;
        }else{
            die ("O arquivo não existe");
        }//fim do if que verifica se o arquivo existe
    }//fim da função view
}//fim da classe Controller