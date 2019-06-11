<?php
require_once "modelo/produtoModelo.php";

require_once "modelo/categoriaModelo.php";

function index() {
    redirecionar("produto/listar");
}

function adicionar() {
    if (ehPost()) {

/*Validações Obrigatórias      
        if (strlen(trim($_POST['NomeProduto'])) == 0) {
            echo "Você deve inserir o nome produto.";
        }
        //Elementos de um tipo especifico
        $input['CodigoProduto'] = filter_input(INPUT_POST, 'CodigoProduto', FILTER_VALIDATE_INT);
        if ($input['CodigoProduto'] == FALSE) {
            echo 'Informe um codigo valido.';
        }
        //Validações Obrigatórias        
        if (strlen(trim($_POST['DescriProduto'])) == 0) {
            echo "Você deve inserir uma descriçaõ.";
        }
        //Elementos de um tipo especifico
        $input['QuantidadeProduto'] = filter_input(INPUT_POST, 'QuantidadeProduto', FILTER_VALIDATE_INT);
        if ($input['QuantidadeProduto'] == FALSE) {
            echo 'Informe uma quantidade valida.';
        }

        // html e javascript
        echo "<BR><BR>Validacao HTML<br>";
        echo strip_tags($_POST["NomeProduto"]);
        echo htmlentities($_POST["CodigoProduto"]);*/


        $nome = $_POST["NomeProduto"];
        $CategoriaProduto = $_POST["CategoriaProduto"];
        $DescriProduto = $_POST["DescriProduto"];
        $ImagemProduto = $_POST["ImagemProduto"];
        $PreProduto = $_POST["PreProduto"];
        $estoqueMin = $_POST["eMin"];
        $estoqueMax = $_POST["eMax"];
        
        
        
        $msg = adicionarProduto($nome, $CategoriaProduto, $DescriProduto, $ImagemProduto, $PreProduto, $estoqueMin, $estoqueMax);
         echo $msg;
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