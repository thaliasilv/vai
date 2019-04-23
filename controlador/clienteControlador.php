<?php

function cadastro(){
    if(ehPost()){
      
        $nome= $_POST["nome"];
        $senha= $_POST["senha"];
        $email= $_POST["email"];
        $senha_novamente= $_POST["senhanovamente"];
         print_r($_POST);
    }else{
        exibir ("cliente/cliente");
    }
}
?>