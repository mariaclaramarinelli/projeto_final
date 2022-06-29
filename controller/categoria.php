<?php
    require "model/CategoriaModel.php";
    require "controller/Controller.php";

    class Categoria extends Controller{
        
        function __construct(){
            $this->model = new CategoriaModel();
        }

        function index(){
            $categorias = ($this->model->buscarTodos());
            $this->load_template("categoria/listagem.php", $categorias);
            
        }

        function inserir(){

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