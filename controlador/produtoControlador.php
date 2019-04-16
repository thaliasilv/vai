<?php

function visualizar() {
    
   $dados=array();
   $dados["nomeProduto"]="Relógio hippie pulseira de couro ";
   $dados["precoProduto"]="49,99";  
   $dados["DescricaoProduto"] ="O material da cinta é de alta qualidade de couro, é um relógio perfeito. Temos nas cores : Preto , Vermelho e Branco" ;
   
   exibir("produtos/visualizar", $dados);
} 