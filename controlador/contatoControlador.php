<?php

function contato(){
    if(ehPost()){
      
        $nome= $_POST["nome"];
        $duvida= $_POST["duvida"];
         $duvida= $_POST["telefone"];       
          $duvida= $_POST["email"];
       
       
       print_r($_POST);
    }else{
        exibir ("contato/contato");
    }
}
?>