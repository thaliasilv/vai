<?php

function adicionarProduto($nome, $CategoriaProduto, $DescriProduto, $imagem, $PreProduto, $estoqueMin, $estoqueMax){
    $comando= "INSERT INTO produto(nome, cod_categoria, descr, imagem, preco, estoque_minimo, estoque_maximo)
    Values('$nome', '1','$DescriProduto', '$imagem','$PreProduto', '$estoqueMin', '$estoqueMax')";

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

function MostrarProdutoPorCodigo($cod){
    $sql = "select * from produto where id_produto= $cod";
    $result = mysqli_query(conn(), $sql);
    $produtos = mysqli_fetch_assoc($result);
    
    return $produtos;
}

function deletarProduto($idProduto) {
     $comando= "DELETE FROM produto WHERE id_produto=$idProduto";
     $conexao= conn();
     $resultado= mysqli_query($conexao, $comando);
   
     if($resultado==true){
       echo "Deu certo!";
   }else {
       echo "Deu errado";
   }
}