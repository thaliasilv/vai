<?php

function adicionarProduto($nome, $CodigoProduto, $CategoriaProduto, $CodigoFabricante, $DescriProduto, $QuantidadeProduto, $PreProduto){
    $comando= "INSERT INTO produto (nome, cod, categ, cod_fabri, descr, quant, preco)
    Values ('$nome', '$CodigoProduto', '$CategoriaProduto', '$CodigoFabricante', '$DescriProduto', '$QuantidadeProduto', '$PreProduto')";

    $resultado= mysqli_query($cnx=conn(), $comando);
    if (!$resultado){die ('Erro ao cadastrar o produto'. mysqli_error($cnx)); }
return 'Produto cadastrado com sucesso!';

}

function seleciona_todos_os_produtos(){
    $sql = "select * from produto";
    $result = mysqli_query(conn(), $sql);
    $produtos = array();
    while($linha = mysqli_fetch_assoc($result)){
        $produtos[] = $linha;
    }
    return $produtos;
}
