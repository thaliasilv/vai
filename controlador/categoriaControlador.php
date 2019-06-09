
<?php
require_once "modelo/categoriaModelo.php";

function inserir(){
    if (ehPost()) {
       $Nome = $_POST["Nome"];
        
        $msg = adicionarCategoria($Nome);
        echo $msg;
    } else {
        exibir("categorias/cadastrar");
    }
} 

function listar(){
    $dados = array();
    $dados["categorias"] = seleciona_todas_as_categorias();
    exibir('categorias/listar', $dados);
}

function ver($cod){
    $dados["categorias"] = MostrarCategoriaPorCodigo($cod);
    exibir('categorias/visualizar', $dados);
}


