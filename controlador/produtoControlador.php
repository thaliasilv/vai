<?php
require_once "modelo/produtoModelo.php";
require_once "modelo/categoriaModelo.php";
require_once "servico/validacaoServico.php";


function index() {
    redirecionar("produto/listar");
}
function adicionar() {
    if (ehPost()) {

        $nome = $_POST["NomeProduto"];
        $CategoriaProduto = $_POST["CategoriaProduto"];
        $DescriProduto = $_POST["DescriProduto"];
        $imagem= $_POST["imagem"];
        $PreProduto = $_POST["PreProduto"];
        $estoqueMin = $_POST["eMin"];
        $estoqueMax = $_POST["eMax"];
        $errors = array();
        
         if (nao_vazio($nome, "nome") != NULL) {
            $errors[] = nao_vazio($nome, "nome");
        }
        if (nao_vazio($CategoriaProduto, "CategoriaProduto") != NULL) {
            $errors[] = nao_vazio($CategoriaProduto, "CategoriaProduto");
        }
         if (nao_vazio($DescriProduto, "DescriProduto") != NULL) {
            $errors[] = nao_vazio($DescriProduto, "DescriProduto");
        }
        if (nao_vazio($PreProduto, "PreProduto") != NULL) {
            $errors[] = nao_vazio($PreProduto,"PreProduto");
        }
        if (tipo_Especifico($estoqueMin, "estoqueMin") != NULL) {
            $errors[] = tipo_Especifico($estoqueMin, "estoqueMin");
        }
        if (tipo_Especifico($estoqueMax, "estoqueMax") != NULL) {
            $errors[] = tipo_Especifico($estoqueMax, "estoqueMax");
        }
         if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
             $dados["categorias"] = seleciona_todas_as_categorias();
            exibir("produtos/formulario", $dados);
        }else{              
        $msg = adicionarProduto($nome, $CategoriaProduto, $DescriProduto, $imagem, $PreProduto, $estoqueMin, $estoqueMax);
        echo $msg;
        
        }
  
    } else {
        $dados["categorias"] = seleciona_todas_as_categorias();
        exibir("produtos/formulario",$dados);
    }
}
function listar(){
    $dados = array();
    $dados["produtos"] = seleciona_todos_os_produtos();
    exibir('produtos/listar', $dados);
}
function ver($cod){
    $dados["produto"] = MostrarProdutoPorCodigo($cod);
    exibir('produtos/visualizar', $dados);
}
function deletar($id) {
    deletarProduto($id);
    redirecionar("produto/listar");
}
