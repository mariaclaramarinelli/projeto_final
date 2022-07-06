<?php

require 'model/ProdutoModel.php';
require 'model/CategoriaModel.php';
require 'controller/Controller.php';

class Produto extends Controller{

    function __construct(){
        $this->model = new ProdutoModel();
        $this->categoria_model = new CategoriaModel();
    }

    function index(){
        $produtos = ($this->model->buscarTodos());
        include 'view/templete/cabecalho.php';
        include 'view/templete/menu.php';
        include 'view/produto/listagem.php';
        include 'view/templete/rodape.php';
        
    }

    function add(){
        $categorias = $this->categoria_model->buscarTodos();
        include 'view/templete/cabecalho.php';
        include 'view/templete/menu.php';
        include 'view/produto/form.php';
        include 'view/templete/rodape.php';

    }

    function editar($id){
        $produto = $this->model->buscarPorId($id);
        include 'view/templete/cabecalho.php';
        include 'view/templete/menu.php';
        include 'view/produto/form.php';
        include 'view/templete/rodape.php';

    }

    function excluir($id){
      $this->model->excluir($id);  
      header('Location: ?c=produto');
    }

    function salvar(){
        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            if(empty($_POST['idproduto'])){
                $this->model->inserir(
                    $_POST['nome'],
                    $_POST['descricao'],
                    $_POST['preco'],
                    $_POST['marca'], 
                    "ffgfddgdf.png",
                    $_POST['categoria']);
            }else{
                $this->model->atualizar( 
                    $_POST['idproduto'],
                    $_POST['nome'],
                    $_POST['descricao'],
                    $_POST['preco'],
                    $_POST['marca'], 
                    "ffgfddgdf.png",
                    $_POST['categoria']
                );
            }
            header('Location: ?c=produto');
        }else{
            echo "Ocorreu um erro, pois os dados não foram enviados!";
        }
    }
}

?>