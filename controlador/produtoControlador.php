<?php

function visualizar() {
    
   $dados=array();
   $dados["nomeProduto"]="Relógio hippie pulseira de couro ";
   $dados["precoProduto"]="49,99";  
   $dados["DescricaoProduto"] ="O material da cinta é de alta qualidade de couro, é um relógio perfeito. Temos nas cores : Preto , Vermelho e Branco" ;
   
   exibir("produtos/visualizar", $dados);
} 
function adicionar(){
    if(ehPost()){
      
        $nome= $_POST["NomeProduto"];
        $CodigoProduto= $_POST["CodigoProduto"];
        $DescriProduto= $_POST["DescriProduto"];
        $PreProduto= $_POST["PreProduto"];
        $QuantidadeProduto= $_POST["QuantidadeProduto"];
       print_r($_POST);
    }else{
        exibir ("produtos/formulario");
    }
}