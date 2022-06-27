<?php
    require "model/CategoriaModel.php";

    class Categoria{
        
        function __construct(){
            $this->model = new CategoriaModel();
        }

        function index(){
            var_dump($this->model->buscarTodos());
        }

        function inserir(){
            echo "testando função inserir";
        }
    }

    //$controller = new Categoria();
    //$controller->index();

    //$model = new CategoriaModel();
    //$model->inserir("Produto de Limpeza");
    //$model->excluir(2);
    //$model->atualizar("Smartphone", 3);
    //var_dump($model->buscarPorId(3));

?>