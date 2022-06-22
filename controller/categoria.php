<?php
    require "../conexao.php";
    require "../model/categoria_model.php";

    $model = new CategoriaModel($con);
    //$model->inserir("Produto de Limpeza");
    //$model->excluir(2);
    //$model->atualizar("Smartphone", 3);
    var_dump($model->buscarPorId(3));

?>