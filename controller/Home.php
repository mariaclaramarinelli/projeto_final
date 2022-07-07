<?php
    require "model/CategoriaModel.php";
    require "model/ProdutoModel.php";
    require "controller/Controller.php";

    class Home extends Controller{
        
        function __construct(){
            $this->categoria = new CategoriaModel();
            $this->produto = new ProdutoModel();
        }

        function index(){
            $categorias = $this->categoria->buscarTodos();
            $produtos = $this->produto->buscarTodos();
            include 'view/templete/cabecalho.php';
            include 'view/templete/menu_home.php';
            include 'view/home/listagem.php';
            include 'view/templete/rodape.php';
            
        }

        function ver($id){
            echo $id;
            $categorias = $this->categoria->buscarTodos();
            include 'view/templete/cabecalho.php';
            include 'view/templete/menu_home.php';
            include 'view/home/listagem.php';
            include 'view/templete/rodape.php';
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